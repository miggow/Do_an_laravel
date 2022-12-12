<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('Admin.user-manage',compact('user'));
    }
    public function indexPost()
    {
        $post = Post::all();
        return view('Admin.post-manage',compact('post'));
    }
}
