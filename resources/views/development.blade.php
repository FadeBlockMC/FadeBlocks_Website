<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | Fadeblocks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-900 to-purple-800 text-white flex flex-col items-center justify-between min-h-screen">

    <header class="w-full mb-10">
        @include('widgets.header')
    </header>

    <div class="text-center flex-grow">
        <h1 class="text-5xl font-extrabold animate-bounce mb-4">Coming Soon</h1>
        <p class="text-lg mb-6">Sorry, this page is still in development!</p>
        
        <div>
            <a href="/" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-6 rounded-full shadow-lg transition-all duration-300">
                Back to Home
            </a>
        </div>
    </div>

    <footer class="w-full mt-16">
        @include('widgets.footer')
    </footer>

</body>
</html>
