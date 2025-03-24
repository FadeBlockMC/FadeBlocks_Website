<div>
<div class="bg-white p-6 rounded-lg shadow-md w-full">
    
    <!-- Page Title -->
    <h2 class="text-2xl font-bold text-blue-600 mb-4">Server Rules</h2>

    <!-- Navigation Tabs -->
    <div class="flex border-b mb-4">
        <button wire:click="setRule('general')" class="px-6 py-3 text-blue-500 font-semibold border-b-4 transition-all duration-200"
            :class="{ 'border-blue-500': $activeRule === 'general', 'border-transparent': $activeRule !== 'general' }">
            General Rules
        </button>

        <button wire:click="setRule('Survival')" class="px-6 py-3 text-green-500 font-semibold border-b-4 transition-all duration-200"
            :class="{ 'border-green-500': $activeRule === 'skyblock', 'border-transparent': $activeRule !== 'skyblock' }">
            Survival Rules
        </button>

        <button wire:click="setRule('skyblock')" class="px-6 py-3 text-green-500 font-semibold border-b-4 transition-all duration-200"
            :class="{ 'border-green-500': $activeRule === 'skyblock', 'border-transparent': $activeRule !== 'skyblock' }">
            Skyblock Rules
        </button>

        <button wire:click="setRule('Modifications')" class="px-6 py-3 text-green-500 font-semibold border-b-4 transition-all duration-200"
            :class="{ 'border-green-500': $activeRule === 'skyblock', 'border-transparent': $activeRule !== 'skyblock' }">
            Allowed Modifications
        </button>
    </div>

    <!-- Rules Content -->
    <div class="p-6 bg-gray-100 rounded-lg shadow-inner transition-all duration-300">
        @if ($activeRule === 'general')
            <h2 class="text-xl font-bold text-blue-700 mb-2">General Rules</h2>
            <p class="text-gray-600 leading-relaxed">These are the general rules for the server. Follow them to ensure a fair experience.</p>
            <ul class="list-disc list-inside mt-4 text-gray-700">
                <li>No cheating or exploiting.</li>
                <li>Respect all players and staff.</li>
                <li>No hate speech or toxic behavior.</li>
                <li>Do not spam or advertise.</li>
            </ul>
        @elseif ($activeRule === 'skyblock')
            <h2 class="text-xl font-bold text-green-700 mb-2">Skyblock Rules</h2>
            <p class="text-gray-600 leading-relaxed">Skyblock-specific rules apply here. No griefing, no scamming, etc.</p>
            <ul class="list-disc list-inside mt-4 text-gray-700">
                <li>No island griefing.</li>
                <li>No item scamming.</li>
                <li>Follow trade fairness rules.</li>
                <li>Do not exploit Skyblock mechanics.</li>
            </ul>
        @endif
    </div>
</div>
</div>
