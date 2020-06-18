<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="applicable-device" content="pc">
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/boke/Public/style/style.css"/>
    <link rel="shortcut icon" href="http://yispace.net/wp-content/themes/weiweiqi/img/favicon.ico"/>
    <script src="/boke/Public/style/jquery.min.js"></script>
    <script src="/boke/Public/style/post.js"></script>
 
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
            "ext": ".png",
            "source": {"concatemoji": "http://yispace.net/wp-includes/js/wp-emoji-release.min.js?ver=4.5.2"}
        };
        !function (a, b, c) {
            function d(a) {
                var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"), h = String.fromCharCode;
                if (!g || !g.fillText)return !1;
                switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
                    case"flag":
                        return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
                    case"diversity":
                        return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
                    case"simple":
                        return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
                    case"unicode8":
                        return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g, h, i;
            for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
                c.DOMReady = !0
            }, c.supports.everything || (g = function () {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
   
    <script type="text/javascript">/*frame*/
    if (top.location != self.location) {
        top.location = self.location
    } </script>

</head>
<body class="single single-post postid-42805 single-format-standard">

<div class="img">
    <img src="/boke/Public/images/toop.jpg" height="300" width="100%">
</div>
<div class="topbar">
    <div class="inner">

        <ul class="nav">
        <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a  href="/boke/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
        </ul>

        
    </div>
</div>

<div class="wrapper">
    <div class="content">

        <div class="meta">
            <h1 class="meta-tit"><?php echo ($arts["title"]); ?></h1>
            <p class="meta-info">小组：<a href="/boke/index.php"><?php echo ($catename); ?></a> &nbsp;&nbsp; 发表日期：<?php echo ($arts["time"]); ?> &nbsp;&nbsp; </p>
        </div>

        <!-- 广告代码2 -->

        <div class="entry">
            <p><img class="aligncenter size-full wp-image-42806"
                    src="/boke<?php echo ($arts["pic"]); ?>"  width="630"
                    height="399"
                   /></p>
        <?php echo ($arts["content"]); ?>
          </div>
        <div>文章版权属于文章作者所有，转载请注明：<a rel="bookmark" title=" 该去北上广哭，还是回小城市笑 " href=" http://yispace.net/42805.html ">http://yispace.net/42805.html</a>
        </div>

      
       

        <div style="margin:10px 0;">
           
        </div>

        <!-- 分享代码 -->
        <div class="baidufenxiang" style="overflow:auto;"><!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">

            </div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164"></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
            </script>
            <!-- Baidu Button END --></div>

        <!-- 广告代码1 -->

        <!-- 百度推荐 -->
        <div style="margin-left: -12px; margin-bottom: -3px;">
            <script>document.write(unescape('%3Cdiv id="hm_t_61751"%3E%3C/div%3E%3Cscript charset="utf-8" src="http://crs.baidu.com/t.js?siteId=99c2c06a529fc4c8787deb597141fe76&planId=61751&async=0&referer=') + encodeURIComponent(document.referrer) + '&title=' + encodeURIComponent(document.title) + '&rnd=' + (+new Date) + unescape('"%3E%3C/script%3E'));</script>
        </div>


    </div>



<div id="bottom">
    <div id="bottom-content">
        <div id="content-left">
            <p> 网站位置 | 关于我们 | 意见反馈 |</p>
        </div>
        <div id="content-right">
            <p>友情链接</p>
            <p>PHP中文网  |  小猪CMS</p>
            <p>公司网址：php.cn</p>
        </div>
    </div>
</div>

<script type='text/javascript' src='http://yispace.net/wp-includes/js/wp-embed.min.js?ver=4.5.2'></script>

<!-- 百度自动推送 -->
<script>
    (function () {
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
</body>
</html>

<!-- Dynamic page generated in 0.509 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2016-08-23 19:33:53 -->

<!-- super cache -->