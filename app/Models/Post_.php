<?php

namespace App\Models;

class Post
{
    private static $blogs = [
        [
            "judul" => "Post Pertama",
            "slug"  => "post-pertama",
            "author"=> "Aditya Adi Nugroho",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, cum. Repellendus recusandae necessitatibus obcaecati, sunt eligendi minus libero facilis, ad, ipsa accusamus quidem illo provident? Nam aliquam excepturi in eos."
        ],

        [
            "judul" => "Post Kedua",
            "slug"  => "post-kedua",
            "author"=> "Ilma",
            "body"  => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, cum. Repellendus recusandae necessitatibus obcaecati, sunt eligendi minus libero facilis, ad, ipsa accusamus quidem illo provident? Nam aliquam excepturi in eos."
        ]
    ];

    public static function all(){
        //jika properti static
        return collect(self::$blogs);

        //jika properti non-static
        //return this->blog;
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstwhere('slug',$slug);
//        $blog =[];
//        foreach ($posts as $p) {
//        if($p["slug"] === $slug){
//            $blog = $p;
//        }
//    }
    }
}

