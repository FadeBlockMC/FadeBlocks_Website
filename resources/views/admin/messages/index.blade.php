@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Panel - Manage Messages</h2>
    
    @foreach($messages as $topic => $msgs)
        <h3>{{ ucfirst($topic) }}</h3>
        <ul>
            @foreach($msgs as $msg)
                <li>
                    <div class="message-container">
                        <input id="message-{{ $msg->id }}" type="hidden" value="{{ $msg->message }}">
                        <trix-editor input="message-{{ $msg->id }}"></trix-editor>
                        <button class="save-btn" data-id="{{ $msg->id }}">Save</button>
                    </div>
                </li>
            @endforeach
        </ul>
    @endforeach
</div>

<script>
document.querySelectorAll('.save-btn').forEach(button => {
    button.addEventListener('click', function() {
        let msgId = this.getAttribute('data-id');
        let editor = document.querySelector(`#message-${msgId}`);
        let newText = editor.value;

        fetch(`/admin/messages/update/${msgId}`, {
            method: 'POST',
            headers: { 
                'Content-Type': 'application/json', 
                'X-CSRF-TOKEN': '{{ csrf_token() }}' 
            },
            body: JSON.stringify({ message: newText })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Message updated!");
            }
        });
    });
});
</script>
@endsection
