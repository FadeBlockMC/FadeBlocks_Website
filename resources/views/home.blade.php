<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>FadeBlocks</title>
</head>

<header>
    @include('widgets.header')
</header>

<!-- Main Layout: Announcements on the Left, Side Widgets on the Right -->
<div class="max-w-6xl mx-auto px-4 grid grid-cols-3 gap-6">
    
    <!-- Announcements (Left - 2/3 width) -->
    <div class="col-span-2">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <p class="text-4xl font-bold text-yellow-400 mb-6">Announcements</p>
        
            @if($announcements->isEmpty())
                <p class="text-gray-400 mt-2">No announcement available.</p>
            @else
                <div id="announcements-container">
                    @foreach($announcements->sortByDesc('created_at') as $index => $announcement)
                        <div class="announcement bg-gray-900 rounded-lg shadow-lg mb-8 overflow-hidden"
                             data-index="{{ $index }}" style="display: none;">
                            <!-- Title and Date -->
                            <div class="p-6 border-b border-gray-700">
                                <h2 class="text-white text-2xl font-semibold">{!! $announcement->title !!}</h2>
                                <p class="text-gray-500 text-sm mt-1">{{ date('M d, Y', strtotime($announcement->created_at)) }}</p>
                            </div>
        
                            <!-- Announcement Content -->
                            <div class="p-6">
                                <div class="text-gray-300 text-lg leading-relaxed break-words wysiwyg-content">
                                    {!! $announcement->content !!}
                                </div>
                            </div>
        
                            <!-- Footer -->
                            <div class="p-4 bg-gray-800 flex justify-between items-center border-t border-gray-700">
                                <p class="text-gray-400 text-sm">by Fadeblocks Team at {{ date('h:i A', strtotime($announcement->created_at)) }}</p>
                                <a href="{{ route('home', $announcement->id) }}" 
                                   class="bg-gray-700 hover:bg-gray-600 text-white font-semibold text-sm px-4 py-2 rounded-lg shadow-md">
                                    Continue reading...
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
        
                <!-- Pagination Controls -->
                <div class="flex justify-between mt-4">
                    <button id="prevPage" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold text-sm px-4 py-2 rounded-lg shadow-md hidden">
                        Previous
                    </button>
                    <button id="nextPage" class="bg-gray-700 hover:bg-gray-600 text-white font-semibold text-sm px-4 py-2 rounded-lg shadow-md">
                        Next
                    </button>
                </div>
            @endif
        </div>

    </div>

    <!-- Side Widgets (Right - 1/3 width) -->
    <div class="col-span-1 space-y-6">
        <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
            @include('widgets.side_widgets')
        </div>

        <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
            <p class="text-yellow-400 font-bold text-xl">Social Media</p>
            <div class="flex space-x-4 mt-4">
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
        </div>
    </div>
</div>

</body>
<footer>
    @include('widgets.footer')
</footer>
</html>
        
        <!-- JavaScript for Pagination -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const announcements = document.querySelectorAll(".announcement");
                let currentPage = 0;
                const pageSize = 5;
        
                function showPage(page) {
                    const start = page * pageSize;
                    const end = start + pageSize;
        
                    announcements.forEach((announcement, index) => {
                        announcement.style.display = (index >= start && index < end) ? "block" : "none";
                    });
        
                    document.getElementById("prevPage").style.display = (page > 0) ? "block" : "none";
                    document.getElementById("nextPage").style.display = (end < announcements.length) ? "block" : "none";
                }
        
                document.getElementById("prevPage").addEventListener("click", function () {
                    if (currentPage > 0) {
                        currentPage--;
                        showPage(currentPage);
                    }
                });
        
                document.getElementById("nextPage").addEventListener("click", function () {
                    if ((currentPage + 1) * pageSize < announcements.length) {
                        currentPage++;
                        showPage(currentPage);
                    }
                });
        
                // Show the first page initially
                showPage(0);
            });
        </script>