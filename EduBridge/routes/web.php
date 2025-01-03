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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


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

// Route::get('/friend', function () {
//     return view('friend');
// })->middleware(['auth', 'verified'])->name('friend');

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
    Route::get('/forum-read', [ForumController::class, 'read'])->name('forum.read');
    // Route::get('/forum-update', [ForumController::class, 'update'])->name('forum.update');
    // Route::get('/forum/{id}/update', [ForumController::class, 'edit'])->name('forum.update');
    Route::get('/forum/{id}/update', [ForumController::class, 'edit'])->name('forum.update');
    Route::put('/forum/{id}/update', [ForumController::class, 'update'])->name('forum.update.save');
    Route::get('/forum-create', [ForumController::class, 'create'])->name('forum.create');
    Route::get('/forum/create', [ThreadController::class, 'create'])->name('thread.create');
    Route::post('/forum/store', [ThreadController::class, 'store'])->name('thread.store');
    Route::get('/forum-create', function () {return view('forum.forum-create');});
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');
    // Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
});