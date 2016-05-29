@extends('landing.layout')

@section('content')

    <h1>Faculty Home</h1>
        @foreach ($faculties as $faculty)
            {{ $faculty->email }}
        @endforeach

@endsection
