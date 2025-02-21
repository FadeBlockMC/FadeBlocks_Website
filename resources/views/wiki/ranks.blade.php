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

            <h1 class="text-3xl font-bold mb-2 text-yellow-400">Home</h1>
            <p class="text-sm text-gray-400 mt-1">Last edited by <span class="text-indigo-400">Renssus</span> - Today</p>

            <p class="mt-4 text-gray-300">View all the official Fadeblocks links here! For more information and support please reach out on our official Discord server for a quick response, link below.</p>

            <section class="mt-8">
                <h2 class="text-2xl font-bold text-yellow-400">Server Links</h2>
                <p class="text-sm text-gray-400">The server version is on 1.21.3</p>
                <ul class="mt-2 space-y-1">
                    <li><span class="font-bold text-white">Java IP:</span> <a href="#" class="text-yellow-400">play.fadeblocks.com</a></li>
                    <li><span class="font-bold text-white">Bedrock IP:</span> <a href="#" class="text-yellow-400">play.fadeblocks.com</a> <span class="text-gray-400">Port: 19132</span></li>
                    <li><span class="font-bold text-white">Discord:</span> <a href="https://discord.gg/fadeblocks" class="text-yellow-400">https://discord.gg/fadeblocks</a></li>
                    <li><span class="font-bold text-white">Shop:</span> <a href="https://store.fadeblocks.com/" class="text-yellow-400">https://store.fadeblocks.com/</a></li>
                </ul>
            </section>

            <section class="mt-8">
                <h2 class="text-2xl font-bold text-yellow-400">Voting Links</h2>
                <p class="text-sm text-gray-400">You can vote on each site every 24 hours. If you are a bedrock player, make sure to type your name as it appears in-game including "BR_".</p>
                <p class="text-sm text-gray-400">Why vote? You will get 1 vote key per site, and the top voters get $20 store credit.</p>
                <ol class="mt-2 space-y-1 list-decimal list-inside text-gray-300">
                    <li><a href="https://minecraftservers.org/vote/599626" class="text-yellow-400 hover:underline">https://minecraftservers.org/vote/599626</a></li>
                    <li><a href="https://servers-minecraft.net/server-blossomcraft-java-bedrock.1013" class="text-yellow-400 hover:underline">https://servers-minecraft.net/server-blossomcraft-java-bedrock.1013</a></li>
                    <li><a href="https://topminecraftservers.org/vote/29453" class="text-yellow-400 hover:underline">https://topminecraftservers.org/vote/29453</a></li>
                    <li><a href="https://minecraftbestservers.com/server-blossomcraft.277/vote" class="text-yellow-400 hover:underline">https://minecraftbestservers.com/server-blossomcraft.277/vote</a></li>
                    <li><a href="https://minecraftbestservers.com/account/server/3959" class="text-yellow-400 hover:underline">https://minecraftbestservers.com/account/server/3959</a></li>
                    <li><a href="https://play-minecraft-servers.com/minecraft-servers/fadeblocks/" class="text-yellow-400 hover:underline">https://play-minecraft-servers.com/minecraft-servers/fadeblocks/</a></li>
                    <li><a href="https://topg.org/add" class="text-yellow-400 hover:underline">https://topg.org/add</a></li>
                    <li><a href="https://minecraftpocket-servers.com/" class="text-yellow-400 hover:underline">https://minecraftpocket-servers.com/</a></li>
                    <li><a href="https://servers-minecraft.net/" class="text-yellow-400 hover:underline">https://servers-minecraft.net/</a></li>
                    <li><a href="https://topminecraftservers.org/" class="text-yellow-400 hover:underline">https://topminecraftservers.org/</a></li>
                </ol>
            </section>
        </main>
    </div>
</body>
<footer>
    @include('header_footer.footer')
</footer>
</html>