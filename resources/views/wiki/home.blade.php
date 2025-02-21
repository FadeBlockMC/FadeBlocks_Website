<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FadeBlocks Wiki</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    @include('header_footer.header')

    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="bg-gray-800 p-4 shadow-md rounded-lg md:col-span-1">
            <h2 class="font-bold text-lg mb-4 text-yellow-400">Menu</h2>
            <nav class="space-y-2">
                <a href="home" id="home-link" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Home</a>
                <a href="rules" id="rules-link" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Rules</a>
                <a href="commands" id="commands-link" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Commands</a>
                <a href="#" id="faq-link" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">FAQ</a>
                <a href="#" id="skyblock-link" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Skyblock</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="bg-gray-800 p-6 shadow-md rounded-lg md:col-span-3">
            <div id="content">
                <h1 class="text-3xl font-bold mb-2 text-yellow-400">Home</h1>
                <p class="text-sm text-gray-400 mt-1">Last edited by <span class="text-indigo-400">Renssus</span> - Today</p>
                <p class="mt-4 text-gray-300">View all the official Fadeblocks links here! For more information and support please reach out on our official Discord server for a quick response, link below.</p>
            </div>
        </main>

        <!-- Home -->
        <div id="home-content" style="display: none;">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">Home</h1>
            <p class="text-sm text-gray-400 mt-1">Last edited by <span class="text-indigo-400">Renssus</span> - Today</p>
            <p class="mt-4 text-gray-300">View all the official Fadeblocks links here! For more information and support please reach out on our official Discord server for a quick response, link below.</p>
        </div>

        <!-- Rules -->
        <div id="rules-content" style="display: none;">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">Rules</h1>
            <p class="mt-4 text-gray-300">Hey this is the rules</p>
        </div>

        <!-- Commands -->
        <div id="commands-content" style="display: none;">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">Commands</h1>
            <p class="mt-4 text-gray-300">Here are the commands</p>
        </div>

       <!-- FAQ -->
        <div id="faq-content" style="display: none;">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">FAQ</h1>
            <p class="mt-4 text-gray-300">Frequently Asked Questions</p>
        </div>

       <!-- Skyblock -->
        <div id="skyblock-content" style="display: none;">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">Skyblock</h1>
            <p class="mt-4 text-gray-300">Skyblock information</p>
        </div>
    </div>

    <script>
        document.getElementById('home-link').addEventListener('click', function() {
            document.getElementById('content').innerHTML = document.getElementById('home-content').innerHTML;
        });

        document.getElementById('rules-link').addEventListener('click', function() {
            document.getElementById('content').innerHTML = document.getElementById('rules-content').innerHTML;
        });

        document.getElementById('commands-link').addEventListener('click', function() {
            document.getElementById('content').innerHTML = document.getElementById('commands-content').innerHTML;
        });

        document.getElementById('faq-link').addEventListener('click', function() {
            document.getElementById('content').innerHTML = document.getElementById('faq-content').innerHTML;
        });

        document.getElementById('skyblock-link').addEventListener('click', function() {
            document.getElementById('content').innerHTML = document.getElementById('skyblock-content').innerHTML;
        });
    </script>
</body>
<footer>
    @include('header_footer.footer')
</footer>
</html>