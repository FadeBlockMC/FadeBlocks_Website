<header>
    @include('widgets.header')
</header>

<div class="flex justify-center items-center bg-gradient-to-b from-blue-950 to-blue-800 py-10">
    <div class="w-full max-w-md p-6 bg-blue-900 shadow-lg rounded-lg border border-blue-700">
        <h2 class="text-xl font-bold text-white text-center">Forgot Your Password?</h2>

        <div class="mb-4 text-sm text-gray-300">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <p>Email</p>
                <x-text-input id="email" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-xs" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="bg-yellow-400 text-black px-5 py-2 rounded-md text-sm font-semibold hover:bg-yellow-500 transition-all">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

<footer>
    @include('widgets.footer')
</footer>
