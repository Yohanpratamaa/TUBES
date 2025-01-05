<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'content',
        'namapengguna',
        'user_id',
        'nama_forum',
        'nama_user',
        'typeforum',
        'commentar',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'forum_id');
    }
}