<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Http\DTO\Auth\UserLoginDTO;
use Illuminate\Support\Facades\Auth;
use App\Http\DTO\Auth\UserRegisterDTO;
use App\Http\Interfaces\Auth\AuthenticationInterface;
use App\Http\Requests\UserManagement\UserLoginRequest;
use App\Http\Requests\UserManagement\UserRegisterRequest;

class LoginController extends Controller
{
    private  $authService;
    public function __construct(AuthenticationInterface $authService)
    {
        $this->authService = $authService;
    }
    /**
     * Handle admin login request.
     */
    public function login(Request $request)
    {
        // Validate input fields
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log in as admin
        if (Auth::attempt($credentials)) {
            // Redirect to admin dashboard on success
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        // Redirect back with error on failure
        return back()->withErrors([
            'email' => 'Invalid credentials. Please try again.',
        ])->withInput();
    }

    /**
     * Handle admin logout request.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session and regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }

    /**
     * Handle user login request.
     */
     public function loginUser(UserLoginRequest $request){
        try{
            $userCredentials = UserLoginDTO::fromRequest($request);
            $userLoginStatus = $this->authService->loginStatus($userCredentials->toArray());
            if($userLoginStatus){
                $request->session()->regenerate();
                return redirect()->route('index')->with('success', 'Login successful!');
            }

            return back()->withErrors([
                'login_error' => 'Login failed. Please try again.',
            ])->withInput();

        }catch(Exception $e){
            return back()
            ->withInput()
            ->withErrors([
                'error' => 'Login failed. Please try again.',
            ]);
        }
     }

    /**
     * Handle user register request.
     */
    public function registerUser(UserRegisterRequest $request){
        try {
            $userData = UserRegisterDTO::fromRequest($request);
            $userData = $this->authService->userRegistration($userData);
            // Auto login after registration
            Auth::attempt([
                'email' => $userData->email,
                'password' => $userData->password
            ]);

            return redirect()->route('index')
                ->with('success', 'Registration successful! Welcome to our platform.');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->withErrors([
                    'error' => 'Registration failed. Please try again.',
                ]);
        }
    }
}
