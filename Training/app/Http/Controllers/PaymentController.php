<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Menampilkan halaman checkout.
     */
    public function checkout()
    {
        // Ambil semua item di keranjang
        $cartItems = Cart::with('mentor')->get();

        // Hitung total harga
        $total = $cartItems->sum(function ($item) {
            return $item->mentor->price * $item->quantity;
        });

        // Tampilkan halaman checkout dengan data keranjang dan total harga
        return view('payments.checkout', compact('cartItems', 'total'));
    }

    /**
     * Memproses pembayaran.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name_on_card' => 'required|string|max:255',
            'card_number' => 'required|digits:16', // Simulasi input kartu (16 digit)
            'total' => 'required|numeric',
        ]);

        // Simpan data pembayaran
        $payment = Payment::create([
            'name_on_card' => $request->name_on_card,
            'card_number' => $request->card_number,
            'total' => $request->total,
        ]);

        // Kosongkan keranjang setelah pembayaran
        Cart::truncate();

        // Tampilkan halaman sukses
        return view('payments.success', compact('payment'));
    }
}
