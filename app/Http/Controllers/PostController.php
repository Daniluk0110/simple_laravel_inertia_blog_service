<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = PostResource::collection($posts)->resolve();

        return Inertia::render('Posts/Index', compact('posts'));
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(StoreRequest $request)
    {
        Post::create($request->validated());

        return to_route('posts.index');
    }

    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', compact('post'));
    }

    public function edit(Post $post)
    {
        return Inertia::render('Posts/Edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('posts.index');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return to_route('posts.index');
    }
}
