<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        Post::create([
           'title' => request('title'),
           'body' => request('body')
        ]);


        return redirect('/');
    }
}
