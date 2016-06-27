@extends('landing.layout')

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

@section('content')
    <div id="container" class="courses">
            @foreach ($courses as $course)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $course->name }}</div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>
            @endforeach
    </div>
@endsection
