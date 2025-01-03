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

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
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
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
Route::controller(NavigationController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/find-mentor', 'findMentor')->name('find-mentor');
    Route::get('/chat', 'chat')->name('chat');
    Route::get('/forum', 'forum')->name('forum');
    Route::get('/find-friend', 'findFriend')->name('find-friend');
    Route::get('/history', 'history')->name('history');
    Route::get('/cart', 'cart')->name('cart');
    
});

Route::controller(PaymentController::class)->group(function () {
    Route::get('/payment', 'checkout')->name('payment.checkout');
    Route::post('/payment', 'store')->name('payment.store');
    Route::get('/receipt', 'receipt')->name('payment.receipt');
    
    Route::get('/payment', [PaymentController::class, 'checkout'])->name('payment.checkout');
    Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/receipt/{id}', [PaymentController::class, 'receipt'])->name('payment.receipt');
    Route::get('/find-mentor', [NavigationController::class, 'findMentor'])->name('find-mentor');
});

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::controller(MentorController::class)->group(function () {
    Route::get('/find-mentor', 'index')->name('find-mentor');
    Route::post('/mentor/store', 'store')->name('mentor.store');
    Route::delete('/mentor/{id}', 'destroy')->name('mentor.destroy');

    Route::get('/mentors/{id}', [MentorController::class, 'show']);
    Route::post('/mentors/{id}', [MentorController::class, 'update']);
    Route::delete('/mentors/{id}', [MentorController::class, 'destroy']);

    Route::post('/mentors', [MentorController::class, 'store'])->name('mentors.store');

});

<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
