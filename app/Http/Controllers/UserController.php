<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getSignup()
    {
            return view('user.signup');
    }//getSignup(user.signup)


    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'email'=>'email|required|unique:users',
            'password'=>'required|min:4'
        ]); // if push enter the email and password , will got the validate


        $user = new User([
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ]);// Enter the email and password by User


        $user->save();

                Auth::login($user);


            return redirect()->route('product.index');
    }
    //1.postSignup($request redirect()->route('product.index'))註冊後回到product.index
    //2.Auth(user)使用者認證後到profile()


    public function getSignin()
    {
        return view('user.signin');
    }//getSignin(user.signin)


    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|min:4'
        ]);


        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
                    return redirect()->route('user.profile');
        }//user.profile

                return redirect()->back();

    }
    //postSignin(user.profile)登入認證


    public function getProfile()
    {
        return view('user.profile');
    }
    //getProfile('getProfile')


    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }//getLogout(->back)登出後重新back




}
