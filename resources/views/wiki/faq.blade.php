<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title Server Rules</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    @include('header_footer.header')

    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="bg-gray-800 p-4 shadow-md rounded-lg md:col-span-1">
            <h2 class="font-bold text-lg mb-4 text-yellow-400">Menu</h2>
            <nav class="space-y-2">
                <a href="/wiki" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Home</a>
                <a href="/wiki/faq" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Rules</a>
                <a href="/wiki/commands" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">Commands</a>
                <a href="/wiki/faq" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">FAQ</a>
                <a href="/wiki/skyblock" class="block p-2 bg-gray-700 text-gray-400 hover:text-indigo-300 rounded">skyblock</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="bg-gray-800 p-6 shadow-md rounded-lg md:col-span-3">

            <!-- Sections -->
            <section id="expectations" class="mb-8">
                <img src="{{ asset('images/rules/behavior.png') }}" alt="Expectations of Behavior" class="w-full rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2 text-yellow-400">Expectations of Behavior</h3>
                <p class="text-gray-300">We encourage players to cooperate and compete in a positive environment, but never in a way that disrespects or abuses other players. <span class="font-bold text-white">Be respectful to all players.</span> These rules are in place to maintain a welcoming and safe environment for all players.</p>
            </section>

            <section id="reporting" class="mb-8">
                <img src="{{ asset('images/rules/reporting.png') }}" alt="Reporting Rule Breakers" class="w-full rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2 text-yellow-400">Reporting Rule Breakers</h3>
                <p class="text-gray-300">Reporting players helps us improve our reporting system and allow for a better quality gameplay experience for our players. Reporting a player can be done by using /report in-game. You can find more information about reporting players in our Support Article.</p>
            </section>

            <section id="bugs" class="mb-8">
                <img src="{{ asset('images/rules/bugs.png') }}" alt="Reporting Server Bugs" class="w-full rounded-lg mb-4">
                <h3 class="text-2xl font-bold mb-2 text-yellow-400">Reporting Server Bugs</h3>
                <p class="text-gray-300">If you encounter any bugs or issues while playing, please report them promptly using our bug reporting system. Your reports help us improve the server for everyone.</p>
            </section>
        </main>
    </div>
</body>
</html>