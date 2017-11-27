@extends('master')

@section('title','Yo')

@section('content')
    <?php env('DB_HOST') ?>
    @foreach($posts as $post)
    <article>
        <section class="mp-article">
            <div class="article-category">
                <a href="#">{{$post->category_name}}</a>
            </div>
            <h2 class="article-title">
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            </h2>
            <hr>
            <div class="row article-container">
                <a href="/posts/{{$post->id}}">{{str_limit($post->content,150,'...')}}</a>
            </div>
            <hr>
            <div class="article-bottom">
                <div class="left">
                    <button type="button" class="btn btn-info"><a href="/posts/{{$post->id}}">阅读全文</a></button>
                </div>
                <div class="right">
                    <i class="fa fa-calendar"></i> {{$post->created_at}}
                    <i class="fa fa-user"></i> {{$post->username}}
                    <i class="fa fa-eye"></i> {{$post->watch_count}}
                </div>
            </div>
        </section>
    </article>
    @endforeach

    {{$posts->links()}}

@endsection()


