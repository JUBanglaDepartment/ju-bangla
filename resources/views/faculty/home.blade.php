@extends('landing.layout')

@section('css')
    <link href="/css/style.css" rel="stylesheet" type="text/css">
@endsection

@section('content_header')
<div id="content_head"><div id="content_head_text"><span>Department of Bangla | বাংলা বিভাগ</span></div></div>
@endsection




@section('banner')

@endsection
@section('content_body')
    <div id="content">
        <div class="container">
            <div class="row">
                @foreach ($faculties as $faculty)
                    <div class="col-md-4">
                      <h4>{{ $faculty->name }}</h4>
                      <img class="img-circle profile-pic" src="/images/200x200.png" alt="Generic placeholder image" height="140" width="140">
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
              <img class="img-circle profile-pic" src="/images/profile-140-140.jpg" alt="Generic placeholder image" height="140" width="140">
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
