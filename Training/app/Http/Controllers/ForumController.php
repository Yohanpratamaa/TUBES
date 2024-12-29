<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        // Contoh data forum
        $forums = [
            ['id' => 1, 'title' => 'Diskusi Laravel', 'description' => 'Tempat diskusi tentang framework Laravel.', 'updated_at' => '2024-12-29', 'posts_count' => 5],
            ['id' => 2, 'title' => 'PHP General', 'description' => 'Diskusi tentang PHP secara umum.', 'updated_at' => '2024-12-28', 'posts_count' => 8],
        ];

        return view('forum.index', compact('forums'));
    }

    public function show($id)
    {
        // Contoh data detail forum
        $forum = [
            'id' => $id,
            'title' => 'Diskusi Laravel',
            'posts' => [
                ['user' => 'User1', 'content' => 'Apa itu Laravel?', 'created_at' => '2024-12-29 12:00'],
                ['user' => 'User2', 'content' => 'Laravel adalah framework PHP.', 'created_at' => '2024-12-29 12:05'],
            ],
        ];

        return view('forum.show', compact('forum'));
    }

    public function create()
    {
        return view('forum.create');
    }
}
