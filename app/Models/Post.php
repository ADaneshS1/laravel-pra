<?php

namespace App\Models;

class Post extends Model
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
        return self::$blogs;
    }
}
