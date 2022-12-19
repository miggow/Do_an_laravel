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
        return view('Admin.user-manage', compact('user'));
    }
    public function indexPost()
    {
        $post = Post::all();
        return view('Admin.post-manage', compact('post'));
    }
    public function blockUser($id)
    {
        $user = user::find($id);

        $user->status = 1;
        $user->update();
        return redirect()->back();
    }
    public function openUser($id)
    {
        $user = user::find($id);

        $user->status = 0;
        $user->update();
        return redirect()->back();
    }
    public function chuyenDoiAdmin($id)
    {
        $user = user::find($id);

        $user->role = 1;
        $user->update();
        return redirect()->back();
    }
    public function chuyenDoiUser($id)
    {
        $user = user::find($id);

        $user->role = 0;
        $user->update();
        return redirect()->back();
    }
    public function blockPost($id)
    {
        $post = Post::find($id);
        $post->status = 1;
        $post->update();
        return redirect()->back();
    }
    public function openPost($id)
    {
        $post = Post::find($id);
        $post->status = 0;
        $post->update();
        return redirect()->back();
    }
}
