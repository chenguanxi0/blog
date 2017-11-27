<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //列表
    public function index()
    {
//        $posts = Post::orderBy('created_at','desc')->get();
        $posts = DB::table('posts')
            ->leftJoin('categorys','posts.category_id','=','categorys.category_id')
            ->leftJoin('users','users.id','=','posts.user_id')
            ->orderBy('created_at','desc')
            ->select('posts.*','categorys.name as category_name','users.username as username')
            ->paginate(6);
        return view('post/index',compact('posts'));
    }
    //详情
    public function show(Post $post)
    {
        $id = $post->id;
        $posts = DB::table('posts')
            ->orderBy('created_at','desc')
            ->select('posts.title')
            ->get();
        $user = DB::table('users')->where('id',$post->user_id)->first();
        $category = DB::table('categorys')->where('category_id',$post->category_id)->first();
        $next_id = DB::table('posts')
            ->where('posts.id','>',$id)->min('id');
        $prev_id = DB::table('posts')
            ->where('posts.id','<',$id)->max('id');
        return view('post/show',compact('post','user','category','next_id','prev_id','posts'));
    }
    //创建文章
    public function create()
    {
        return view('post/create');
    }
    //创建逻辑
    public function store(Request $request)
    {
        //验证
        $this->validate($request,[
            'title'=>'required|max:50|min:5|string',
            'content'=>'required|string|min:10'
        ]);
        //逻辑

        //渲染
       dd($request->all());
    }
    //编辑文章
    public function edit()
    {
        return view('post/edit');
    }
    //编辑逻辑
    public function update()
    {

    }
    //删除文章
    public function delete()
    {

    }

}
