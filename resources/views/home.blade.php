<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>FadeBlocks</title>
</head>

<header>
    @include('header_footer.header')
    @if (Auth::check())
    <img src="{{ Auth::user()->avatar }}" alt="User Avatar" class="w-20 h-20 rounded-full">
@else
    <!-- Default to Renssus's skin if user is not logged in -->
    <img src="https://crafatar.com/avatars/e088f399-8135-4d9f-ae8f-a60a13886965?size=100&overlay" alt="Default Avatar" class="w-20 h-20 rounded-full">
@endif


</header>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 space-y-6">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <p class="text-2xl font-bold text-yellow-400">Announcements</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>
                    <p class="text-gray-400 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae.</p>

                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    @include('widgets.side_widgets')
                </div>

                <div id="live-streamers-container" class="bg-gray-800 p-4 rounded-lg shadow-lg hidden">
                    <p class="text-yellow-400 font-bold">Live Streamers</p>
                    <ul class="mt-2 space-y-1 text-sm text-gray-400" id="live-streamers-list">
                        <p>SRPK is live</p>
                    </ul>
                </div>

                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <p class="text-yellow-400 font-bold">Social Media</p>
                    <ul class="mt-2 space-y-1 text-sm text-gray-400">
                        <div class="social-icons flex space-x-4">
                            <a href="https://discord.gg/KtZbQshydJ" target="_blank">
                                <img src="{{ asset('images/socials/discord.png') }}" alt="Discord" class="w-12 h-12">
                            </a>
                            <a href="https://x.com/fadeblocks" target="_blank">
                                <img src="{{ asset('images/socials/twitter.png') }}" alt="Twitter" class="w-12 h-12">
                            </a>
                            <a href="https://www.tiktok.com/@fadeblocks" target="_blank">
                                <img src="{{ asset('images/socials/tiktok.png') }}" alt="TikTok" class="w-12 h-12">
                            </a>
                            <a href="https://www.instagram.com/fadeblocks/" target="_blank">
                                <img src="{{ asset('images/socials/instagram.png') }}" alt="Instagram" class="w-12 h-12">
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('header_footer.footer')
    </footer>
</body>
</html>


{{-- <script>
    const clientId = 'YOUR_CLIENT_ID'; 
    const accessToken = 'YOUR_ACCESS_TOKEN';  
    const streamerName = 'SrPK_07';  

    fetch(`https://api.twitch.tv/helix/streams?user_login=${streamerName}`, {
        headers: {
            'Client-ID': clientId,
            'Authorization': `Bearer ${accessToken}`
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.data && data.data.length > 0) {
            document.getElementById('live-streamers-container').classList.remove('hidden');
            
            const streamerData = data.data[0];
            const liveList = document.getElementById('live-streamers-list');
            liveList.innerHTML = `
                <li>
                    <a href="https://www.twitch.tv/${streamerName}" target="_blank" class="text-purple-400 font-bold">
                        ${streamerData.user_name} is LIVE: ${streamerData.title}
                    </a>
                </li>
            `;
        }
    })
    .catch(error => {
        console.error('Error fetching Twitch data:', error);
    });
</script> --}}