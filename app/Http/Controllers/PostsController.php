<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;

class PostsController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::all());
    }

    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);

        $post->save();

        return response()->json('success');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('successfully updated');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('successfully deleted');
    }
}
