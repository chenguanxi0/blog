@extends('master')

@section('title','Yo')

@section('content')

    <form action="/posts" method="post">
       {{csrf_field()}}
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" class="form-control">
        <label for="editor">内容:</label>

        <div id="editor">

        </div>
        <textarea id="text1" name="content" style="display: none"></textarea>
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
        <button type="submit" class="btn btn-info">提交</button>
    </form>

@endsection()


