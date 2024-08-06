<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        $data['user_id'] =Auth::id(); //Se agrega el id
        // del usuario que inició sesión

        Post::create($data);

        return redirect('/posts');

    }

    public function show($id){
        $comments = Comment::all()->where('post_id',$id);
        return view('post.show',['post'=> Post::find($id),'comments'=>$comments]);
    }

    public function edit($id){
        $post = Post::find($id);
        if(Gate::denies('update-post', $post)){
            return redirect('/posts')->with('error',"DOND HAVE PERMISSION TO DO THIS ACTION!");
        }

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
