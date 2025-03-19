<?php
use App\Models\StaffList; 

$staffByRank = StaffList::all()->groupBy('rank');
?>

@extends('widgets.layout')

@section('title', 'Coming Soon | FadeBlocks')

@section('content')
<div class="grid grid-cols-1 gap-6">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-left text-purple-700 mb-4">Meet our team!</h1>

    <a href="/apply" class="block w-full max-w-3xl mx-auto">
    <div class="bg-yellow-400 text-black py-4 px-6 flex justify-between items-center rounded-lg shadow-lg mb-6 hover:bg-yellow-500 transition duration-300">
        <div class="flex items-center space-x-3">
            <span class="text-lg font-semibold">Would you like to join the FadeBlocks staff team? Apply now!</span>
        </div>
        <!-- Right Arrow Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </div>
</a>
    <?php
    // Define staff roles to display in order
    $ranks = [
        'owner' => 'Owner',
        'operator' => 'Operator',
        'developer' => 'Developer',
        'sradmin' => 'Sr. Admin',
        'admin' => 'Admin',
        'srmod' => 'Sr. Mod',
        'moderator' => 'Moderator',
        'helper' => 'Helper',
        'trainee' => 'Trainee',
        'builder' => 'Builder',
    ];

    foreach ($ranks as $rankKey => $rankTitle) :
        if (!isset($staffByRank[$rankKey])) continue;
    ?>

    <!-- Staff Section -->
    <section class="mb-8">
        <h2 class="text-xl font-bold text-purple-700 mb-4"><?= htmlspecialchars($rankTitle) ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 bg-white p-6 rounded-lg shadow-lg">
            <?php foreach ($staffByRank[$rankKey] as $staff): ?>
                <div class="flex items-center space-x-4 bg-gray-100 p-4 rounded-lg">
                    <img src="https://crafatar.com/avatars/<?= htmlspecialchars($staff->UUID) ?>?size=100&overlay" 
                         alt="<?= htmlspecialchars($staff->minecraft_username) ?>'s Avatar" 
                         class="w-16 h-16 ">
                    <div>
                        <h3 class="text-lg font-bold text-red-600"><?= htmlspecialchars($staff->minecraft_username) ?></h3>
                        <p class="text-sm text-gray-600"><?= htmlspecialchars($staff->Tasks) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php endforeach; ?>

</div>
</div>
@endsection


