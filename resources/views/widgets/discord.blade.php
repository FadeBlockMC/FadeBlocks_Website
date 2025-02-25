<div class="flex items-center bg-gray-800 p-4 rounded-lg shadow-lg">
    <img src="{{ asset('images/socials/discord.png') }}" class="h-10 w-10 mr-4" alt="Discord Icon">
    <div>
        <p class="text-indigo-400 font-bold">FadeBlocks</p>
        <p id="member-count" class="text-sm text-gray-300">Loading...</p>
    </div>
    <a href="https://discord.gg/KtZbQshydJ" 
       class="ml-auto bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full">
       JOIN
    </a>
</div>

<script>
    fetch('https://discord.com/api/guilds/1298717684439191573/widget.json')
        .then(response => response.json())
        .then(data => {
            document.getElementById('member-count').innerText = `${data.presence_count} Players Online`;
        })
        .catch(error => {
            document.getElementById('member-count').innerText = 'Unable to load data';
            console.error('Error fetching Discord data:', error);
        });
</script>