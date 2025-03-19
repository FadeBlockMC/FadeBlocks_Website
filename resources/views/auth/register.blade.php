<header>
    @include('widgets.header')
</header>

<div class="flex justify-center items-center bg-gradient-to-b from-blue-950 to-blue-800 py-10">
    <div class="w-full max-w-md p-6 bg-blue-900 shadow-lg rounded-lg border border-blue-700">
        <h2 class="text-xl font-bold text-white text-center">Create an Account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <p>Name</p>
                <x-text-input id="name" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Email Address -->
            <div class="mb-3">
                <p>Email</p>
                <x-text-input id="email" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <p>Password</p>
                <x-text-input id="password" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <p>Confirm Password</p>
                <x-text-input id="password_confirmation" class="block mt-1 w-full p-2.5 bg-blue-800 text-white rounded-md border border-blue-600 focus:ring-2 focus:ring-blue-400" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-400 text-xs" />
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between">
                <a class="text-xs text-gray-400 hover:text-yellow-400" href="{{ route('login') }}">
                    Already registered?
                </a>
                
                <x-primary-button class="bg-yellow-400 text-black px-5 py-2 rounded-md text-sm font-semibold hover:bg-yellow-500 transition-all">
                    Register
                </x-primary-button>
            </div>
        </form>
    </div>
</div>

<footer>
    @include('widgets.footer')
</footer>
