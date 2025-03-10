<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .background-section {
            background: url('/images/logo/Background.png') no-repeat center center;
            background-size: cover;
            min-height: 350px; /* Compact header */
        }
    </style>
</head>
<body class="text-white">

<!-- Header Section -->
<header class="relative background-section pb-24">
    <div class="container mx-auto text-center pt-6">
        
        <!-- Logo + Main Call-to-Action Section -->
        <div class="flex flex-col items-center">
            <img src="images/logo/fadeblocksmc.png" alt="Game Logo" class="w-60 mb-4"> 
            <p class="text-lg font-semibold">Learn how to join our server and start playing in 60 seconds</p>
            
            <div class="mt-4 bg-[#1A1A40] px-6 py-4 rounded-lg shadow-lg flex justify-between items-center w-full max-w-3xl">
                <span class="text-yellow-400 text-xl font-bold">Play Now</span>
                <a href="#" class="bg-yellow-400 text-black font-bold py-3 px-6 rounded-lg text-lg shadow-lg hover:bg-yellow-500">Join</a>
            </div>
        </div>

        <!-- Minecraft Server & Discord Info (Side by Side, Fixed Spacing) -->
        <div class="mt-4 mb-6 flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-6">
            <!-- Minecraft Server Info -->
            <div class="bg-[#0E4AD9] flex items-center px-4 py-2 rounded-lg shadow-lg cursor-pointer bg-opacity-90">
                <span class="bg-yellow-400 text-black font-bold px-3 py-1 rounded-lg text-lg" id="player-count">Loading...</span>
                <span class="text-yellow-300 font-bold text-lg ml-3">play.fadeblocks.com</span>
            </div>

            <!-- Discord Info -->
            <div class="bg-[#28B4F3] flex items-center px-6 py-3 rounded-lg text-lg font-semibold shadow-lg bg-opacity-90">
                <span class="bg-red-500 px-2 py-1 rounded text-white mr-2" id="discord-members">Loading...</span>
                Join Our Discord
                <img src="images/socials/discordlogo.svg" alt="Discord Icon" class="w-6 h-6 ml-2">
            </div>
        </div>

        <!-- Navigation Bar Merged at Bottom of Header -->
        <div class="absolute bottom-0 left-0 w-full bg-blue-900 bg-opacity-60 shadow-lg">
            <div class="flex justify-between items-center px-8 py-3">
                
                <!-- Navigation Menu -->
                <nav class="w-full flex justify-center">
                    <ul class="flex space-x-6">
                        <li><a href="/" class="bg-blue-950 bg-opacity-80 text-yellow-400 font-bold px-4 py-2 rounded-md">Home</a></li>
                        <li><a href="/forums" class="text-white hover:text-yellow-300 px-4 py-2">Forums</a></li>
                        <li><a href="/vote" class="text-white hover:text-yellow-300 px-4 py-2">Vote</a></li>
                        <li><a href="/staff" class="text-white hover:text-yellow-300 px-4 py-2">Staff</a></li>
                        <li><a href="/members" class="text-white hover:text-yellow-300 px-4 py-2">Members</a></li>
                        <li><a href="/rules" class="text-white hover:text-yellow-300 px-4 py-2">Rules</a></li>
                        <li><a href="/stats" class="text-white hover:text-yellow-300 px-4 py-2">Stats</a></li>
                        <li><a href="/punishments" class="text-white hover:text-yellow-300 px-4 py-2">Punishments</a></li>
                    </ul>
                </nav>

                <!-- Store Button -->
                <a href="#" class="bg-yellow-400 text-black font-bold py-3 px-6 rounded-lg text-xl shadow-lg hover:bg-yellow-500 flex items-center">
                    <img src="images/Icons/Cart.png" alt="Cart Icon" class="w-6 h-6 mr-2">
                    <span>Store</span>
                </a>
            </div>
        </div>

    </div>
</header>

</body>

<script>
    // Fetch Minecraft server info
    fetch('https://api.mcsrvstat.us/2/play.fadeblocks.com')
        .then(response => response.json())
        .then(data => {
            if (data.online) {
                document.getElementById('player-count').innerText = data.players.online;
            } else {
                document.getElementById('player-count').innerText = 'Server Offline';
            }
        })
        .catch(error => {
            document.getElementById('player-count').innerText = 'N/A';
            console.error('Error fetching server data:', error);
        });

    // Fetch Discord members count
    fetch('https://discord.com/api/guilds/1298717684439191573/widget.json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('discord-members').innerText = data.presence_count;
        })
        .catch(error => {
            document.getElementById('discord-members').innerText = 'N/A';
            console.error('Error fetching Discord members:', error);
        });
</script>

</html>
