<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function register(){
        return view('pages.register');
    }

    /**
     * Register a new user with the given input.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerPost(Request $request){
        $validator = validator($request->all(),[
            'username' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email|max:30',
            'password' => 'required|min:8|max:30|confirmed',
        ]);

        if( $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create($validator->validated());
        $user->token = user->createToken("api-token")->accessToken;
        return view('pages.home')->with('user', $user);
    }
    public function checkToken(){

    }

    public function login(){
        return view('pages.login');
    }
}
