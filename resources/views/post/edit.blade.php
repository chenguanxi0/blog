@extends('master')

@section('title','Yo')

@section('content')

    <form action="/posts/{{$post->id}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
        <label for="content">内容:</label>
        <textarea class="form-control we-container" name="content" id="wangeditor" style="" cols="5">{{$post->content}}</textarea>
        <span>你还可以输入<b id="num" style="">8000</b>个字符</span>
        <br>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-info right">提交</button>
    </form>

@endsection()


@section('foot-js')

    {!! we_js() !!}
    {!! we_config('wangeditor') !!}
    @include('common.string')
@endsection()