<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    static function index(){
        return view('blog', [
            'metatitle'=>'Home',
            'judul'=>'Halaman Blog',
            'posts'=> Post::all()
        ]);
    }

    static function show($slug){
        return view('postdetail', [
            'metatittle'=>'Post Detail',
            'post'=>Post::findWhere($slug)
        ]);
    }
}
