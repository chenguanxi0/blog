@extends('master')

@section('title','Yo')

@section('content')

<div class="article-detail">
    <header class="detail-header">
        <h2>{{$post->title}}</h2>

            <ul>
                <li><i class="fa fa-user"></i> {{$user->username}}</li>
                <li><i class="fa fa-calendar"></i> {{$post->created_at}}</li>
                <li><i class="fa fa-eye"> {{$post->watch+1}}</i></li>
                <li><i class="fa fa-thumbs-o-up"> {{$post->like+1}}</i></li>
                <li><i class="fa fa-tag"> {{$category->name}}</i></li>
                <div class="clearBoth"></div>
            </ul>

    </header>
    <br class="clearBoth">
    <div class="detail-container">
        <article>
            {{$post->content}}
        </article>
        <div class="show-foot">
            <div class="last-edit">
                <i class="fa fa-clock-o"></i><span>最后修改：{{$post->updated_at}}</span>
            </div>
            <div class="copyright">
                <span>© 著作權歸作者所有</span>
            </div>
            <br class="clearBoth">
            <div class="support">
                <button class="btn btn-danger"><i class="fa fa-gratipay"></i> 打赏作者</button>
            </div>
        </div>
        <nav class="next-prev">
            <ul>
                <li class="next"><a href="/posts/{{$next_id}}" title="{{$next_id}}">下一篇</a></li>
                <li class="prev"><a href="/posts/{{$prev_id}}" title="{{$prev_id}}">上一篇</a></li>
                <br class="clearBoth">
            </ul>
        </nav>
        <div id="comments">
            <h4>999+条评论</h4>
            <ol>
                <li>111</li>
                <li>111</li>
                <li>111</li>
                <li>111</li>
            </ol>
            <div class="comment-page">
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="comment-respond">
                <laber for="respond">评论</laber>
                <textarea id="respond" class="form-control" row="5" placeholder="说点什么吧……">

                </textarea>
                <br>
                <button class="btn btn-info">发表评论</button>
            </div>
        </div>
    </div>
</div>

@endsection()


