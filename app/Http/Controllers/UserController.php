<?php

namespace App\Http\Controllers;


use App\Helpers\ActivityLogger;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function loginForm(){
        return view('authentication/loginForm');
    }
    public function registerForm(){
        return view('authentication/registerForm');
    }
    public function registerValidation(Request $request){
        $validated = $request->validate([
            'email' => ['required','unique:users','email'],
            'username' => ['required','unique:users','min:3'],
            'password'=> ['required','min:5'],
        ]);

        if($validated){
            $user = new User();
            $user->registerUser($validated);
        }
        ActivityLogger::LogActivity("Register");
        return redirect()->route('loginForm');
    }

    public function performLogin(Request $request){
        $email = $request['email'];
        $password = $request['password'];


        if(!($email || $password)){
            return redirect()->back()->with("error", "Email or Password can not be empty");
        }

        $user = DB::table('users')
            ->where('email',$email)
            ->first();

        if(!$user){
            return redirect()->back()->with("error", "User with the provided email doesn't exist.");
        }
        if($user->password == md5($password)){
            if($user->role_id !=1){
                ActivityLogger::LogActivity("Login");
                $request->session()->put('user',$user);
                return redirect()->route('home');
            }
            else{
                ActivityLogger::LogActivity("AdminLogin");
                $request->session()->put('admin',$user);
                return redirect()->route('champions');
            }
        }
        else{
            return redirect()->back()->with("error", "Wrong password");
        }
    }

    public function logout(Request $request){
        ActivityLogger::LogActivity("Logout");
        $request->session()->flush();
        return redirect()->route('home');
    }

    public function validateUser(Request $request){
        $validated = $request->validate([
            'email' => ['required','unique:users','email'],
            'username' => ['required','unique:users','min:3'],
            'password'=> ['required','min:5'],
            'roleSelect'=>['required', Rule::notIn([0])]
        ]);
        if($validated){
            $userModel = new User();
            $userModel->insertUser($request);
            return redirect()->route('users');
        }

    }

}
