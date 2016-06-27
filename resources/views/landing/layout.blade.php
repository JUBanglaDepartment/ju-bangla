<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="main_content">
		<div class="header"></div>

            @yield('header')

            @yield('banner')



        <div id="content">

            @yield('content')

        </div>
        <div id="footer"><span>বাংলা বিভাগ | জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</span></div>
    </div>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
