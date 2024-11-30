<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user->token = $user->createToken("api-token")->accessToken;
        Auth::login($user);
        return redirect('/')->with('user', $user);
    }

    
    public function checkToken(Request $request){
        return response()->json([
            "ok" =>  true,
            "message" => "Token is valid",
            "data" => $request->user()
        ], 200);
    }

    public function logout(Request $request){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function loginPost(Request $request){
        $validator = validator($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:8|max:30',
        ]);

        if( $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $validator->validated();
        if( !Auth::attempt($credentials) ){
            return redirect()->back()->withErrors([
                "email" => "Email or Password is incorrect"
            ])->withInput();
        }
        $user = Auth::user();
        $user->token = $user->createToken("api-token")->accessToken;
        return redirect('/')->with('user', $user);
    }

    public function login(){
        return view('pages.login');
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function transaction(Request $request){
        $validator = validator($request->all(), [
            "user_id" => "required|exist:users,id",
            "name" => "required|string|min:4|max:15",
            "email" => "required|string|min:4|email",
            "message" => "required|string|min:4|max:100"
        ]);

         if( $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $transaction = Transaction::create($validator->validated());
        return back()->with('Successfully sent the message!');
    }
}
