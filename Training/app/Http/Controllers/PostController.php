<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan semua postingan
    public function index()
    {
        $posts = Post::all(); // Ambil semua postingan
        return view('posts.index', compact('posts')); // Kirim data postingan ke view
    }

    // Menampilkan form untuk membuat postingan baru
    public function create()
    {
        return view('posts.create'); // Tampilkan form create
    }

    // Menyimpan postingan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Simpan postingan ke database
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')->with('success', 'Postingan berhasil dibuat!');
    }

    // Menampilkan form untuk mengedit postingan
    public function edit($id)
    {
        $post = Post::findOrFail($id); // Ambil postingan berdasarkan ID
        return view('posts.edit', compact('post')); // Tampilkan form edit dengan data postingan
    }

    // Memperbarui postingan
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::findOrFail($id); // Ambil postingan berdasarkan ID
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')->with('success', 'Postingan berhasil diperbarui!');
    }

    // Menampilkan detail postingan
    public function show($id)
    {
        $post = Post::findOrFail($id); // Ambil postingan berdasarkan ID
        return view('posts.show', compact('post')); // Tampilkan detail postingan
    }

    // Menghapus postingan
    public function destroy($id)
    {
        $post = Post::findOrFail($id); // Ambil postingan berdasarkan ID
        $post->delete(); // Hapus postingan

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')->with('success', 'Postingan berhasil dihapus!');
    }
}
