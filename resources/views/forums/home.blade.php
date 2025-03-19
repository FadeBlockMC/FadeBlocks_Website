
@extends('widgets.layout')

<title>Appeals | Fadeblocks</title>


@section('content')
<div class="container">
    
    <h2 class="text-purple-700 text-2xl font-bold mb-4">Applications & Reports</h2>
    <div class="grid grid-cols-2 gap-4">
        <a href="{{ url('/applications/staff') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-indigo-600">Staff Applications</h3>
            <p class="text-sm text-gray-500">Want to become staff?</p>

        </a>
        <a href="{{ url('/applications/media') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-indigo-600">Media Applications</h3>
            <p class="text-sm text-gray-500">Are you a youtuber or twitcher and want to stream on fadeblocks!</p>
        </a>
        <a href="{{ url('/applications/developer') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-indigo-600">Developer Applications</h3>
            <p class="text-sm text-gray-500">Want to apply to become a Minecraft developer on fadeblocks?</p>
        </a>
        <a href="{{ url('/appeals/punishment') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-red-600">Punishment Appeals</h3>
            <p class="text-sm text-gray-500">Do you think you got punsihed unfairly, let us know here!</p>

        </a>
        <a href="{{ url('/reports/player') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-green-600">Player Reports</h3>
            <p class="text-sm text-gray-500">Want to report a player, here is the place!</p>
        </a>
        <a href="{{ url('/reports/bug') }}" class="block p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-semibold text-blue-600">Bug report</h3>
              <p class="text-sm text-gray-500">Found a bug a want to report it?</p>
        </a>
    </div>
</div>
@endsection


