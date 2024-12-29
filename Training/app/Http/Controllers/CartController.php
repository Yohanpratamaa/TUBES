<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Mentor;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Menampilkan isi keranjang.
     */
    public function index()
    {
        $cartItems = Cart::with('mentor')->get(); // Ambil semua item dalam keranjang beserta data mentor
        return view('cart.index', compact('cartItems')); // Kirim data ke view
    }

    /**
     * Menambahkan mentor ke keranjang.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'mentor_id' => 'required|exists:mentors,id',
        ]);

        // Tambahkan mentor ke keranjang
        Cart::create([
            'mentor_id' => $request->mentor_id,
            'quantity' => 1, // Default quantity adalah 1
        ]);

        return redirect()->route('cart.index')->with('success', 'Mentor berhasil ditambahkan ke keranjang.');
    }

    /**
     * Menghapus item dari keranjang.
     */
    public function destroy($id)
    {
        // Cari item dalam keranjang
        $cartItem = Cart::findOrFail($id);

        // Hapus item
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
