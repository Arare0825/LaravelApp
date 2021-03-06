<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();

        $posts = Post::orderBy('created_at','desc')->paginate(15);

        return view('posts.index',['posts'=>$posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);
        Post::create($params);

        return redirect('/');
    }

    public function show($post_id){
        $post = Post::findOrFail($post_id);

        return view('posts.show', compact('post'));
    }

}
