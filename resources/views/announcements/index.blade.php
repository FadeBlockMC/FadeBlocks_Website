<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/43cbee23vbmfbxbhudyg4eod9x1tthrhh3qp2hvchjqyyigz/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            tinymce.init({
                selector: '#editor',
                skin: 'oxide-dark',
                content_css: 'dark',
                plugins: 'lists link image media table',
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | numlist bullist | link image media',
            });
        });
    </script>
</head>
<body>
    <h1>Create Announcement</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('announcements.store') }}">
        @csrf
        <textarea id="editor" name="content"></textarea>
        <button type="submit">Save Announcement</button>
    </form>

    <h2>Previous Announcements (debugging)</h2>
    <ul>
        @foreach($announcements as $announcement)
            <li>{!! $announcement->content !!}</li>
        @endforeach
    </ul>
</body>
</html>
