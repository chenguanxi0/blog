<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});

//用户模块
//注册
Route::any('/register','RegisterController@register');
//登录
Route::any('/login','LoginController@login');

//登出
Route::get('logout','LoginController@logout');
//用户设置
Route::any('/user/setting','UserController@setting');


//文章模块
Route::group(['prefix'=>'posts'],function(){
    //文章列表页
    Route::get('/','PostController@index');

//创建文章
    Route::get('/create','PostController@create');
    Route::post('/','PostController@store');
//编辑文章
    Route::get('/{post}/edit','PostController@edit');
    Route::put('/{post}','PostController@update');
//文章详情页
    Route::get('/{post}','PostController@show');//模型绑定
//删除文章
    Route::get('/{post}/delete','PostController@delete');

});

