@extends('widgets.layout')

<title>Login | FadeBlocks</title>

@section('content')
<div class="flex justify-center items-center bg-gradient-to-b   min-h-screen py-16">
    <div class="w-full max-w-md p-8  shadow-lg rounded-lg ">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @if(session('error'))
            <div class="bg-red-600 text-white p-3 rounded-md mb-4 text-center">
                ❌ {{ session('error') }}
            </div>
        @endif

        <!-- Title -->
        <h2 class="text-2xl font-extrabold text-white text-center mb-6">Login to Your Account</h2>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <p class="text-gray-300 mb-1 font-medium">Email</p>
                <x-text-input id="email" class="block w-full p-3  text-white rounded-md border  focus:ring-2 focus:ring-yellow-400 placeholder-gray-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <p class="text-gray-300 mb-1 font-medium">Password</p>
                <x-text-input id="password" class="block w-full p-3  text-white rounded-md border  focus:ring-2 focus:ring-yellow-400 placeholder-gray-400" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-5 text-sm">
                <input id="remember_me" type="checkbox" class="rounded border-gray-400  text-yellow-400 focus:ring-yellow-400" name="remember">
                <label for="remember_me" class="ml-2 text-gray-300">Remember me</label>
            </div>

            <!-- Login Button & Forgot Password -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-xs text-gray-400 hover:text-yellow-400 transition" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif

                <x-primary-button class="bg-yellow-400 text-black px-6 py-3 rounded-lg text-sm font-semibold hover:bg-yellow-500 transition-all shadow-md hover:shadow-lg">
                    Log in
                </x-primary-button>
            </div>
        </form>

        <!-- Register Link -->
        <div class="text-center mt-4 text-gray-300 text-sm">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-yellow-400 hover:underline transition">Register here</a>
        </div>
    </div>
</div>
@endsection
