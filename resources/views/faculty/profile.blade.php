@extends('landing.layout')

@section('content')


    <h1>{{ $faculty->name }}</h1>

        {{ $faculty->email }}
        {{ $faculty->phone }}


@endsection
