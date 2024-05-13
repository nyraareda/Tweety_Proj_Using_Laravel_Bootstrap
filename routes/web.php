<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;

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

Auth::routes();
    Route::get('/tweets',[ TweetController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::post('/tweets',[ TweetController::class, 'store']);
    // Route::get('/tweets',[ TweetController::class, 'index'])->name('home');
    Route::get('/profile/{user:username}', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profiles/{user}/follow', [FollowController::class, 'store'])->name('profiles.follow');
    Route::get('/profiles/{user}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::patch('/profile/{user:username}', [ProfileController::class, 'update']);
    Route::get('/explore',[ ExploreController::class, 'index'])->name('explore');


});


// Route::get('/posts',[PostController::class ,'index']);
// Route::get('/posts/create', [PostController::class , 'create']);
// Route::post('/posts' ,  [PostController::class , 'store']);
// Route::get('/posts/{id}' ,[PostController::class , 'show']);
// Route::get('/posts/{id}/edit' ,[PostController::class , 'edit']);
// Route::put('/posts/{id}',[PostController::class , 'update']);
// Route::delete('/posts/{id}',[PostController::class , 'destroy']);

