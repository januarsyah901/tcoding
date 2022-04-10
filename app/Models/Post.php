<?php

namespace App\Models;


class Post 
{

    private static $blog_posts = [
    [
        "title" => "Gambar Pertama",
        "author" => "janu",
        "slug"=>"gambar-pertama",
        "image" => "img.janu.jpg"
    ],
    [
        "title" => "Gambar Kedua",
        "author" => "pramesti",
        "slug"=>"gambar-kedua",
        "image" => "img.esti.jpg"
    ],
];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
// 25::contlorer
    

