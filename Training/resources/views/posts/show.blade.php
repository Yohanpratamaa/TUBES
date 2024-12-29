<!-- resources/views/posts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p><strong>Isi:</strong></p>
        <p>{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali ke Daftar Postingan</a>
    </div>
@endsection
