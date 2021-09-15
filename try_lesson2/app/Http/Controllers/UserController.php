<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function detail(User $user)
    {
        return view('users', [
            "title"=>"Details Data",
            "name"=>$user->name,
            "email"=>$user->email,
            "posts"=>$user->post
        ]);
    }
}
