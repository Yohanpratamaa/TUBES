<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subject', 'price', 'description'];

    /**
     * Definisikan relasi ke model Cart.
     * Satu mentor dapat muncul di banyak item keranjang.
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
