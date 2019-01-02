<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required'
        ]);
        Post::create([
           'title' => $request->title,
           'category_id' => $request->category_id,
            'post' => request('content')
        ]);
        return redirect()->route('post.show');
    }
    public function show()
    {
        $posts = Post::all();
        return view('show',compact('posts'));
    }
}
