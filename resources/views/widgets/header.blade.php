<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0D2B40] text-white">
    <div class="container mx-auto flex flex-col items-center text-white relative">
        
        <!-- Navigation Links -->
        <div class="flex space-x-6">
            <a href="#" class="font-bold hover:text-blue-400">Start</a>
            <a href="#" class="font-bold hover:text-blue-400">Forum</a>
            <a href="#" class="font-bold hover:text-blue-400">Vote</a>
            <a href="/rules" class="font-bold hover:text-blue-400">Rules</a>
            <a href="#" class="font-bold hover:text-blue-400">Wiki</a>
            <a href="#" class="font-bold hover:text-blue-400">More</a>
        </div>

        <!-- Logo -->
        <img src="{{ asset('images/logo/fadeblocksmc.png') }}" alt="" class="w-1/4 block mx-auto">

<div class="flex items-center w-full max-w-5xl mx-auto mt-6">
    
    <div class="bg-gray-900 p-4 rounded-lg flex items-center w-full h-[6rem]">
        <div class="w-16 h-16 flex-shrink-0">
            <img src="https://crafatar.com/renders/body/e088f399-8135-4d9f-ae8f-a60a13886965" 
                alt="User Avatar" 
                class="w-full h-full object-cover object-top rounded-md">
        </div>

        <div class="ml-5 flex-grow">
            <h2 class="text-2xl font-semibold text-cyan-400">Welcome to Fadeblocks</h2>
            <p class="text-gray-400 text-base">To join our community, please login or register!</p>
        </div>

        <div class="space-x-3 flex-shrink-0">
            <a href="/login" class="bg-cyan-600 hover:bg-cyan-500 text-white font-bold py-2.5 px-5 rounded-md text-md">
                Login
            </a>
            <a href="/register" class="bg-cyan-600 hover:bg-cyan-500 text-white font-bold py-2.5 px-5 rounded-md text-md">
                Register
            </a>
        </div>
    </div>

    <a href="https://store.fadeblocks.com" 
        class="relative ml-4 w-[15rem] h-[6rem] flex flex-col justify-center items-center text-white rounded-lg border-2 border-white/30 shadow-lg transition-transform hover:scale-105 overflow-hidden"
        style="background: url('{{ asset('images/Other/Overworld.png') }}') center/cover no-repeat, rgba(0, 173, 239, 0.6); background-blend-mode: overlay;">
        <div class="absolute inset-0 bg-cyan-600/60"></div>
        <span class="relative text-xl font-bold italic">STORE</span>
        <span class="relative text-sm mt-1">Shop now!</span>
        <img src="{{ asset('images/Icons/Cart.png') }}" alt="Cart Icon" class="absolute right-4 top-4 w-6 h-6 opacity-80 relative">
    </a>
</div>

</body>
</html>
