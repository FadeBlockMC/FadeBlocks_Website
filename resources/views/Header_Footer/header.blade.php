<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>FadeBlocksMC</title>
    <style>
        [x-cloak] { display: none; }
    </style>
</head>
<body class="bg-gray-900 text-white" x-data="{ openLogin: false, openRegister: false }">

    <header class="bg-gray-800 shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <ul class="flex space-x-6 text-lg">
                <li><a href="/" class="hover:text-yellow-400">Home</a></li>
                <li><a href="/rules" class="hover:text-yellow-400">Rules</a></li>
                <li><a href="#" class="hover:text-yellow-400">Forums</a></li>
                <li><a href="#" class="hover:text-yellow-400">Updates</a></li>
                <li><a href="/wiki" class="hover:text-yellow-400">Wiki</a></li>
                <li><a href="#" class="hover:text-yellow-400">Support</a></li>
                <li><a href="#" class="hover:text-yellow-400">More</a></li>
            </ul>
            <div>
                <a href="https://store.fadeblocksmc.com" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Store</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8 text-center">
        <img src="{{ asset('images/logo/FadeBlocksMCC.png') }}" alt="FadeBlocksMC Logo" class="h-10">
        <h1 class="text-5xl font-extrabold text-yellow-400">FadeBlocksMC</h1>
        <div class="mt-4">
            @auth
                <p class="text-lg text-yellow-400">Hello, {{ Auth::user()->name }}!</p>
                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">
                        Logout
                    </button>
                </form>
            @else
                <!-- Login Button -->
                <a href="{{ route('login') }}" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded mr-2">
                    Log in
                </a>
                <!-- Register Button -->
                <a href="{{ route('register') }}" class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">
                    Register
                </a>
            @endauth
        </div>
    </main>

</body>
</html>