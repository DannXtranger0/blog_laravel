<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required', Password::min(6), 'confirmed']
        ]);
        
        $user = User::create($data);

        Auth::login($user);

        return redirect('/posts');

    }
}
