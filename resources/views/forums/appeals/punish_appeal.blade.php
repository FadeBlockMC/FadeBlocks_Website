<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Punishment Appeal</h1>

        <form method="POST" action="{{ route('appeal.store') }}">
            @csrf
            <label class="block font-semibold">Minecraft Username:</label>
            <input type="text" name="username" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Appeal Type (Discord/In-game):</label>
            <input type="text" name="appeal_type" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Punishment Type:</label>
            <input type="text" name="punishment_type" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Punishment Reason:</label>
            <textarea name="punishment_reason" class="w-full border p-2 rounded mb-3" required></textarea>

            <label class="block font-semibold">Why should we revoke your punishment?</label>
            <textarea name="revoke_reason" class="w-full border p-2 rounded mb-3" required></textarea>

            <label class="block font-semibold">Additional Information:</label>
            <textarea name="additional_info" class="w-full border p-2 rounded mb-3"></textarea>

            <button type="submit" class="w-full bg-red-500 text-white font-bold py-2 rounded">Submit Appeal</button>
        </form>
    </div>
</body>
</html>
