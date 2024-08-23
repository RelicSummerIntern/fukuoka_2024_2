<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AmhomeController;/* リンク先：localhost/AMhome上に開くために使うコード */

use App\Http\Controllers\AMProfileController; /* 雄貴が作ったコード */

use App\Http\Controllers\BulletinBoardController;


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


/* サンプル機能の一覧 */



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
 Route::get('/AMhome',[AmhomeController::class, 'regis'])->name('AMhome.regis');/* ホームページから新規登録画面に遷移するためのコード */
 Route::get('/AMhome',[AmhomeController::class, 'aregis'])->name('AMhome.aregis');/* 新規登録画面からホーム画面に遷移するためのコード */
 Route::get('/AMhome',[AmhomeController::class,'AMhome'])->name('AMhome.searchcpn');/* ホーム画面で検索した時にヒットするためのコード(部分一致検索も実装可能) */

 // Route for home page
//Route::get('/AMhome', [AmhomeController::class, 'index'])->name('AMhome.ad');

// Route for login page
// Route::get('/login', [AmhomeController::class, 'rogin'])->name('login');

// Route to handle the login/logout toggle
//Route::post('/toggle-auth', [AmhomeController::class, 'toggleAuth'])->name('toggleAuth');

// ログイン後に移動するページ（/ad）
//Route::get('/ad', [AmhomeController::class, 'ad'])->name('AMhome.ad');

/* 雄貴が作ったコード */
Route::get('/AMprofile', function () {
    return view('AMprofile');
});
Route::get('/AMprofile_edit', function () {
    return view('AMprofile_edit');
});
Route::get('/AMCPprofile', function () {
    return view('AMCPprofile');
});



Route::post('/logout', [AmhomeController::class, 'logout'])->name('logout');/* ホーム画面(ad)からログイン画面に遷移するためのコード */
Route::post('/login', [AmhomeController::class, 'login'])->name('login');/* ログインした後にホーム画面(ad)に遷移するためのコード */


Route::get('/AMprofile__edit', [AMProfileController::class, 'edit'])->name('AMprofile.edit');
Route::get('/AMprofile', [AMProfileController::class, 'back'])->name('AMprofile.back');

/* 雄貴が作ったものを遷移するためのコード */
Route::get('/ad',[AmhomeController::class, 'ad'])->name('AMhome.ad');/* プロフィール編集画面からホーム画面に遷移するためのコード */
Route::get('/ad',[AmhomeController::class, 'ad'])->name('AMhome.ad');/* プロフィール完成画面からホーム画面に遷移するためのコード */



// コウカウ 作ったもの
Route::get('/searchPage', function () {
    return view('searchPage');
})->name('searchPage');

Route::get('/bulletinBoard', function () {
    return view('bulletinBoard');
})->name('bulletinBoard');

Route::get('/thread', function () {
    return view('thread');
})->name('thread');
// コウカウ 作ったもの

