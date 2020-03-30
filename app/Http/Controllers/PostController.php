<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('welcome',compact('posts'));
    }

    public function lists()
    {
        $posts = Post::all();
        return $posts;
    }
}
