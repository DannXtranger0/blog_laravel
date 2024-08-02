<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index',['posts' => $posts]);
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        Post::create($data);

        return redirect('/posts');

    }

    public function show($id){
        return view('post.show',['post'=> Post::find($id)]);
    }

    public function edit($id){

        return view('post.edit',['post'=>Post::find($id)]);

    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required']
        ]);

        Post::find($id)->update($data);

        return redirect('/posts');
    }

    public function destroy($id){
        Post::find($id)->delete();
        return redirect('/posts');
    }
}
