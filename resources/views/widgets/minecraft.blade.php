<div class="bg-gray-800 p-4 rounded-lg flex items-center space-x-4 shadow-lg">
    <div>
        <p class="text-lg font-bold text-white" id="server-ip">play.fadeblocks.com</p>
        <p id="player-count" class="text-gray-400 text-sm">Loading...</p>
    </div>
    <div class="ml-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
    </div>
</div>

<script>
    fetch('https://api.mcsrvstat.us/2/play.fadeblocks.com')
        .then(response => response.json())
        .then(data => {
            if (data.online) {
                document.getElementById('player-count').innerText = `${data.players.online} Players Online`;
            } else {
                document.getElementById('player-count').innerText = 'Server Offline';
            }
        })
        .catch(error => {
            document.getElementById('player-count').innerText = 'Unable to fetch server data';
            console.error('Error:', error);
        });
</script>
