@extends('landing.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('banner')
    <div id="banner">
         <script type="text/javascript" src="js/jssor.slider.min.js"></script>
         <script type="text/javascript" src="js/jssor_1_slider.js"></script>

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1280px; height: 499px; overflow: hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1280px; height: 499px; overflow: hidden;">
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner2.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner3.png" />
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="images/banner4.png" />
                </div>

            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        </div>
        <script>
            jssor_1_slider_init();
        </script>
    </div>
    <div id="content_head"><span>Department of Bangla | বাংলা বিভাগ</span></div>
@endsection


@section('header')
    <div id='cssmenu'>
    <ul>
       <li><a href='#'><span>বাংলা বিভাগ</span></a></li>
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
       <li><a href='faculty'><span>শিক্ষকবৃন্দ</span></a></li>
       <li><a href='#'><span>যোগাযোগ</span></a></li>
       @if (Auth::guest())
           <li><a href="{{ url('/login') }}">লগ ইন</a></li>
       @else
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <ul class="dropdown-menu" role="menu">
                   <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
               </ul>
           </li>
       @endif
    </ul>
    </div>
@endsection


@section('facultyPage')
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div> <!-- /container -->
@endsection
