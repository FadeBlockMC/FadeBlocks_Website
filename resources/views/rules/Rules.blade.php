<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<head>
    @livewireStyles 
</head>
<body>
    

<div class="col-span-1">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <p class="text-yellow-400 font-bold text-2xl">Table of Contents</p>
        <ul class="mt-4 space-y-2">
            <li><a href="#" wire:click="setSection('Network')" class="text-blue-400 hover:underline">Network</a></li>
            <li><a href="#" wire:click="setSection('Skyblock')" class="text-blue-400 hover:underline">Skyblock</a></li>
            <li><a href="#" wire:click="setSection('Survival')" class="text-blue-400 hover:underline">Survival</a></li>
            <li><a href="#" wire:click="setSection('Discord')" class="text-blue-400 hover:underline">Discord</a></li>
            <li><a href="#" wire:click="setSection('Website')" class="text-blue-400 hover:underline">Website</a></li>
        </ul>
        
    </div>
</div>


<div class="col-span-2">
    @livewire('rules')
</div>
@livewireScripts

</body>