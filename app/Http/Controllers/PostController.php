<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function showPostCreateForm(): View
    {
        return view('post.postForm');
    }

    public function createPost(Request $request)

    {
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_content = $request-> post_content;
        $post->save();

        return redirect('/')->with('message', 'Post created successfully!');

    }
}
