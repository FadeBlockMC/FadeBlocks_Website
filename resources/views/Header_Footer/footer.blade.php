<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Footer</title>
</head>
<body class="bg-gray-900 text-white">
    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-start">
            <!-- Left Section -->
            <div class="space-y-2 md:w-1/2">
                <p class="text-sm text-gray-400">Copyright &copy; <span class="font-bold">FadeBlocks</span> 2025. All Rights All Rights Reserved.</p>
                <p class="text-gray-500">The FadeBlocks network is not endorsed by Mojang </p>
            </div>

            <!-- Right Section Links -->
            <div class="flex justify-end mt-6 md:mt-0 space-x-12 text-sm text-gray-400">
                <div class="space-y-2" id="players">
                    <a href="/play" class="hover:text-white">Play</a><br>
                    <a href="/stats" class="hover:text-white">Stats</a><br>
                    <a href="/store" class="hover:text-white">Store</a>
                </div>
                
                <div class="space-y-2" id="information">
                    <a href="/rules" class="hover:text-white">Rules</a><br>
                    <a href="/updates" class="hover:text-white">Updates</a><br>
                    <a href="/wiki" class="hover:text-white">Wiki</a>
                </div>

                <div class="space-y-2" id="staff">
                    <a href="/staff" class="hover:text-white">Staff</a><br>
                    <a href="/support" class="hover:text-white">Support</a><br>
                    <a href="/suggestions" class="hover:text-white">Suggestions</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
