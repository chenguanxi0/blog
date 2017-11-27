@extends('master')

@section('title','Yo')

@section('content')

    <form action="">
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" class="form-control" value="我不管我就要测试">
        <label for="content">内容:</label>
        <textarea class="form-control" name="" id="content" rows="10">测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试
        </textarea>
        <br>
        <button type="submit" class="btn btn-info">提交</button>
    </form>

@endsection()


