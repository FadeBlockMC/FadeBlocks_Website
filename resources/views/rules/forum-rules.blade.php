<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FadeBlocksMC Server Rules</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    @include('header_footer.header')

    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="bg-white p-4 shadow-md rounded-lg md:col-span-1">
            <h2 class="font-bold text-lg mb-4">Articles in this section</h2>
            <nav class="space-y-2">
                <a href="{{ url('/rules/network') }}" class="block text-gray-700 hover:text-blue-600">FadeBlocksMC Network Rules</a>
                <a href="{{ url('/rules/skyblock') }}" class="block text-gray-700 hover:text-blue-600">Skyblock Rules</a>
                <a href="{{ url('/rules/allowed-modifications') }}" class="block text-gray-700 hover:text-blue-600">Allowed Modifications</a>
                <a href="{{ url('/rules/forum') }}" class="block text-blue-600 font-bold">Forum Rules</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="bg-white p-6 shadow-md rounded-lg md:col-span-3">
            <h1 class="text-3xl font-bold mb-2">FadeBlocksMC Server Rules</h1>
            <p class="text-gray-500 mb-4">2 months ago • Updated</p>

            <p class="text-gray-700 mb-6">
                The FadeBlocksMC Server is intended to be a fun, safe, and friendly environment for all players to enjoy. As such, we have a list of rules we expect all players to follow with no exceptions. <span class="font-bold">By choosing to play on the FadeBlocksMC Server or use the FadeBlocksMC Forums and Discord, you agree to follow all rules listed within the FadeBlocksMC Rules and Policies.</span>
            </p>

            <h2 class="font-bold text-lg mb-2">Table of Content</h2>
            <ul class="list-disc list-inside text-gray-700 mb-8">
                <li><a href="#expectations" class="text-blue-600 hover:underline">Expectations of Behavior</a></li>
                <li><a href="#reporting" class="text-blue-600 hover:underline">Reporting Rule Breakers</a></li>
                <li><a href="#bugs" class="text-blue-600 hover:underline">Report Server Bugs</a></li>
                <li><a href="#safety" class="text-blue-600 hover:underline">Player Safety & Account Security</a></li>
                <li><a href="#prohibited" class="text-blue-600 hover:underline">Behavior that is not allowed</a></li>
                <li><a href="#consequences" class="text-blue-600 hover:underline">Consequences</a></li>
                <li><a href="#forum-rules" class="text-blue-600 hover:underline">Forum Rules</a></li>
            </ul>

            <!-- Sections -->

            <section id="forum-rules" class="mb-8">
                <h3 class="text-2xl font-bold mb-2">Forum Rules</h3>

                <h4 class="text-xl font-semibold mb-2">Spamming</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No spamming the forums with pointless or irrelevant topics</li>
                    <li>No spamming ban appeals/staff applications</li>
                    <li>No troll applications, appeals or reports</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">Inappropriate Content</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No inappropriate profile banners</li>
                    <li>No excessive profanity, and never in a toxic manner</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">Posting Guidelines</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No necroposting (posting on old/inactive threads to bump them to the top)</li>
                    <li>No unnecessary posts about being punished on FadeBlocksMC; if you believe you were unfairly punished, submit an appeal (here) or reach out to a staff member for clarification.</li>
                    <li>No posts about appeals/reports being denied by staff</li>
                    <li>No reposting threads that have been locked or deleted by staff</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">Reaction Score</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No excessively boosting your own, or any other users’, reaction score</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">Report System</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No abusing the forums report system (false reports, reports for invalid reasons, etc.)</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">Ban Evasion</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>No forums ban evading</li>
                </ul>

                <h4 class="text-xl font-semibold mb-2">General Reminder</h4>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>Reminder: All communication rules listed above apply to the forums!</li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>