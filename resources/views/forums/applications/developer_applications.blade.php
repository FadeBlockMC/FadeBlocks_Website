<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Apply for a Developer Role</h1>

        <form method="POST" action="{{ route('applications.store') }}">
            @csrf
            <label class="block font-semibold">Discord:</label>
            <input type="text" name="discord" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Age:</label>
            <input type="number" name="age" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Country:</label>
            <input type="text" name="country" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Experience:</label>
            <textarea name="experience" class="w-full border p-2 rounded mb-3" required></textarea>

            <label class="block font-semibold">GitHub Link:</label>
            <input type="text" name="github" class="w-full border p-2 rounded mb-3" required>

            <label class="block font-semibold">Can you talk in Discord calls?</label>
            <select name="can_talk_in_calls" class="w-full border p-2 rounded mb-3" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded">Submit</button>
        </form>
    </div>
</body>
</html>
