<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('blog',[
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::with(['user', 'category'])->latest()->get()

            // Post yang warnanya itu itu nama model, dia punya class all()
            // data dari variable posts ambil dari model trus diteruskan ke view dengan nama variable yg sama
        ]);  
    }

    public function show(Post $post)
    //show(nama_Model $variable_yang_dikirim_dari_route)
    {
        return view('post', [
            "title" => "single",
            "posts" => $post
        ]);
    }
}
