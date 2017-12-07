@extends('master')

@section('title','Yo')

@section('content')
    <div class="col-md-9">
    <form action="/posts/{{$post->id}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
        <label for="content">内容:</label>
        <textarea class="form-control we-container" name="content" id="wangeditor" style="" cols="5">{{$post->content}}</textarea>
        <span>你还可以输入<b id="num" style="">8000</b>个字符</span>
        <br>
        @include('layout.errors')
        <button type="submit" class="btn btn-info right">提交</button>
    </form>
    </div>
    @include('layout.right-box')
@endsection()


@section('foot-js')

    {!! we_js() !!}
    {!! we_config('wangeditor') !!}
    @include('common.string')
@endsection()