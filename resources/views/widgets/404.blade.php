<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akward | Fadeblocks</title>
</head>
<header>
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
        *{
            color:black;
        }
    </style>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JBWZ5J0YWJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JBWZ5J0YWJ');
</script>
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

</header>
<body>
    <div class="text-center flex-grow">
        <h1 class="text-5xl font-extrabold mb-4 text-black">Well this is akward</h1>
        <p class="text-lg mb-6 text-black">Sorry, but this page is not found. Error 404</p>
        <p class="text-lg mb-6 text-black">Take a cookie and go back to the home. 🍪 </p>
        <p class="text-lg mb-6 text-black">And dont try to hit this page again for another cookie</p>

        
        <div>
            <a href="/" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-bold py-2 px-6 rounded-full shadow-lg transition-all duration-300">
                Back to Home
            </a>
        </div>
    </div>
</body>
<footer>
    <footer class="bg-black text-white py-10 mt-auto">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10">
            
            <!-- About Us -->
            <div>
                <h3 class="font-bold text-lg flex items-center space-x-2">
                    <img src="{{ asset('images/Icons/info.png') }}" alt="Info" class="w-6 h-6">
                    <span>About Us</span>
                </h3>
                <p class="text-sm mt-3 text-gray-300 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci odit dolore commodi molestias ea quis nulla, consequuntur aut est error facere ipsum aspernatur soluta alias.
                </p>
            </div>
    
            <!-- Useful Links -->
            <div>
                <h3 class="font-bold text-lg flex items-center space-x-2">
                    <img src="{{ asset('images/Icons/Link.png') }}" alt="Link icon" class="w-6 h-6">
                    <span>Useful Links</span>
                </h3>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="/" class="hover:text-yellow-500 transition">Home</a></li>
                    <li><a href="/development" class="hover:text-yellow-500 transition">Server Rules</a></li>
                    <li><a href="/development" class="hover:text-yellow-500 transition">Application</a></li>
                    <li><a href="/development" class="hover:text-yellow-500 transition">Wiki</a></li>
                    <li><a href="/development" class="hover:text-yellow-500 transition">Staff</a></li>
                    <li><a href="/development" class="hover:text-yellow-500 transition">Leaderboards</a></li>
                    <li><a href="/development#" class="hover:text-yellow-500 transition">FAQ</a></li>
                </ul>
            </div>
    
            <!-- Fadeblocks Store -->
            <div>
                <h3 class="font-bold text-lg flex items-center space-x-2">
                    <img src="{{ asset('images/Icons/Cart.png') }}" alt="Cart Icon" class="w-6 h-6">
                    <span>Fadeblocks Store</span>
                </h3>
                <p class="text-sm mt-3 text-gray-300 leading-relaxed">
                    Support our network by purchasing ranks and other items in the store. Your support helps us continue improving and delivering quality content!
                </p>
                <a href="#" class="inline-block mt-4 bg-yellow-600 text-black px-5 py-2 rounded font-bold hover:bg-yellow-500 transition">
                    Visit the Store
                </a>
    
                <!-- Social Media Icons -->
                <div class="flex space-x-3 mt-6">
                    <a href="https://discord.gg/KtZbQshydJ" target="_blank">
                        <img src="{{ asset('images/socials/discord.png') }}" alt="Discord" class="w-10 h-10">
                    </a>
                    <a href="https://x.com/fadeblocksmc" target="_blank">
                        <img src="{{ asset('images/socials/twitter.png') }}" alt="Twitter" class="w-10 h-10">
                    </a>
                    <a href="https://www.tiktok.com/@fadeblocksmc" target="_blank">
                        <img src="{{ asset('images/socials/tiktok.png') }}" alt="TikTok" class="w-10 h-10">
                    </a>
                    <a href="https://www.instagram.com/fadeblocksmc/" target="_blank">
                        <img src="{{ asset('images/socials/instagram.png') }}" alt="Instagram" class="w-10 h-10">
                    </a>
                </div>
            </div>
        </div>
    
        <!-- Footer Bottom -->
        <div class="text-center text-gray-400 text-sm mt-10 border-t border-gray-700 pt-4">
            &copy; 2025 Fadeblocks Network. All Rights Reserved. <br>
            Not affiliated with Mojang or Microsoft.
        </div>
    </footer>
    
</footer>
</html>