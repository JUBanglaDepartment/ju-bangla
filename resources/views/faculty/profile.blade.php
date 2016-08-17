@extends('landing.layout')

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/sidebar.css" rel="stylesheet">
@endsection

@section('content_header')
<div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
@endsection




@section('banner')

@endsection
@section('content_body')
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-md-3 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
                        <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i>  Research</a></li>
                        <li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i>  Notice</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href=""><i class="fa fa-book" aria-hidden="true"></i>  Research Papers</a></li>
                        <li><a href=""><i class="fa fa-book" aria-hidden="true"></i>  Publications</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li><a href=""><i class="fa fa-houzz" aria-hidden="true"></i>  Affiliations</a></li>
                        <li><a href=""><i class="fa fa-phone-square" aria-hidden="true"></i>  Contact Information</a></li>
                    </ul>
                </div>
                <div class="col-sm-10 col-md-9">
                    <h2 class="page-header">{{$faculty->name}}</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="/images/200x200.png" alt="Picture of {{$faculty->name}}" class="img-thumbnail"/>
                        </div>
                        <div class="col-md-9">
                            <h5 class="sub-header"><i class="fa fa-envelope"></i>  {{$faculty->email}}</h5>
                            <h5 class="sub-header"><i class="fa fa-envelope-o"></i>  {{$faculty->email}}</h5>
                            <h5 class="sub-header"><i class="fa fa-phone"></i>  {{$faculty->phone}}</h5>
                            <h5 class="sub-header"><i class="fa fa-skype"></i>  {{$faculty->email}}</h5>
                            <h5 class="sub-header"><i class="fa fa-facebook"></i>  {{$faculty->email}}</h5>
                            <h5 class="sub-header"><i class="fa fa-twitter"></i>  {{$faculty->phone}}</h5>
                        </div>
                    </div>
                    <h3 class="page-header">Bio</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                {{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}
                            </p>
                        </div>
                    </div>
                    <h3 class="page-header">Current Courses</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-unstyled">
                                <li>Bengali Literature</li>
                                <li>Theory of Literary Forms</li>
                                <li>Bengali Literature</li>
                                <li>Theory of Literary Forms</li>
                                <li>Bengali Literature</li>
                                <li>Theory of Literary Forms</li>
                                <li>Bengali Literature</li>
                                <li>Theory of Literary Forms</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="page-header">Publications</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-unstyled" >
                                <li>
                                    <h4>Bengali Literature</h4>
                                    <p>
                                        {{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}
                                    </p>
                                </li>
                                <li>
                                    <h4>Theory of Literary Forms</h4>
                                    <p>
                                        {{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}{{$faculty->name}}
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div id="footer">
        <div id="footer_content">
            <div id="footer_text_left"><span>Jahangirnagar University, Savar, Dhaka-1342, Bangladesh.<br />Telephone: PABX: 880-2-7791045-51, 			Fax: 880-2-7791052</span></div>
            <div id="footer_text_right"><span>&copy; 2016 Jahangirnagar University</span></div>
        </div>
    </div>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
