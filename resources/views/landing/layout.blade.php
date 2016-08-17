<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="main_content">
        <div id="header">
            <div id="header_content">
                <div id="header_logo"></div>
                <div id="header_text">
                    <div id="header_text2"><span>“ মনুষ্যত্বের শিক্ষাটাই চরম শিক্ষা আর সমস্তই তার অধীন ”</span></div>
                    <div id="header_text3"><span>-রবীন্দ্রনাথ ঠাকুর</span></div>
                </div>
            </div>
        </div>
        <div id="menu">
            <div id='cssmenu'>
                <ul>
                    <li><a href='/'><span>বাংলা বিভাগ</span></a></li>
                    <li class='active has-sub'><a href='#'><span>প্রোগ্রাম সমূহ</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>বাংলায় অনার্স</span></a>
                                <ul>
                                    <li><a href='#'><span>XXX</span></a></li>
                                    <li class='last'><a href='#'><span>XXX</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>বাংলায় এম,এ</span></a>
                                <ul>
                                    <li><a href='#'><span>XXX</span></a></li>
                                    <li class='last'><a href='#'><span>XXX</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>বাংলায় এম,ফিল</span></a></li>
                            <li class='has-sub'><a href='#'><span>বাংলায় পি,এইচ,ডি</span></a></li>
                        </ul>
                    </li>
                    <li><a href='/faculty'><span>শিক্ষকবৃন্দ</span></a></li>
                    <li><a href='#'><span>যোগাযোগ</span></a></li>
                    <li class='last'><a href='#'><span>লগ ইন</span></a></li>
                </ul>
            </div>
        </div>
        @yield('banner')
        @yield('content_header')
        <div id="content_div">
            @yield('content_body')
            @yield('footer')
        </div>
    </div>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
