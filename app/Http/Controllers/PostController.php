<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index')->with('posts', $posts);
    }

    public function create(){
        return view('createPost');
    }

    public function insertPost(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($validated);

        return redirect()->route('index')->with('success','Successfully created a post');
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('index')->with('success','Successfully deleted a post');
    }
    public function editPost($id){
        $post = Post::find($id);

        return view('editPost')->with('post',$post);
    }

    public function updatePost($id,Request $request){
        // validation for inputs
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('index')->with('success','Successfully updated');
    }
}
