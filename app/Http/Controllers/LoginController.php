<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function login()
    {
        if(Request::isMethod('get')){
            return view('login/login');
        }else{
        //验证
        $this->validate(\request(),[
            'phone'=>["required","regex:/^1(3|4|5|7|8)[0-9]{9}$/"],
            'password'=>'required|min:4',
            'is_remember'=>'integer'
        ]);

        //逻辑
        $user = Request::only(['phone','password']);
        $is_remember = boolval(Request::input('is_remember'));


        if (Auth::attempt($user,$is_remember)){
            return redirect('/posts');
        }   //

        return \Redirect::back()->withErrors('帐号密码不匹配');

        //渲染
    }}

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
