<footer class="bg-black text-white py-10">
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
                <li><a href="#" class="hover:text-yellow-500 transition">Home</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">Server Rules</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">Application</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">Wiki</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">Staff</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">Leaderboards</a></li>
                <li><a href="#" class="hover:text-yellow-500 transition">FAQ</a></li>
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
