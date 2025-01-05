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
    <x-app-layout>
        <div class="container mt-5">
            <h1><b>CREATE A NEW FORUM</h1>
            <form action="{{ route('forum.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_forum" class="form-label">Nama Forum</label>
                    <input type="text" class="form-control" id="nama_forum" name="nama_forum" required maxlength="255">
                </div>
                <div class="mb-3">
                    <label for="nama_user" class="form-label">Nama User</label>
                    <input type="text" class="form-control" id="nama_user" name="nama_user" required maxlength="120">
                </div>
                <div class="mb-3">
                    <label for="typeforum" class="form-label">Type Forum</label>
                    <select class="form-control" id="typeforum" name="typeforum" required>
                        <option value="PEMROGRAMAN">PEMROGRAMAN</option>
                        <option value="VISUALISASI">VISUALISASI</option>
                        <option value="DATA & STATISTIK">DATA & STATISTIK</option>
                        <option value="BISNIS">BISNIS</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="commentar" class="form-label">Commentar</label>
                    <textarea class="form-control" id="commentar" name="commentar" rows="5" required maxlength="1000"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create this Forum</button>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
