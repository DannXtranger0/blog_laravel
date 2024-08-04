<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('user.login');
    }

    public function store(Request $request){
        $attributes = $request->validate([
             'email' => 'required',
             'password' => 'required'
        ]);
 
        //Valida que sea igual lo que está en la base de datos con lo que se escribió
        if(! Auth::attempt($attributes)){
             throw ValidationException::withMessages([
                 'email' => "esta mamada no coincide"
             ]);
        }
 
        //Regenera el token
        $request->session()->regenerate();
 
        return redirect('/about');
     }
    public function destroy(){
        Auth::logout();

        return view('post.index',['posts' => Post::latest()->take(5)->get()]);
    }
    
}
