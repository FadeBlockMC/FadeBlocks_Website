<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>FadeBlocksMC</title>
<body class="bg-gray-900 text-white">
    <header class="bg-gray-800 shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
            </div>
            <ul class="flex space-x-6 text-lg">
                <li><a href="#" class="hover:text-yellow-400">Home</a></li>
                <li><a href="/rules" class="hover:text-yellow-400">Rules</a></li>
                <li><a href="#" class="hover:text-yellow-400">Forums</a></li>
                <li><a href="#" class="hover:text-yellow-400">Updates</a></li>
                <li><a href="#" class="hover:text-yellow-400">Wiki</a></li>
                <li><a href="#" class="hover:text-yellow-400">Support</a></li>
                <li><a href="#" class="hover:text-yellow-400">More</a></li>
            </ul>
            <div>
                <a href="https://store.fadeblocksmc.com" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">Store</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8 text-center">
        <img src="{{ asset('images/logo/FadeBlocksMCC.png') }}" alt="FadeBlocksMC Logo" class="h-10"></head>
        <h1 class="text-5xl font-extrabold text-yellow-400">FadeBlocksMC</h1>
        <div class="mt-4">
            <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded mr-2">Log in</button>
            <button class="bg-gray-700 hover:bg-gray-600 text-white py-2 px-4 rounded">Register</button>
        </div>

    </main>
</body>
</html>