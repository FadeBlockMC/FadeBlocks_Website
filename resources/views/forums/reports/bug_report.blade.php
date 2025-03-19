<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Player Report</h1>

        <form method="POST" action="{{ route('report.store') }}">
            @csrf
            <label class="block font-semibold">Rule Breaker's Username:</label>
            <input type="text" name="rule_breaker_username" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Rules Broken:</label>
            <input type="text" name="rules_broken" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Your Username:</label>
            <input type="text" name="your_username" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Evidence (Screenshot/YouTube Link):</label>
            <input type="text" name="evidence" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Timestamp of the Video:</label>
            <input type="text" name="timestamp" class="w-full border p-2 rounded mb-3">

            <label class="block font-semibold">Additional Information:</label>
            <textarea name="additional_info" class="w-full border p-2 rounded mb-3"></textarea>

            <button type="submit" class="w-full bg-purple-500 text-white font-bold py-2 rounded">Submit Player Report</button>
        </form>
    </div>
</body>
</html>
