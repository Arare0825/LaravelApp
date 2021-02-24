<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentsController extends Controller
{
    //
    // public function store(Request $request){

    //     $params = $request->validate([
    //         'post_id'=>'required|exists:post,id',
    //         'body'=>'required|max:2000',
    //     ]);

    //     $post = Post::findOrFail($params['post_id']);
    //     $post->comments()->create($params);

    //     return view('posts.show', ['post' => $post]);
    // }
    public function store(Request $request)
    {
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|max:2000',
        ]);

        $post = Post::findOrFail($params['post_id']);
        $post->comments()->create($params)
        ->orderBy('created_at','asc');

        $posts = new Post;

        return redirect()->route('post.show',['id'=>$post->id]);
    }
}
