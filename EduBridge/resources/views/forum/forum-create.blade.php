<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Thread</title>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }

    .container {
        width: 90%;
        margin: auto;
    }

    header {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    header img {
        height: 40px;
    }

    header nav a {
        font-size: 16px;
        color: #333;
        text-decoration: none;
        margin: 0 10px;
        padding: 5px 0;
    }

    header nav a:hover {
        color: #007BFF;
    }

    header nav a.fw-bold {
        font-weight: bold;
        border-bottom: 2px solid #333;
    }
</style>
<body>
    <div class="container mt-5">
        <header>
            <div class="d-flex justify-content-between align-items-center py-2">
                <div>
                    <img src="/image/logo-edubridge.png" alt="Edu Bridge Logo">
                </div>
                <nav>
                    <a href="/dashboard" class="px-3">Dashboard</a>
                    <a href="/find-mentor" class="px-3">Find Mentor</a>
                    <a href="/chat" class="px-3">Chat</a>
                    <a href="/forum" class="px-3 fw-bold">Forum</a>
                    <a href="/find-friend" class="px-3">Find Friend</a>
                </nav>
                <div class="user">
                    Yohan Artha Pratama
                </div>
            </div>
        </header>
        <h1>Create a New Thread</h1>
        <form action="{{ route('thread.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="threadTitle" class="form-label"><b>* Thread Title</b></label>
                <input type="text" class="form-control" id="threadTitle" name="title" required>
            </div>
            <div class="mb-3">
                <label for="threadType" class="form-label"><b>* Thread Type</b></label>
                <select class="form-control" id="threadType" name="type" required>
                    <option value="Discussion">PEMROGRAMAN</option>
                    <option value="Question">VISUALISASI</option>
                    <option value="Question">DATA&STATISTIK</option>
                    <option value="Announcement">BISNIS</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label"><b>* Content</b></label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                <script>
                    CKEDITOR.replace('content');
                </script>
            </div>
            <div class="mb-3">
                <label for="attachFiles" class="form-label">Attach Files</label>
                <input type="file" class="form-control" id="attachFiles" name="files[]" multiple>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="subscribe" name="subscribe" value="1" checked>
                <label class="form-check-label" for="subscribe">Subscribe to this thread</label>
            </div>
            <button type="submit" class="btn btn-primary">Create this thread</button>
        </form>
    </div>
</body>
</html>
