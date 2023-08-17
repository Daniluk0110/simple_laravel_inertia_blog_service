<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Posts/Index');
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());

        return to_route('posts.index');
    }
}
