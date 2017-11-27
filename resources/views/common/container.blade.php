<div class="container" id="pc-container">
    <div class="row" id="mp-row">
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-4">
            <aside id="mp-aside">
                <aside class="mp-search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="你想搜啥">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                           <span class="glyphicon glyphicon-search">搜索</span>
                        </button>
                        </span>
                    </div>
                </aside>
                <br>
                <aside class="mp-pill">
                    <ul class="nav nav-pills" id="mp-tab">
                        <li class="active">
                            <a href="#latest" data-toggle="tab">最近发表</a>
                        </li>
                        <li >
                            <a href="#hot" data-toggle="tab">最热文章</a>
                        </li>
                        <li >
                            <a href="#commit" data-toggle="tab">最新评论</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="latest">
                            <ul >
                                {{--@foreach($posts as $post)--}}
                                    {{--@if($loop->index<=5)--}}
                                {{--<li class="list-group-item">{{$post->title}}</li>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="hot">
                            <ul >
                                {{--@foreach($posts as $post)--}}
                                    {{--@if($loop->index<=5)--}}
                                        {{--<li class="list-group-item">{{$post->title}}</li>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="commit">
                            <ul >
                                <li class="list-group-item">5555</li>
                                <li class="list-group-item">2222</li>
                                <li class="list-group-item">3333</li>
                                <li class="list-group-item">2222</li>
                                <li class="list-group-item">3333</li>
                                <li class="list-group-item">4444</li>

                            </ul>
                        </div>
                    </div>
                </aside>
                <script>
                    $(function () {
                        $('#mp-tab li:eq(1) a').tab('show');
                    });
                </script>
                <br>
                <aside class="mp-james">
                    <div class="panel panel-default">
                        <div class="panel-heading">詹姆斯专区</div>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </aside>
            </aside>
        </div>
    </div>
</div>