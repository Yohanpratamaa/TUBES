<?php

namespace App\Http\Controllers;

use App\Models\Mentor; // Pastikan model Mentor sudah dibuat
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Menampilkan daftar mentor.
     */
    public function index()
    {
        // Ambil semua data mentor dari database
        $mentors = Mentor::all();

        // Pastikan view `mentors.index` ada dan menerima data
        return view('mentors.index', compact('mentors'));
    }
}
