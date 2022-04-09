<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //Function use to display login page
    function login()
    {
    return view('forent.login');
    }

    function showRegister()
    {
    return view('forent.signup');
    }


    /**
     * @param Request $request
     *register function used for make validation and insert data
     * @return [type]
     */
    function register(Request $request)
    {
        Validator::validate($request->all(),[
            'username'=>['required','min:3',],
            'email'=>['required','email','unique:users'],
            'password'=>['required','min:8'],
            'confirm_Pass'=>['same:password']


        ],[
            'username.required'=>'this field is required',
            'username.min'=>'can not be less than 3 letters',
            'email.unique'=>'this email is not valid',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 8',
            'confirm_Pass.same'=>'password dont match',


        ]);

        $user=new User();
        $user->user_name=$request->input("username");
        $user->email=$request->input("email");
        $user->password=Hash::make($request->input("password"));
        $user->save();
    }
}
