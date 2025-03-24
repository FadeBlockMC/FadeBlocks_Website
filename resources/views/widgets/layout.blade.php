<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'FadeBlocks')</title>
    <style>
        body {
            background-color: #D0E7FF;
            color: white;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="main w-[80%] mx-auto mt-6 flex rounded-lg p-4">

    <!-- Sidebar -->
    <aside class="w-64 bg-white h-auto p-6 rounded-lg flex-shrink-0">
        <div class="flex flex-col items-center bg-blue-200 p-4 rounded-lg">
            <img src="{{ asset('images/logo/fadeblocks.png') }}" alt="Logo" class="w-24 h-24 rounded-lg shadow-md">
        </div>

        <nav class="mt-6 space-y-4">
            <a href="/" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span> <img src="{{ asset('images/Icons/Home.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">Home</span></a>
            <a href="/rules" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Rules.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">Rules</span></a>
            <a href="/staff" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Applications.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">Staff</span></a>
            <a href="/apply" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Chat.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">forums</span></a>
            <p>-<p>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Faq.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">FAQ</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Info.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">Wiki</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/Link.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">Vote for Java</span></a>
        </nav>

        <div class="mt-auto space-y-2">
            <a href="#" class="flex items-center text-yellow-500 hover:text-yellow-600 font-semibold px-3 py-2 nav-link"><span><img src="{{ asset('images/Icons/cart.png') }}" alt="Logo" class="w-6 h-6"></span><span class="ml-3">STORE</span></a>
        </div>
    </aside>

    <!-- Right Section (Header + Main Content) -->
    <div class="flex-1 ml-6">
        
        <!-- Header -->
        <header class="bg-white shadow-md p-4 flex items-center justify-between rounded-lg smooth-shadow w-full">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Search..." 
                        class="px-4 py-2 w-full max-w-2xl rounded-full bg-gray-200 text-gray-800 outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>

            <a href="#" class="bg-yellow-400 text-black px-6 py-2 rounded-lg font-semibold shadow-md hover:bg-yellow-500 transition">
                PLAY.FADEBLOCKS.NET
            </a>
        </header>

        <!-- Main Content -->
        <main class="mt-6">
            @yield('content')
        </main>
    </div>

    <!-- Right Sidebar -->
    <div class="col-span-1 w-72 space-y-6 ml-6">

    <div class="bg-white p-6 rounded-lg shadow-lg smooth-shadow w-full max-w-xs">
    <p class="text-yellow-500 font-bold text-lg mb-3">Be a part of the community!</p>

            <div class="flex space-x-4 mt-2">
                <!-- Login Button -->
                <a href="/login" class="flex-1 bg-blue-500 text-white text-center py-2 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                    Login
                </a>

                <!-- Register Button -->
                <a href="/register" class="flex-1 bg-green-500 text-white text-center py-2 rounded-lg font-semibold shadow-md hover:bg-green-600 transition">
                    Register
                </a>
            </div>
        </div>

        <div class="bg-[#5865F2] p-5 rounded-2xl shadow-lg w-full max-w-xs text-white flex flex-col">
    <!-- Header with Icon -->
    <div class="flex items-center space-x-3">
        <img src="{{ asset('images/socials/minecraft-block.png') }}" alt="Minecraft" class="w-8 h-8">
        <p class="text-lg font-bold">play.fadeblocks.com (placeholder)</p>
    </div>

    <!-- Player Count -->
    <p class="text-sm text-gray-200 mt-1">Join our <span class="font-semibold text-white">0</span> Players online</p>

    <!-- Play Button -->
    <a href="/play" class="flex justify-between items-center mt-4 bg-white text-[#5865F2] py-3 px-5 rounded-full font-semibold shadow-md hover:bg-gray-200 transition-all duration-300 ease-in-out">
        <span class="text-md">I want to play</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</div>

        <!-- hexcode 5865F2 -->
        <div class="bg-[#5865F2] p-4 rounded-lg shadow-lg flex items-center justify-between text-white w-full max-w-xs">
    <div>
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/socials/discord-logo-white.png') }}" alt="Discord" class="w-35 h-8">
        </div>
        
        <p class="text-sm text-white opacity-80 mt-1" id="member-count">Members Online</p>
    </div>

    <!-- Clickable Arrow Button -->
    <a href="https://discord.gg/yourserver" class="bg-white bg-opacity-20 p-2 rounded-full hover:bg-opacity-40 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</div>



        <div class="bg-white p-4 rounded-lg shadow-md smooth-shadow">
            <p class="text-yellow-500 font-bold text-xl">Social Media</p>
            <div class="flex space-x-4 mt-4">
                <a href="#"><img src="{{ asset('images/socials/discord.png') }}" class="w-10 hover:scale-110 transition"></a>
                <a href="#"><img src="{{ asset('images/socials/twitter.png') }}" class="w-10 hover:scale-110 transition"></a>
                <a href="#"><img src="{{ asset('images/socials/tiktok.png') }}" class="w-10 hover:scale-110 transition"></a>
                <a href="#"><img src="{{ asset('images/socials/instagram.png') }}" class="w-10 hover:scale-110 transition"></a>
            </div>
        </div>
    </div>

</div>
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
                <li><a href="/rules" class="hover:text-yellow-500 transition">Server Rules</a></li>
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


</body>
</html>
<!-- google api -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JBWZ5J0YWJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JBWZ5J0YWJ');

// discord api
    fetch('https://discord.com/api/guilds/1298717684439191573/widget.json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('member-count').innerText = `${data.presence_count} users Online`;
        })
        .catch(error => {
            document.getElementById('member-count').innerText = 'Unable to load data';
            console.error('Error fetching Discord data:', error);
        });



// minecraft server api
fetch('https://api.mcsrvstat.us/2/play.fadeblocks.com')
        .then(response => response.json())
        .then(data => {
            if (data.online) {
                document.getElementById('player-count').innerText = `Join our ${data.players.online} Players that is currently online`;
            } else {
                document.getElementById('player-count').innerText = 'Server Offline';
            }
        })
        .catch(error => {
            document.getElementById('player-count').innerText = 'Unable to fetch server data';
            console.error('Error:', error);
        });
</script>