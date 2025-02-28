<!-- resources/views/your-main-template.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Fadeblocks Rules</title>
    @livewireStyles
</head>
<body>
    <header>
        @include('widgets.header')
    </header>

    <!-- Main Layout -->
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-3 gap-6 text-white">
        <div class="col-span-1">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <p class="text-yellow-400 font-bold text-2xl">Table of Contents</p>
                <ul class="mt-4 space-y-2">
                    <li><a href="#Network" class="text-blue-400 hover:underline">Network</a></li>
                    <li><a href="#Skyblock" class="text-blue-400 hover:underline">Skyblock</a></li>
                    <li><a href="#Survival" class="text-blue-400 hover:underline">Survival</a></li>
                    <li><a href="#Discord" class="text-blue-400 hover:underline">Discord</a></li>
                    <li><a href="#Website" class="text-blue-400 hover:underline">Website</a></li>
                </ul>
            </div>
        </div>

        <div class="col-span-2">
            {{-- @livewire('rules') --}}
        </div>
    </div>

    @include('widgets.footer')
    @livewireScripts
</body>
</html>
