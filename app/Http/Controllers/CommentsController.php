<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        // dd($post);
        $this->validate(request(), [
            'body'=>'required|min:3'
        ]);

        $comment = new Comment;
        $comment->body = request('body');
        $comment->post_id = $post->id;
        $comment->save();
        return view('posts.show', compact('post'));
    }
}
