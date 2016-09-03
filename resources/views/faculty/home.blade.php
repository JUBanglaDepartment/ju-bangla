@extends('landing.layout')

@section('css')
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
    @include('landing.subview.banner')
@endsection

@section('content_body')
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-md-3 sidebar">
                    <ul class="nav nav-sidebar">
                        <li role="presentation" class="active"><a href="#faculty" aria-controls="faculty" role="tab" data-toggle="tab">
                            Faculty <span class="sr-only">(current)</span>
                        </a></li>
                    </ul>
                </div>
                <div class="col-sm-10 col-md-9">
                    <div class="tab-content">

                        @include('faculty.subview.faculty')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('_content_body')
    <div id="content">
        <div class="container">
            <div class="row">
                @foreach ($faculties as $faculty)
                    <div class="col-md-4">
                      <h4>{{ $faculty->name }}</h4>
                      <img class="img-circle profile-pic" src="/images/faculty/{{ $faculty->id }}.png" alt="Generic placeholder image" height="140" width="140">
                      <p> Email: {{ $faculty->email }}</p>
                      <p> Phone: {{ $faculty->phone }}</p>
                      <p><a class="btn btn-default" href="faculty/{{ $faculty->id }}" role="button">View details &raquo;</a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('faculties')
    <div class="row">
        @foreach ($faculties as $faculty)
            <div class="col-md-4">
              <h2>{{ $faculty->name }}</h2>
              <img class="img-circle profile-pic" src="/images/faculty/{{ $faculty->id }}.png" alt="Generic placeholder image" height="140" width="140">
              <p> Email: {{ $faculty->email }}</p>
              <p> Phone: {{ $faculty->phone }}</p>
              <p><a class="btn btn-default" href="faculty/{{ $faculty->id }}" role="button">View details &raquo;</a></p>
            </div>
        @endforeach
    </div>
@endsection

@section('content_body_')
    <div id="content">
        <div class="row">
            @foreach ($faculties as $faculty)
                <div class="col-md-4">
                  <h2>{{ $faculty->name }}</h2>
                  <img class="img-circle profile-pic" src="/images/profile-140-140.jpg" alt="Generic placeholder image" height="140" width="140">
                  <p> Email: {{ $faculty->email }}</p>
                  <p> Phone: {{ $faculty->phone }}</p>
                  <p><a class="btn btn-default" href="faculty/{{ $faculty->id }}" role="button">View details &raquo;</a></p>
                </div>
            @endforeach
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
