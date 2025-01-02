@extends('layout.loginlayout')

@section('content')
    <div class="container w-full h-screen m-auto flex items-center justify-center">
        <div class="form-holder relative w-[850px] sm:h-[550px] rounded-3xl shadow-[0_0_30px_rgba(0,0,0,0.2)] overflow-hidden bg-white m-5 h-[calc(100vh-20px)]">
            {{-- login form  --}}
            <div class="absolute login-form sm:w-1/2 sm:h-full sm:-right-0 flex items-center text-center z-10  transition-all ease-in-out duration-700 delay-[1.2s] w-full h-[70%] bottom-0">
                <form id="login-form" action="" class="p-4 w-full">
                    <h1 class="text-center text-4xl font-bold text-slate-600 mb-4">Login</h1>
                    {{-- email --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-email w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email">
                    </div>
                    {{-- password  --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-lock w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Password">
                    </div>
                    <div class="forgot-password mb-3">
                        <a href="#" class="text-sm text-slate-600">Forgot Password?</a>
                    </div>
                    {{-- submit button  --}}
                    <button type="button"
                        class="px-5 py-2.5 w-full text-sm font-medium text-white inline-flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="mdi mdi-login w-3.5 h-3.5 text-white me-2 text-[20px] mr-4"></i>
                        Login
                    </button>
                </form>
            </div>
            {{-- register form  --}}
            <div class="absolute register-form sm:w-1/2 sm:h-full w-full h-[70%] flex items-center sm:-right-0 text-center invisible transition-[visibility,all] duration-[0ms,700ms] delay-[1s,0s] bottom-0 z-10">
                <form id="register-form" action="" class="p-4 w-full">
                    <h1 class="text-center text-4xl font-bold text-slate-600 mb-4">Register</h1>
                    {{-- name --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-account-circle w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="First name">
                    </div>
                    {{-- last name  --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-account-circle w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Last name">
                    </div>
                    {{-- email --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-email w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email">
                    </div>
                    {{-- password  --}}
                    <div class="flex mb-4">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-lock w-4 h-4 text-gray-500 dark:text-gray-400 text-[1.25rem]"></i>
                        </span>
                        <input type="text" id="website-admin"
                            class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Password">
                    </div>
                    {{-- agree terms and conditions  --}}
                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                        <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                    </div>
                    {{-- submit button  --}}
                    <button type="button"
                        class="px-5 py-2.5 w-full text-sm font-medium text-white inline-flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg justify-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Register
                    </button>
                </form>
            </div>
            {{-- toggle box  --}}
            <div class="toggle-box absolute h-full w-full before:absolute before:content-[''] sm:before:w-[300%] sm:before:h-full before:bg-blue-500 before:z-10 sm:before:-left-[250%] sm:before:rounded-[150px] before:rounded-[100px] before:transition-all before:ease-in-out before:duration-[1.8s] sm:before:top-0 before:-top-[270%] before:w-full before:h-[300%] left-0">
                <div class="toggle-panel toggle-left absolute w-full sm:w-1/2 h-[30%] sm:h-full flex flex-col justify-center items-center text-white group *:mb-4 z-10 top-0">
                    <h1 class="sm:text-4xl text-2xl font-bold">Hello Welcome!</h1>
                    <p class="">Don't have an account</p>
                    <button class="w-[160px] h-[46px] bg-transparent border-solid border-2 border-white shadow-none font-medium rounded-lg text-sm px-5 py-2.5 text-center register-btn">Register Now</button>
                </div>
                <div class="toggle-panel toggle-right absolute w-full sm:w-1/2 h-[30%] sm:h-full flex flex-col justify-center items-center text-white group *:mb-4 z-10 sm:-right-1/2 delay-700 -bottom-[30%] sm:bottom-0">
                    <h1 class="sm:text-4xl text-2xl font-bold">Welcome Back!</h1>
                    <p class="">Already have an account?</p>
                    <button class="w-[160px] h-[46px] bg-transparent border-solid border-2 border-white shadow-none font-medium rounded-lg text-sm px-5 py-2.5 text-center login-btn">Login Now</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        const formContainer = document.querySelector('.form-holder');
        const registerBtn = document.querySelector('.register-btn');
        const loginBtn = document.querySelector('.login-btn');

        registerBtn.addEventListener('click', () => {
            formContainer.classList.add('active');
        });

        loginBtn.addEventListener('click', () => {
            formContainer.classList.remove('active');
        });
    </script>
    @endpush
@endsection
