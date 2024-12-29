<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use App\Livewire\Users;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mentor', function () {
    return view('mentor');
})->middleware(['auth', 'verified'])->name('mentor');

Route::get('/forum', function () {
    return view('forum');
})->middleware(['auth', 'verified'])->name('forum');

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');

Route::get('/friend', function () {
    return view('friend');
})->middleware(['auth', 'verified'])->name('friend');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){


    Route::get('/index',Index::class)->name('index');
    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');
    Route::get('/users',Users::class)->name('users');
    

});

Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');

// Cart routes
Route::resource('cart', CartController::class)->only(['index', 'store', 'destroy']);

// Payment routes
Route::get('checkout', [PaymentController::class, 'checkout'])->name('payment.checkout');
Route::post('checkout', [PaymentController::class, 'store'])->name('payment.store');

require __DIR__.'/auth.php';


