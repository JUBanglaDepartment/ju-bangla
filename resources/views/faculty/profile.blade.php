@extends('landing.layout')

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/sidebar.css" rel="stylesheet">
@endsection

@section('content_header')
<div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
@endsection

@section('header')
    <div id="header">
        <div id="header_content">
            <div id="header_logo"></div>
            <div id="header_text">
                <div id="header_text2"><span>“ মনুষ্যত্বের শিক্ষাটাই চরম শিক্ষা আর সমস্তই তার অধীন ”</span></div>
                <div id="header_text3"><span>-রবীন্দ্রনাথ ঠাকুর</span></div>
            </div>
        </div>
    </div>
@endsection

@section('menu')
    @include('landing.subview.menu')
@endsection


@section('banner')

@endsection
@section('content_body')
    <div id="content">
        <div class="container-fluid">
            <div class="row">



                <div class="col-sm-2 col-md-3 sidebar">
                    <ul class="nav nav-sidebar">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home" aria-hidden="true"></i>  {{ trans('profile.home') }}<span class="sr-only">(current)</span></a></li>
                        <li role="presentation"><a href="#research" aria-controls="research" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>  {{ trans('profile.research') }}</a></li>
                        <li role="presentation"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab"><i class="fa fa-bell" aria-hidden="true"></i>  {{ trans('profile.notice') }}</a></li>
                        <li role="presentation"><a href="#research_papers" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>  {{ trans('profile.research_papers') }}</a></li>
                        <li role="presentation"><a href="#publications" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i> {{ trans('profile.publications') }}</a></li>
                        <li role="presentation"><a href="#affiliations" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-houzz" aria-hidden="true"></i>  {{ trans('profile.affiliations') }}</a></li>
                        <li role="presentation"><a href="#contact" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-phone-square" aria-hidden="true"></i>  {{ trans('profile.contact_information') }}</a></li>
                    </ul>
                    {{-- <ul class="nav nav-sidebar">
                        <li role="presentation"><a href="#research_papers" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i>  {{ trans('profile.research_papers') }}</a></li>
                        <li role="presentation"><a href="#publications" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i> {{ trans('profile.publications') }}</a></li>
                    </ul>
                    <ul class="nav nav-sidebar">
                        <li role="presentation"><a href="#affiliations" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-houzz" aria-hidden="true"></i>  {{ trans('profile.affiliations') }}</a></li>
                        <li role="presentation"><a href="#contact" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-phone-square" aria-hidden="true"></i>  {{ trans('profile.contact_information') }}</a></li>
                    </ul> --}}
                </div>







                <div class="col-sm-10 col-md-9">
                    <div class="tab-content">

                        @include('faculty.subview.home')

                        @include('faculty.subview.research')

                        @include('faculty.subview.notice')

                        @include('faculty.subview.research_papers')

                        @include('faculty.subview.publications')

                        @include('faculty.subview.affiliations')

                        @include('faculty.subview.contact')

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
