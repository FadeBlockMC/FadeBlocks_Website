<!-- resources/views/admin/create_announcement.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Announcement</title>

    <!-- Include TinyMCE via CDN -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

</head>
<body>

    <h1>Create a New Announcement</h1>

    <!-- Display success message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to create announcement -->
    <form action="{{ route('admin.announcements.store') }}" method="POST">
        @csrf
        <textarea id="editor" name="content"></textarea>
        <br>
        <button type="submit">Create Announcement</button>
    </form>

    <!-- Initialize TinyMCE editor -->
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'a11ychecker advcode visualblocks visualchars fullscreen link image charmap print preview hr anchor pagebreak code',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | code',
        });
    </script>

</body>
</html>
