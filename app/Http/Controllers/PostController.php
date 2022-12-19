<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller

{
    public function index()
    {
        $post = Post::all();
        return view('home', compact('post'));
    }
    public function create()
    {
        
        $category = Category::all();
        return view('create-post', compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');



        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->content = $request->content;
        $post->image = $imagePath;


        $post->save();

        return redirect()->route('home')->with('status', 'Tạo bài đăng thành công');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('post-detail', compact('post'));
    }
    public function edit($id)
    {
        $category = Category::all();
        $post = Post::find($id);
        return view('edit', compact('post','category'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->image = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->update();
        return redirect()->route('home');
    }
    public function remove($id)
    {
        $post = Post::find($id);

        $post->delete();
        return redirect()->route('home');
    }
    public function search(Request $request)
    {
        $search_text = $_GET['search'];
        $posts = Post::where('title','like','%'.$request->search.'%')->get();

        return view('search-post',compact('posts'));
    }
}
