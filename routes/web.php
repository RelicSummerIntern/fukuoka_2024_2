<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmhomeController;/* リンク先：localhost/AMhome上に開くために使うコード */

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
});

require __DIR__.'/auth.php';

/* チーム開発用webサイト */
 /* ホームページ用 */
 Route::get('/AMhome', [AmhomeController::class, 'index']); /* ホームページの外見を表示するベース */
 Route::post('/toggle-auth', [AmhomeController::class, 'toggleAuth']);
 Route::get('/AMhome_rogin',[AmhomeController::class, 'rogin'])->name('AMhome.rogin');/* ホームページからログイン画面に遷移するためのコード */
 Route::get('/AMhome',[AmhomeController::class, 'arogin'])->name('AMhome.arogin');/* ログイン画面からホームページに遷移するためのコード */
 Route::get('/AMhome',[AmhomeController::class, 'regis'])->name('AMhome.regis');
 Route::get('/AMhome',[AmhomeController::class, 'aregis'])->name('AMhome.aregis');