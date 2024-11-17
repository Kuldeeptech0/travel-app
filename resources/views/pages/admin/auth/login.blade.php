@extends('layout.mainlayout')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-center text-2xl font-bold mb-6">Login</h2>
        @if(session('error'))
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('admin.login.process') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required value="{{ old('email') }}">
                @error('email')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                @error('password')
                <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-between mb-6">
                <label for="remember" class="flex items-center text-sm">
                    <input type="checkbox" name="remember" id="remember" class="mr-2"> Remember Me
                </label>
                <a href="#" class="text-blue-600 hover:underline text-sm">Forgot Password?</a>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>
</div>
@endsection

@push('scripts')

@endpush
