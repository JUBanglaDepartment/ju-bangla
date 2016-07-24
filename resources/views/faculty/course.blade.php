<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Department of Bangla</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/dashboard.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="main_content">
		<div class="header"></div>

        <div id='cssmenu'>
        <ul>
           <li><a href='#'><span>বাংলা বিভাগ</span></a></li>
           <li class='active has-sub'><a href='/course'><span>প্রোগ্রাম সমূহ</span></a>
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





        <div id="content">

            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Export</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <li><a href="">Nav item</a></li>
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                    <li><a href="">More navigation</a></li>
                  </ul>
                  <ul class="nav nav-sidebar">
                    <li><a href="">Nav item again</a></li>
                    <li><a href="">One more nav</a></li>
                    <li><a href="">Another nav item</a></li>
                  </ul>
                </div>
                <div class="col-sm-9 col-md-10 main">
                  <h1 class="page-header">Dashboard</h1>

                  <div class="row placeholders">
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Label</h4>
                      <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Label</h4>
                      <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Label</h4>
                      <span class="text-muted">Something else</span>
                    </div>
                    <div class="col-xs-6 col-sm-3 placeholder">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                      <h4>Label</h4>
                      <span class="text-muted">Something else</span>
                    </div>
                  </div>

                  <h2 class="sub-header">Section title</h2>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>Attendance</th>
                          <th>Exercise</th>
                          <th>Final</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
@for ($i = 0; $i < 10; $i++)
    <tr>
      <td>Hemal</td>
      <td>10/<input id="attendance" type="number" min="5" max="10" name="attendance" value="" style="width:100px;"></td>
      <td>20/<input id="exercise"type="number" min="5" max="20" name="exercise" value="" style="width:100px;"></td>
      <td>70/<input id="final"type="number" min="10" max="70" name="final" value="" style="width:100px;"></td>
      <td><?php echo 7 + 18 + 50;?></td>
    </tr>
@endfor

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


        </div>
        <div id="footer"><span>বাংলা বিভাগ | জাহাঙ্গীরনগর বিশ্ববিদ্যালয়</span></div>
    </div>
    <script>window.jQuery || document.write('<script src="/js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
