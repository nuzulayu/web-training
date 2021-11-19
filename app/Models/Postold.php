<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => " post 1",
            "slug" => "post-pertama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae doloremque magni omnis, cupiditate sunt dolor at. Similique dignissimos nisi aliquid odit laborum ullam laudantium totam voluptatibus beatae quis, perspiciatis reiciendis consequatur esse possimus hic laboriosam commodi doloremque! At labore obcaecati id fugit esse harum molestiae molestias sint optio a, quibusdam laudantium, corporis impedit illum amet quasi? Laboriosam, accusamus laudantium nisi non natus ut veniam aut deserunt voluptates a nulla harum est. Ullam commodi ipsa ut aperiam repellat recusandae, sint quos.
        "
        ],
        [
            "title" => " post 2",
            "slug" => "post-kedua",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae doloremque magni omnis, cupiditate sunt dolor at. Similique dignissimos nisi aliquid odit laborum ullam laudantium totam voluptatibus beatae quis, perspiciatis reiciendis consequatur esse possimus hic laboriosam commodi doloremque! At labore obcaecati id fugit esse harum molestiae molestias sint optio a, quibusdam laudantium, corporis impedit illum amet quasi? Laboriosam, accusamus laudantium nisi non natus ut veniam aut deserunt voluptates a nulla harum est. Ullam commodi ipsa ut aperiam repellat recusandae, sint quos.
        "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts); 
    }

    public static function find ($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);


    }
}
