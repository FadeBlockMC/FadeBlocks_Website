<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FadeBlocksMC Server Rules</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    @include('header_footer.header')

    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="bg-gray-800 p-4 shadow-md rounded-lg md:col-span-1">
            <h2 class="font-bold text-lg mb-4 text-yellow-400">Articles in this section</h2>
            <nav class="space-y-2">
                <a href="/rules/network" class="block text-gray-400 hover:text-indigo-300">Network Rules</a>
                <a href="/rules/skyblock" class="block text-gray-400 hover:text-indigo-300">Skyblock Rules</a>
                <a href="/rules/forum" class="block text-indigo-400 font-bold hover:text-indigo-300">Forum Rules</a>
                <a href="/rules/allowed-modifications" class="block text-gray-400 hover:text-indigo-300">Allowed Modifications</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="bg-gray-800 p-6 shadow-md rounded-lg md:col-span-3">
            <h1 class="text-3xl font-bold mb-2 text-yellow-400">FadeBlocksMC Forum Rules</h1>
            <p class="text-gray-400 mb-4">2 months ago • Updated</p>

            <p class="text-gray-300 mb-6">
                The FadeBlocksMC Server is intended to be a fun, safe, and friendly environment for all players to enjoy. As such, we have a list of rules we expect all players to follow with no exceptions. <span class="font-bold text-white">By choosing to play on the FadeBlocksMC Server or use the FadeBlocksMC Forums and Discord, you agree to follow all rules listed within the FadeBlocksMC Rules and Policies.</span>
            </p>

            <h2 class="font-bold text-lg mb-2 text-yellow-400">Table of Content</h2>
            <ul class="list-disc list-inside text-gray-300 mb-8">
                <li><a href="#expectations" class="text-indigo-400 hover:underline">Expectations of Behavior</a></li>
                <li><a href="#reporting" class="text-indigo-400 hover:underline">Reporting Rule Breakers</a></li>
                <li><a href="#bugs" class="text-indigo-400 hover:underline">Report Server Bugs</a></li>
                <li><a href="#safety" class="text-indigo-400 hover:underline">Player Safety & Account Security</a></li>
                <li><a href="#prohibited" class="text-indigo-400 hover:underline">Behavior that is not allowed</a></li>
                <li><a href="#consequences" class="text-indigo-400 hover:underline">Consequences</a></li>
            </ul>

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
