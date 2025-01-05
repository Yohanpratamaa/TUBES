<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Chat\Chat;
use App\Http\Livewire\Chat\Index;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function (){

    Route::get('/index',Index::class)->name('index');
    Route::get('/chat',Index::class)->name('chat.index');
    Route::get('/chat/{query}',Chat::class)->name('chat');
    Route::get('/users',Users::class)->name('users');
    
});

Route::middleware('auth')->group(function (){

    Route::get('/friend', [UserController::class, 'index'])->name('users.friend');
    Route::post('/users/{id}/add', [UserController::class, 'addFriend'])->name('users.add-friend');
    Route::post('/users/{id}/accept', [UserController::class, 'acceptFriend'])->name('users.accept-friend');
    Route::post('/users/{id}/reject', [UserController::class, 'rejectFriend'])->name('users.reject-friend');
    Route::post('/users/{id}/not-interested', [UserController::class, 'notInterested'])->name('users.not-interested');
    
});

Route::middleware('auth')->group(function () {

    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/forum-read/{id}', [ForumController::class, 'read'])->name('forum.read');
    Route::get('/forum-update/{id}/edit', [ForumController::class, 'edit'])->name('forum.edit');
    Route::put('/forum/{id}/update', [ForumController::class, 'update'])->name('forum.update');
    Route::delete('/forum/{id}/destroy', [ForumController::class, 'destroy'])->name('forum.destroy');

    Route::get('/forum-create', [ForumController::class, 'create'])->name('forum.create');
    Route::post('/forum-store', [ForumController::class, 'store'])->name('forum.store');
});

Route::middleware('auth')->group(function () {
    Route::controller(PaymentController::class)->group(function () {
        Route::get('/payment', 'checkout')->name('payment.checkout');
        Route::post('/payment', 'store')->name('payment.store');
        Route::get('/receipt', 'receipt')->name('payment.receipt');
        Route::get('/receipt/{id}', 'receipt')->name('payment.receipt.detail');
    });
});

Route::middleware('auth')->group(function () {

    Route::get('/find-mentor', [MentorController::class, 'index'])->name('find-mentor');
    Route::post('/mentor/store', [MentorController::class, 'store'])->name('mentor.store');
    Route::delete('/mentor/{id}', [MentorController::class, 'destroy'])->name('mentor.destroy');

    Route::get('/mentors/{id}', [MentorController::class, 'show'])->name('mentors.show');
    Route::post('/mentors/{id}', [MentorController::class, 'update'])->name('mentors.update');
    Route::delete('/mentors/{id}', [MentorController::class, 'destroy'])->name('mentors.destroy');

    Route::post('/mentors', [MentorController::class, 'store'])->name('mentors.store');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/history', [NavigationController::class, 'history'])->name('history');
});