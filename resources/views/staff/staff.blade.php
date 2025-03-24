<?php
use App\Models\StaffList; 

$staffByRank = StaffList::all()->groupBy('rank');

$ranks = Roles::all()->pluck('name', 'name')->toArray();
?>

@extends('widgets.layout')

@section('title', 'Meet Our Team | FadeBlocks')

@section('content')
<div class="container mx-auto py-10 w-full max-w-6xl">

    <h1 class="text-4xl font-extrabold text-purple-700 mb-6">Meet Our Team!</h1>

    <!-- Apply Button -->
    <a href="/apply" class="block w-full max-w-3xl mx-auto">
        <div class="bg-yellow-400 text-black py-4 px-6 flex justify-between items-center rounded-lg shadow-lg mb-8 hover:bg-yellow-500 transition duration-300">
            <span class="text-lg font-semibold">Would you like to join the FadeBlocks staff team? Apply now!</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </a>

    @foreach ($ranks as $rank => $rankTitle)
        @if (!isset($staffByRank[$rank]))
            @continue
        @endif

        <!-- Staff Section -->
        <section class="mb-5">
            <div class="bg-blue-500 text-white text-lg font-bold px-4 py-2 rounded-t-lg shadow-md">
                {{ $rankTitle }}
            </div>
            <div class="bg-white p-6 shadow-md rounded-b-lg">
                <div class="grid grid-cols-4 md:grid-cols-2 lg:grid-cols-2 gap-6">
                    @foreach ($staffByRank[$rank] as $staff)
                        <div class="flex items-center bg-gray-100 p-5 rounded-lg shadow-md hover:shadow-lg transition">
                            <img src="https://crafatar.com/avatars/{{ $staff->UUID }}?size=100&overlay" 
                                 alt="{{ $staff->minecraft_username }}'s Avatar" 
                                 class="w-16 h-16 shadow-md border border-gray-200">
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-800">{{ $staff->minecraft_username }}</h3>
                                <p class="text-sm text-gray-600">{{ $staff->Tasks ?: 'No tasks assigned' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach

</div>
@endsection
