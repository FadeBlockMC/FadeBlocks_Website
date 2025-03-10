<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white p-6">
    <div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold text-blue-400 mb-6">Apply for a Media Role</h1>

        <p class="text-red-500 font-bold mb-4">
            Before filling out this form, read the relevant thread! 
            <a href="#" class="text-blue-400 underline">[CLICK HERE]</a>
        </p>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-600 text-white p-3 rounded-md mb-4">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Error Messages -->
        @if($errors->any())
            <div class="bg-red-600 text-white p-3 rounded-md mb-4">
                ❌ Please fix the following errors:
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('application.store') }}" class="space-y-6">
            @csrf

            <input type="hidden" name="role" value="media">

            <!-- Left Labels, Right Inputs -->
            <div class="grid grid-cols-2 gap-6 items-center">
                <label class="font-semibold">Minecraft Username:</label>
                <input type="text" name="username" placeholder="Enter your Minecraft username" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('username') border-red-500 @enderror" required>

                <label class="font-semibold">Discord Username:</label>
                <input type="text" name="discord" placeholder="Enter your Discord username" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('discord') border-red-500 @enderror" required>

                <label class="font-semibold">Age:</label>
                <input type="number" name="age" placeholder="Enter your age" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('age') border-red-500 @enderror" required>

                <label class="font-semibold">Country:</label>
                <input type="text" name="country" placeholder="Which country do you live in?" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('country') border-red-500 @enderror" required>

                <label class="font-semibold">Timezone:</label>
                <input type="text" name="timezone" placeholder="Enter your timezone" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('timezone') border-red-500 @enderror" required>

                <label class="font-semibold">Languages:</label>
                <input type="text" name="languages" placeholder="Enter the languages you speak" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('languages') border-red-500 @enderror" required>

                <label class="font-semibold">Social Media Links (YouTube, Twitch, etc.):</label>
                <textarea type="Social" name="social_links" placeholder="https://youtube.com, https://twitch.com" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white @error('social_links') border-red-500 @enderror" required>
                </textarea>
                <label class="font-semibold">About You:</label>
                <textarea name="about" placeholder="Tell us about yourself" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24 @error('about') border-red-500 @enderror" required></textarea>
            </div>

            <div class="border-t border-gray-600 my-4"></div>

            <!-- Radio Buttons Aligned with Inputs -->
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-6 items-center">
                    <label class="font-semibold">Are all your channels linked to Discord?</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="channels_linked" value="1" class="w-5 h-5" required>
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="channels_linked" value="0" class="w-5 h-5" required>
                            <span>No</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 items-center">
                    <label class="font-semibold">Have you read the application rules?</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="read_rules" value="1" class="w-5 h-5" required>
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="read_rules" value="0" class="w-5 h-5" required>
                            <span>No</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 items-center">
                    <label class="font-semibold">Do you share your account?</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="share_account" value="1" class="w-5 h-5" required>
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="share_account" value="0" class="w-5 h-5" required>
                            <span>No</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-lg">
                    📹 Submit Application
                </button>
            </div>
        </form>
    </div>
</body>
</html>
