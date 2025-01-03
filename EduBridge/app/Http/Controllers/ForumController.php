<?php

namespace App\Http\Controllers;

use App\Models\Forum; // Gunakan 'Forum' dengan huruf kapital
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ForumController extends Controller
{
    public function index()
    {
        // Ambil semua data forum dengan relasi user
        $forums = Forum::with('user')->get();

        return view('forum.forum-show', compact('forums'));
    }

    public function read()
    {
        return view('forum.forum-read');
    }

    public function create()
    {
        return view('forum.forum-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('forums', 'public');
        }

        Forum::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'description' => $path,
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'created_by' => 'Anonymous',
        ]);

        // return redirect()->route('forums.index');
        return redirect()->route('forums.index')->with('success', 'Forum berhasil dibuat!');
    }

    public function edit(Forum $forum)
    {
        return view('forums.forum-edit', compact('forum'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil forum berdasarkan ID
        $forum = Forum::findOrFail($id);

        // Cek jika ada gambar baru yang diupload
        $path = $forum->description;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($path) {
                Storage::disk('public')->delete($path);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('forums', 'public');
        }

        // Update data forum
        $forum->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'description' => $path,
        ]);

        return redirect()->route('forums.index')->with('success', 'Forum berhasil diperbarui!');
    }


    public function destroy(Forum $forum)
    {
        if ($forum->description) {
            Storage::disk('public')->delete($forum->description);
        }

        $forum->delete();

        return redirect()->route('forums.index');
    }
}
