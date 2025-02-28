<div x-data="{ show: true }" @sectionChanged.window="show = false; setTimeout(() => show = true, 100)" class="bg-gray-800 p-6 rounded-lg shadow-lg">
    <template x-if="show">
        <div x-transition.opacity.duration.500ms>
            <h2 class="text-yellow-400 font-bold text-2xl">{{ $currentSection }}</h2>
            <p class="mt-4">{{ $sections[$currentSection] }}</p>
        </div>
    </template>
</div>
