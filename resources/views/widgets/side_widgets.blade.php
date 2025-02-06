<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>FadeBlocksMC - Server Status</title>
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <p class="text-2xl font-bold text-yellow-400">Server Status</p>

            <!-- Minecraft Server Status -->
            <img src="{{ asset('images/socials/minecraft-block.png') }}" class="h-8 w-8" alt="Minecraft Icon">                <div>
                    <p class="text-lg font-bold text-green-400">Minecraft Servers</p>
                    <p id="mc-player-count" class="text-gray-400 text-sm">Loading...</p>
                <button id="copy-btn" class="ml-auto bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-full">COPY</button>
            </div>

            <!-- Divider -->
            <hr class="border-gray-700 my-4">

            <!-- Discord Server Status -->
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111370.png" class="h-8 w-8" alt="Discord Icon">
                <div>
                    <p class="text-lg font-bold text-indigo-400">Discord Server</p>
                    <p id="discord-member-count" class="text-gray-400 text-sm">Loading...</p>
                </div>
                <button class="ml-auto bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded-full">JOIN</button>
            
        </div>
    </div>

    <!-- Minecraft Server API Fetch -->
    <script>
        fetch('https://api.mcsrvstat.us/2/fadeblocksmc.mcplay.nu')
            .then(response => response.json())
            .then(data => {
                if (data.online) {
                    document.getElementById('mc-player-count').innerText = `${data.players.online}/${data.players.max} Servers Online`;
                } else {
                    document.getElementById('mc-player-count').innerText = 'Server Offline';
                }
            })
            .catch(error => {
                document.getElementById('mc-player-count').innerText = 'Unable to fetch server data';
                console.error('Error:', error);
            });

        // Copy to clipboard functionality
        const copyBtn = document.getElementById('copy-btn');
        copyBtn.addEventListener('click', function() {
            const serverIP = 'play.fadeblocksmc.com';
            navigator.clipboard.writeText(serverIP).then(() => {
                copyBtn.textContent = 'COPIED';
                setTimeout(() => {
                    copyBtn.textContent = 'COPY';
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    </script>

    <!-- Discord Server API Fetch -->
    <script>
        fetch('https://discord.com/api/guilds/1298717684439191573/widget.json')
            .then(response => response.json())
            .then(data => {
                document.getElementById('discord-member-count').innerText = `${data.presence_count} Members Online`;
            })
            .catch(error => {
                document.getElementById('discord-member-count').innerText = 'Unable to fetch server data';
                console.error('Error:', error);
            });
    </script>
</body>
</html>
