<?php

namespace App\Http\Controllers;

use App\User;
use Request;

class RegisterController extends Controller
{

    public function register()
    {
        if (Request::isMethod('get')){
            return view('register/register');
        }else{
//        dd(\request()->all());
        //验证
        $this->validate(\request(),[
            'phone'=>["required","unique:users,phone","regex:/^1(3|4|5|7|8)[0-9]{9}$/"],
            'username'=>'required|unique:users,username|min:4',
            'password'=>'required|confirmed|min:3'
        ]);

        //逻辑
        $phone = \request('phone');
        $username = \request('username');
        $password  = bcrypt(\request('password'));

        User::query()->create(compact('phone','username','password'));

        return redirect('/user/setting');

    }}
}
