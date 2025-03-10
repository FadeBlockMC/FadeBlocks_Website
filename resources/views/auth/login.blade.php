<header>
    @include('widgets.header')
</header>

<div class="flex justify-center items-center bg-gradient-to-b from-blue-950 to-blue-800 py-10">
    <div class="w-full max-w-md p-6 bg-blue-900 shadow-lg rounded-lg border border-blue-700">
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @if(session('error'))
            <div class="bg-red-600 text-white p-3 rounded-md mb-4">
                ❌ {{ session('error') }}
            </div>
        @endif

        <h2 class="text-xl font-bold text-white text-center">Login to Your Account</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <p>Email</p>
                <x-text-input id="email" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <p>Password</p>
                <x-text-input id="password" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4 text-sm">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 bg-blue-800 text-indigo-400 focus:ring-indigo-500" name="remember">
                <label for="remember_me" class="ml-2 text-gray-300">Remember me</label>
            </div>

            <!-- Login Button & Forgot Password -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-xs text-gray-400 hover:text-yellow-400" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif

                <x-primary-button class="bg-yellow-400 text-black px-5 py-2 rounded-md text-sm font-semibold hover:bg-yellow-500 transition-all">
                    Log in
                </x-primary-button>
            </div>
        </form>

        <div class="text-center mt-3 text-gray-300 text-sm">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-yellow-400 hover:underline">Register here</a>
        </div>
    </div>
</div>

<footer>
    @include('widgets.footer')
</footer>
