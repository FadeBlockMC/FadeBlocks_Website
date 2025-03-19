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

        /* Smooth Hover Effects */
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<!-- **Main Wrapper** -->
<div class="main w-[70%] mx-auto mt-6 flex rounded-lg p-4">

    <!-- Sidebar -->
    <aside class="w-64 bg-white h-auto p-6 rounded-lg flex-shrink-0">
        <div class="flex flex-col items-center bg-blue-200 p-4 rounded-lg">
            <img src="{{ asset('images/logo/fadeblocks.png') }}" alt="Logo" class="w-24 h-24 rounded-lg shadow-md">
        </div>

        <nav class="mt-6 space-y-4">
            <a href="/" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>🏠</span><span class="ml-3">Home</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>💬</span><span class="ml-3">Rules</span></a>
            <a href="/staff" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>👥</span><span class="ml-3">Staff</span></a>
            <a href="/apply" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>⚡</span><span class="ml-3">Applications</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>🏆</span><span class="ml-3">Appeals</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>🔨</span><span class="ml-3">Reports</span></a>
            <a href="#" class="flex items-center text-gray-700 hover:text-blue-500 px-3 py-2 nav-link"><span>📊</span><span class="ml-3">Vote for Java</span></a>
        </nav>

        <div class="mt-auto space-y-2">
            <a href="#" class="flex items-center text-pink-500 hover:text-pink-600 font-semibold px-3 py-2 nav-link"><span>🛒</span><span class="ml-3">STORE</span></a>
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
        <div class="bg-white p-4 rounded-lg shadow-md smooth-shadow">
            <p class="text-yellow-500 font-bold text-xl">Server Status</p>
            <p class="text-green-500 mt-2">Minecraft Servers: 0/100 Online</p>
            <button class="bg-green-500 px-4 py-2 rounded-lg mt-2 text-white hover:bg-green-600 transition">COPY</button>
            <p class="text-blue-500 mt-4">Discord Server: 17 Members Online</p>
            <button class="bg-blue-500 px-4 py-2 rounded-lg mt-2 text-white hover:bg-blue-600 transition">JOIN</button>
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


</body>
</html>
