<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function create()
    {
        return view('forum.forum-create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_forum' => 'required|string|max:255',
            'nama_user' => 'required|string|max:120',
            'typeforum' => 'required|string',
            'commentar' => 'required|string|max:1000',
        ]);

        // Simpan data ke database
        $forum = new Forum();
        $forum->nama_forum = $validated['nama_forum'];
        $forum->nama_user = $validated['nama_user'];
        $forum->typeforum = $validated['typeforum'];
        $forum->commentar = $validated['commentar'];
        $forum->user_id = Auth::id();
        $forum->save();

        // Redirect ke halaman forum dengan pesan sukses
        return redirect()->route('forum.index')->with('success', 'Forum berhasil dibuat!');
    }

    public function index()
    {
        $forums = Forum::all();
        return view('forum.forum-show', compact('forums'));
    }

    public function read($id)
    {
        $forums = Forum::findOrFail($id);
        return view('forum.forum-read', compact('forums'));
    }

    public function edit($id)
    {
        $forums = Forum::findOrFail($id);
        return view('forum\forum-update', compact('forums'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'type' => 'required|string',
            'commentar' => 'required|string|max:1000',
        ]);

        $forum = Forum::findOrFail($id);
        $forum->update($validated);

        return redirect()->route('forums.index')->with('success', 'Forum berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();
        return redirect()->route('forum.index')->with('success', 'Forum deleted successfully!');
    }
}

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'type' => 'required|string',
    //         'description' => 'required|string',
    //     ]);

    //     $path = null;
    //     if ($request->hasFile('image')) {
    //         $path = $request->file('image')->store('forums', 'public');
    //     }

    //     Forum::create([
    //         'title' => $validated['title'],
    //         'content' => $validated['content'],
    //         'description' => $path,
    //         'name' => $request->name,
    //         'type' => $request->type,
    //         'description' => $request->description,
    //         'created_by' => 'Anonymous',
    //     ]);

    //     // return redirect()->route('forums.index');
    //     return redirect()->route('forums.index')->with('success', 'Forum berhasil dibuat!');
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi input
    //     $validated = $request->validate([
    //         'title' => 'required|string',
    //         'content' => 'required|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Ambil forum berdasarkan ID
    //     $forum = Forum::findOrFail($id);

    //     // Cek jika ada gambar baru yang diupload
    //     $path = $forum->description;
    //     if ($request->hasFile('image')) {
    //         // Hapus gambar lama jika ada
    //         if ($path) {
    //             Storage::disk('public')->delete($path);
    //         }

    //         // Simpan gambar baru
    //         $path = $request->file('image')->store('forums', 'public');
    //     }

    //     // Update data forum
    //     $forum->update([
    //         'title' => $validated['title'],
    //         'content' => $validated['content'],
    //         'description' => $path,
    //     ]);

    //     return redirect()->route('forums.index')->with('success', 'Forum berhasil diperbarui!');
    // }