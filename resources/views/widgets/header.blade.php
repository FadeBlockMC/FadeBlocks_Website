<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCPrison Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0D2B40] text-white">
    <!-- Navigation Bar -->
    <div class="flex justify-between items-center bg-black bg-opacity-50 py-4 px-12">
        <div class="flex items-center space-x-6">
            <span>+</span> <!-- Home Icon Placeholder -->
            <a href="#" class="font-bold hover:text-blue-400">Start</a>
            <a href="#" class="font-bold hover:text-blue-400">Forum</a>
            <a href="#" class="bg-blue-500 font-bold px-4 py-2 rounded hover:bg-blue-600">Store</a>
        </div>
        <div class="flex items-center space-x-6">
            <a href="#" class="font-bold hover:text-blue-400">Rules</a>
            <a href="#" class="font-bold hover:text-blue-400">Meer <span>+</span></a> <!-- Dropdown Icon Placeholder -->
        </div>
    </div>
    
    <!-- Hero Section -->
    <div class="relative text-center py-16">
        <img src="{{ asset('images/logo/fadeblocksmc.png') }}" alt="">
    </div>
    
    <!-- User Login/Register -->
    <div class="bg-black bg-opacity-70 p-6 text-center max-w-2xl mx-auto rounded-lg">
        <p class="text-xl font-bold">Welcome to Fadeblocks</p>
        <p class="mb-4">To join our community, please login or register!</p>
        <div class="flex justify-center space-x-4">
            <a href="#" class="bg-blue-500 px-6 py-2 rounded font-bold hover:bg-blue-600">Login</a>
            <a href="#" class="bg-blue-500 px-6 py-2 rounded font-bold hover:bg-blue-600">Register</a>
        </div>
    </div>
</body>
</html>
