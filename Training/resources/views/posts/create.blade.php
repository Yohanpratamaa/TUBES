<!-- resources/views/posts/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Buat Postingan Baru</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Isi</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
