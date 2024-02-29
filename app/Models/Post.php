<?php

namespace App\Models;
use Illuminate\Support\Collection;

class Post
{
    private static $blogs = [
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

    public static function all(){
        return collect(self::$blogs);
    }

    public static function findWhere($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
   
    public static function find($slug) {
        $posts = self::$blogs;
        $new_post = [];
        foreach($posts as $post) {
            if($post['slug']===$slug) {
                $new_post = $post;
            }
        }
        return $new_post;
    }
}
