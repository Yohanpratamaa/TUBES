<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Izinkan kolom-kolom berikut untuk diisi (fillable)
    protected $fillable = ['mentor_id', 'quantity'];

    /**
     * Definisikan relasi ke model Mentor.
     * Setiap item di keranjang terkait dengan satu mentor.
     */
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
