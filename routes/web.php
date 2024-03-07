<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;


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

Route::get('/home', function () {

    return view('home', [
        "judul"=>"HOME"
    ]);
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/produk', function () {

    return view('produk');
});

Route::get('/blog',[PostController::class,'index']);

Route::get('post/{slug}', [PostController::class,'show']);