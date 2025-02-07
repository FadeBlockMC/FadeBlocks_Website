<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

@include('header_footer.header')

<body>
    <div class="max-w-md mx-auto bg-gray-800 text-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 text-yellow-500">Register</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Name:')" class="text-sm text-gray-300" />
                <x-text-input id="name" class="block mt-1 w-full bg-gray-700 border-gray-600" type="text" name="name" :value="old('name')"  required autofocus />
                <p class="text-xs text-gray-400 mt-1">This is the name that will be shown with your messages. Once set, this cannot be changed.</p>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email:')" class="text-sm text-gray-300" />
                <x-text-input id="email" class="block mt-1 w-full bg-gray-700 border-gray-600" 
                              type="email" 
                              name="email" 
                              :value="old('email')" 
                              required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password:')" class="text-sm text-gray-300" />
                <x-text-input id="password" class="block mt-1 w-full bg-gray-700 border-gray-600" 
                              type="password" 
                              name="password" 
                              required 
                              autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Privacy Policy -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="privacy_policy" id="privacy_policy" required class="mr-2 bg-gray-700 border-gray-600">
                <label for="privacy_policy" class="text-sm text-gray-300">
                    I agree to the <a href="#" class="text-blue-400 underline">privacy policy</a>.
                </label>
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>

@include('header_footer.footer')

</html>
