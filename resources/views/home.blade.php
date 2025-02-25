<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>FadeBlocks</title>
</head>

<header>

<body class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-6">
            <div class="container mx-auto px-4 py-8">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-2 space-y-6">
                        <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-h-96 overflow-y-auto">
                            <p class="text-2xl font-bold text-yellow-400">Announcements</p>
        
                            @if($announcements->isEmpty())
                                <p class="text-gray-400 mt-2">No announcements available.</p>
                            @else
                                @foreach($announcements as $announcement)
                                    <p class="text-gray-400 mt-2">{!! $announcement->content !!}</p>
                                    <p>---------------</p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    @include('widgets.side_widgets')
                </div>

                <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <p class="text-yellow-400 font-bold">Social Media</p>
                    <ul class="mt-2 space-y-1 text-sm text-gray-400">
                        <div class="social-icons flex space-x-4">
                            <a href="https://discord.gg/KtZbQshydJ" target="_blank">
                                <img src="{{ asset('images/socials/discord.png') }}" alt="Discord" class="w-12 h-12">
                            </a>
                            <a href="https://x.com/fadeblocksmc" target="_blank">
                                <img src="{{ asset('images/socials/twitter.png') }}" alt="Twitter" class="w-12 h-12">
                            </a>
                            <a href="https://www.tiktok.com/@fadeblocksmc" target="_blank">
                                <img src="{{ asset('images/socials/tiktok.png') }}" alt="TikTok" class="w-12 h-12">
                            </a>
                            <a href="https://www.instagram.com/fadeblocksmc/" target="_blank">
                                <img src="{{ asset('images/socials/instagram.png') }}" alt="Instagram" class="w-12 h-12">
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
