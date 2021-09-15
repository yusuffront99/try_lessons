<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function detail(User $author)
    {
        return view('posts', [
            "title"=>"Details User",
            "posts"=>$author->post
        ]);
    }
}
