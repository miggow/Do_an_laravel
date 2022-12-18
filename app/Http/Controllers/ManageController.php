<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }
    public function indexUser()
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
