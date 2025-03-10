<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header>
    @include('widgets.header')
</header>
<body class="bg-gray-900 text-white p-6">
    <div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">

        <h1 class="text-4xl font-bold text-blue-400 mb-6">Apply for a Staff Role</h1>

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

            <input type="hidden" name="role" value="staff">

            <!-- Left Labels, Right Inputs -->
            <div class="grid grid-cols-2 gap-6 items-center">
                <label class="font-semibold">Minecraft Username:</label>
                <input type="text" name="username" placeholder="Enter your Minecraft username" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Discord Username:</label>
                <input type="text" name="discord" placeholder="Enter your Discord username" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Age:</label>
                <input type="number" name="age" placeholder="Enter your age" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Gender:</label>
                <select name="gender" class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label class="font-semibold">Country:</label>
                <input type="text" name="country" placeholder="Which country do you live in?" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Time Zone:</label>
                <input type="text" name="timezone" placeholder="Enter your timezone" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Languages Spoken:</label>
                <input type="text" name="languages" placeholder="Enter the languages you speak" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>

                <label class="font-semibold">Availability (Hours per Week):</label>
                <input type="text" name="availability" placeholder="Enter your weekly availability" 
                       class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white" required>
            </div>

            <div class="border-t border-gray-600 my-4"></div>

            <!-- Text Areas -->
            <div class="grid grid-cols-2 gap-6 items-center">
                <label class="font-semibold">Why do you want to be staff?</label>
                <textarea name="motivation" placeholder="Explain your motivation" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Skills:</label>
                <textarea name="skills" placeholder="Describe your skills" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Tell us about yourself:</label>
                <textarea name="about" placeholder="Share something about yourself" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Strengths:</label>
                <textarea name="strength" placeholder="What are your strengths?" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Weaknesses:</label>
                <textarea name="weakness" placeholder="What are your weaknesses?" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Why should we accept you?</label>
                <textarea name="why_accept" placeholder="Why should we choose you?" 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24" required></textarea>

                <label class="font-semibold">Punishment History:</label>
                <textarea name="punished" placeholder="Have you been punished before? Explain." 
                          class="w-full border border-gray-600 p-2 rounded bg-gray-700 text-white h-24"></textarea>
            </div>

            <div class="border-t border-gray-600 my-4"></div>

            <!-- Radio Buttons -->
            <div class="space-y-4">
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

                <div class="grid grid-cols-2 gap-6 items-center">
                    <label class="font-semibold">Are you able to talk in Discord calls?</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="can_talk_in_calls" value="1" class="w-5 h-5" required>
                            <span>Yes</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="can_talk_in_calls" value="0" class="w-5 h-5" required>
                            <span>No</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-lg">
                    🛡️ Submit Application
                </button>
            </div>
        </form>
    </div>
</body>
</html>
