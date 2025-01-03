<x-app-layout>
<div class="container">
    <h1>Forum</h1>
    <a href="{{ route('forums.create') }}" class="btn btn-primary mb-3">Tambah Forums</a>
    <div class="list-group">
        @foreach ($forums as $forum)
            <a href="{{ route('forums.show', $forum->id) }}" class="list-group-item list-group-item-action">
                <h5>{{ $forum->title }}</h5>
                <p>{{ $forum->description }}</p>
                <small>Diperbarui: {{ $forum->updated_at->format('d-m-Y H:i') }} | {{ $forum->posts_count }} Komentar</small>
            </a>
        @endforeach
    </div>
</div>
</x-app-layout>