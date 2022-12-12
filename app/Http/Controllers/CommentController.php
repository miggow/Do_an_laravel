<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'comment' => 'required|string',
        ]);
        if($validator->fails())
        {
            return \redirect()->back()->with('message','Bình luận không thành công');
        }
        if (Auth::check()) {
            $post = Post::where('id', $request->post_id)->first();
            Comment::create([
                'post_id' => $post->id,
                'user_id' =>Auth::user()->id,
                'comment' => $request->comment,
            ]);
            redirect()->back();
        } else {
            redirect()->back();
        }
        
    }
    public function remove($id)
    {
        $comment = Comment::find($id);

        $comment->delete();
        return redirect()->back();
    }
}
