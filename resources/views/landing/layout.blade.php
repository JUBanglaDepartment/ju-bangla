<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="main_content">
        @yield('header')
        @yield('menu')
        @yield('banner')
        <div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
        <div id="content_div">
            <div id="content">
                    @yield('content_left')
                    @yield('content_right')
            </div>
                @yield('footer')
        </div>
    </div>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
