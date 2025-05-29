<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PostController extends Controller
{
    public function showPostCreateForm(): View
    {

        return view('post.postForm');
    }

    public function showHomePage(): View
    {
        $alreadyExistingPost = Post::all();

        return view('post.home', compact('alreadyExistingPost'));
    }

    public function createPost(Request $request): Redirector|Application|RedirectResponse

    {
        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_content = $request-> post_content;
        $post->save();

        return redirect('/')->with('message', 'Post created successfully!');

    }
}
