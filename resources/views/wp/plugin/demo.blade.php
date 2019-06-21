<div class="wrap">
    <iframe src="@yield('url', $url ?: '/copy')"
            frameborder="0" id="myframe"
            style="margin:0;padding:0;left:0;top:0"
            scrolling="auto"
            width="100%" height="100%"></iframe>
</div>

<script>
    $(function() {
        $('#myframe').height($('#wpcontent').height() - 42);

        $(window).resize(function() {
            $('#myframe').height($('#wpcontent').height() - 42);
        });
    });
</script>

<style>

    #wpcontent {
        padding-left: 0px;
    }
    #adminmenuback {top: 42px;}
    #wpfooter {display: none;}
    #wpcontent {
        margin-left: 0px !important;
        padding: 0;
        /*background: #000;*/
        height: 100%;
        position: fixed;
        width: 100%;
    }

    #wpbody, #wpbody-content, .wrap {
        position: relative;
        padding: 0;
        margin: 0;
    }
</style>

