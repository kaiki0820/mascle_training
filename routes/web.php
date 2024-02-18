<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\MypageController;
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

Route::controller(PostController::class)->middleware(['auth'])->group(function () {
    Route::get('/','index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts', 'store')->name('posts.store');
    Route::get('/posts/edit', 'edit')->name('posts.edit');
    Route::get('/posts/{post}', 'show');
});

Route::controller(MypageController::class)->middleware(['auth'])->group(function() {
    Route::get('/mypage','index')->name('mypage.index');
    Route::get('/healthes/create', 'create')->name('healthes.create');
    Route::post('/healthes', 'store')->name('healthes.store');
    Route::get('/mypage/weight', 'weight')->name('mypage.weight');
    Route::get('/mypage/bmi', 'bmi')->name('mypage.bmi');
    Route::get('/mypage/muscle', 'muscle')->name('mypage.muscle');
});

Route::controller(WorkController::class)->middleware(['auth'])->group(function() {
    Route::get('/works/create', 'create')->name('works.create');
    Route::post('/works','store')->name('works.store');
    Route::get('/works/{work}/show', 'show')->name('works.show');
    Route::put('/works/{work}/edit', 'edit')->name('works.edit');
});

Route::middleware('auth')->group(function () {
    Route::post('/posts/like', [PostController::class, 'like'])->name('posts.like');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
