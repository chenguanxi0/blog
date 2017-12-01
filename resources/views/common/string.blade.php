<script>
    $(document).ready(function() {
        initBind();
    });

    function initBind()
    {
//            $(".wangEditor-txt").blur(function(){ checkMessage();});
        $(".wangEditor-txt").keyup(function() { checkMessage(); });
        $(".wangEditor-txt").keydown(function() { checkMessage(); });
    }

    function checkMessage()
    {
//            alert($('.wangEditor-txt').html());
        $("#num").html(8007 - $('.wangEditor-txt').html().length);
        var pattern = /[\s\S]{20,2000}/;
        if($('.wangEditor-txt').val().length  != 0)
        {
            if(!pattern.test($('#wangEditor-txt').val()) || $('.wangEditor-txt').val().length < 20)
            {
                err = false;
                $("#errmessage").show();
            }
            else
            {
                err = true;
                $("#errmessage").hide();
                if (err1 && err2 && err3 && err) {
                    $("#Button1Error").hide();
                }
            }
        }
        else
        {
            err = true;
            $("#errmessage").hide();
            if (err1 && err2 && err3 && err) {
                $("#Button1Error").hide();
            }
        }
    }
</script>