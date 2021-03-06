<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            "title"=>"My Posts",
            // "posts"=> Post::all()
            "posts"=>Post::latest()->get()
        ]);
    }

    public function view(Post $post)
    {
        return view('post', [
            "title" => "My Blogs",
            "post" => $post
        ]);
    }
}
