<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="main_content">
		<div class="header"></div>

            @yield('header')
            
            @yield('banner')

        <div id="content_head"><span>Department of Bangla | বাংলা বিভাগ</span></div>

        <div id="content">

            @yield('content')

        </div>
        <div id="footer"><span>বাংলা বিভাগ | জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</span></div>
    </div>
  </body>
</html>
