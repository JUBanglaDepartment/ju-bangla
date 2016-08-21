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
                        <li role="presentation" class="active"><a href="#honors" aria-controls="honors" role="tab" data-toggle="tab"> {{ trans('course.honors') }}<span class="sr-only">(current)</span></a></li>
                        <li role="presentation"><a href="#masters" aria-controls="masters" role="tab" data-toggle="tab"> {{ trans('course.masters') }}</a></li>
                        <li role="presentation"><a href="#mphil" aria-controls="mphil" role="tab" data-toggle="tab"> {{ trans('course.mphil') }}</a></li>
                        <li role="presentation"><a href="#phd" aria-controls="phd" role="tab" data-toggle="tab"> {{ trans('course.phd') }}</a></li>
                    </ul>
                </div>

                <div class="col-sm-10 col-md-9">
                    <div class="tab-content">

                        @include('course.subview.honors')
                        @include('course.subview.masters')
                        @include('course.subview.mphil')
                        @include('course.subview.phd')

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
@endsection
