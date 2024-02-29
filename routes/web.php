<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {

    return view('blog', [
        'post'=> Post::all()
    ]);
});

Route::get('post/{slug}', function ($slug) {

    $blogs = [
        [
            'judul' => 'judul 1',
            'penulis' => 'awok',
            'slug'=>'artikel-pertama',
            'post' => 'lroeoreolreol'
        ],
        [
            'judul' => 'judul 1',
            'penulis' => 'awok',
            'slug'=>'artikel-pertama',
            'post' => 'lroeoreolreol'
        ]
    ];

    $new_post = [];

    foreach($blogs as $post) {
        if($post['slug']===$slug) {
            $new_post = $post;
        }
    }

    return view('postdetail', [
        'metatittle'=>'Post Detail',
        'post'=>$new_post,
        // 'judul'=>'Ini Post Detail',
        // 'isi'=>'isi blog',
        // 'slug'=>$slug
    ]);
});