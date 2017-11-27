<footer id="m-footer">
    <div class="Copyright">
        <p>&copy; 2017 <a href="/">跟我回潜江</a>.
            All Rights Reserved. 版权所有.<br><a href="">Theme by 赵伟</a>
        </p>
        <p>
            闽ICP备15027255号-1
        </p>
    </div>
</footer>
<div id="editbox">
    <a href="/posts/create"><img src="/images/edit.png" alt="" width="60" height="60"></a>
</div>



<script type="text/javascript" src="/js/wangEditor.js"></script>
<script type="text/javascript">
    var E = window.wangEditor;
    var editor = new E('#editor');
    var $text1 = $('#text1');
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $text1.val(html)
    };
    editor.create();
    // 初始化 textarea 的值
    $text1.val(editor.txt.html())
</script>