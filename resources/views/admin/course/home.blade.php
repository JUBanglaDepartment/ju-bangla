@extends('admin.layout')

@section('navigation_content')
    @include('admin.course.navigation')
@endsection

@section('body_content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Course <small>Dashboard</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Bengali Name</th>
                    <th>Objective</th>
                    <th>Description</th>
                </tr>
            </thead>
            @foreach ($courses as $course)
                <tbody>
                    <tr>
                        <td>{{$course->code}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->bengali_name}}</td>
                        <td>{{$course->objective}}</td>
                        <td>{{$course->description}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <!-- /.row -->
@endsection
