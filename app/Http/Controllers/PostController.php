<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function showPostCreateForm(): View
    {
        return view('post.postForm');
    }
}
