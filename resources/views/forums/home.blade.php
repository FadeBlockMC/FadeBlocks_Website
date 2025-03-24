@extends('widgets.layout')

<title>Forum | Fadeblocks</title>

@section('content')
<div class="container mx-auto w-full max-w-4xl space-y-8">

    <!-- OFFICIAL Section -->
    <div>
        <div class="bg-blue-500 text-white text-lg font-bold px-4 py-2 rounded-t-lg shadow-md">
            OFFICIAL
        </div>
        <div class="bg-white p-4 shadow-md rounded-b-lg space-y-4">
            <!-- News -->
            <a href="{{ url('/news') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/news.png') }}" alt="News" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-indigo-600">News</h3>
                    <p class="text-sm text-gray-500">Stay updated with the latest announcements!</p>
                </div>
            </a>

            <!-- Support -->
            <a href="{{ url('/support') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/support.png') }}" alt="Support" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-indigo-600">Support</h3>
                    <p class="text-sm text-gray-500">Need help? Our support team is here for you.</p>
                </div>
            </a>
        </div>
    </div>

    <!-- COMMUNITY Section -->
    <div>
        <div class="bg-blue-500 text-white text-lg font-bold px-4 py-2 rounded-t-lg shadow-md">
            COMMUNITY
        </div>
        <div class="bg-white p-4 shadow-md rounded-b-lg space-y-4">
            <!-- Feedback & Suggestions -->
            <a href="{{ url('/community/feedback') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/feedback.png') }}" alt="Feedback" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-green-600">Feedback & Suggestions</h3>
                    <p class="text-sm text-gray-500">Share your ideas to improve the server!</p>
                </div>
            </a>
        </div>
    </div>

    <!-- APPLICATIONS Section -->
    <div>
        <div class="bg-blue-500 text-white text-lg font-bold px-4 py-2 rounded-t-lg shadow-md">
            APPLICATIONS
        </div>
        <div class="bg-white p-4 shadow-md rounded-b-lg space-y-4">
            <!-- Staff Applications -->
            <a href="{{ url('/applications/staff') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/staff.png') }}" alt="Staff" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-indigo-600">Staff Applications</h3>
                    <p class="text-sm text-gray-500">Want to become staff?</p>
                </div>
            </a>

            <!-- Media Applications -->
            <a href="{{ url('/applications/media') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/media.png') }}" alt="Media" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-indigo-600">Media Applications</h3>
                    <p class="text-sm text-gray-500">Are you a YouTuber or Twitcher? Join us!</p>
                </div>
            </a>

            <!-- Developer Applications -->
            <a href="{{ url('/applications/developer') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/developer.png') }}" alt="Developer" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-indigo-600">Minecraft Developer</h3>
                    <p class="text-sm text-gray-500">Are you a Minecraft developer? Join us!</p>
                </div>
            </a>
        </div>
    </div>

    <!-- REPORTS Section -->
    <div>
        <div class="bg-blue-500 text-white text-lg font-bold px-4 py-2 rounded-t-lg shadow-md">
            REPORTS
        </div>
        <div class="bg-white p-4 shadow-md rounded-b-lg space-y-4">
            <!-- Player Reports -->
            <a href="{{ url('/reports/player') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/report.png') }}" alt="Player Report" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-red-600">Player Reports</h3>
                    <p class="text-sm text-gray-500">Report players breaking the rules.</p>
                </div>
            </a>

            <!-- Bug Reports -->
            <a href="{{ url('/reports/bug') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/bug.png') }}" alt="Bug Report" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-blue-600">Bug Reports</h3>
                    <p class="text-sm text-gray-500">Found a bug? Let us know!</p>
                </div>
            </a>

            <!-- Punishment Appeals -->
            <a href="{{ url('/reports/appeal') }}" class="flex items-center p-4 bg-gray-100 shadow-sm rounded-lg hover:bg-gray-200 transition">
                <img src="{{ asset('images/icons/appeal.png') }}" alt="Punishment Appeal" class="w-10 h-10 mr-4">
                <div>
                    <h3 class="text-lg font-semibold text-blue-600">Punishment Appeal</h3>
                    <p class="text-sm text-gray-500">Got falsely banned? Appeal here!</p>
                </div>
            </a>
        </div>
    </div>

</div>
@endsection
