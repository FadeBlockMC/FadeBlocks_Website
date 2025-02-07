<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@include('header_footer.header')
<body class="bg-gray-900 text-white font-sans p-8">
    <!-- Owner Section -->
    <section>
        <h2 class="text-yellow-400 text-lg font-bold mb-4">Owner</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Admin Card Template -->
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="Renssus Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">Renssus</h3>
                    <p class="text-gray-400">Owner</p>
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="IHaveWincks Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">IHaveWincks</h3>
                    <p class="text-gray-400">Manager</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Section -->
    <section>
        <h2 class="text-yellow-400 text-lg font-bold mb-4">Operator</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Admin Card Template -->
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="Gebyce Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">Gebyce</h3>
                    <p class="text-gray-400">Operator | Staff Manager</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-yellow-400 text-lg font-bold mb-4">Helper</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Admin Card Template -->
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="II_Toxic Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">II_Toxic</h3>
                    <p class="text-gray-400">Helper</p>
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="String Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">String</h3>
                    <p class="text-gray-400">Helper</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-yellow-400 text-lg font-bold mb-4">Other</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset('images/logo/skinmc-avatar.png') }}" alt="Eloise1306 Avatar" class="rounded w-12 h-12">
                <div>
                    <h3 class="text-purple-400 font-bold">Eloise1306</h3>
                    <p class="text-gray-400">Other</p>
                </div>
            </div>
        </div>
    </section>
</body>
@include('header_footer.footer')
</html>