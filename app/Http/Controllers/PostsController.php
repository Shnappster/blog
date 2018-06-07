<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $month = $request->get('month');
        $year = $request->get('year');

        $postsQuery = Post::query()->latest();

        if (!is_null($month) && !is_null($year)) {
            $postsQuery->filter([
                'month' => $month,
                'year' => $year,
            ]);
        }

        $posts = $postsQuery->paginate(4);


        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|min:5',
            'title' => 'required|max:30',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        session()->flash(
            'message',
            'Your post has now been published'
        );

        return redirect('/');
    }

    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

}
