<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

        public function store(Request $request, String $id_post){
        $data= $request->validate(['content' => ['required','min:1']]);
         $data['user_id'] = Auth::id();
        $data['post_id'] = $id_post;
        Comment::create($data);
        return redirect()->route('post.show',['id' => $id_post]);
    }
}
