@extends('admin.layout')

@section('navigation_content')
    @include('admin.student.navigation')
@endsection

@section('body_content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Student <small>Dashboard</small>
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
                    <th>Class Roll</th>
                    <th>Student Name</th>
                    <th>Year</th>
                    <th>Email</th>
                    <th>Registration ID</th>
                    <th>Hall No</th>
                </tr>
            </thead>
            @foreach ($students as $student)
                <tbody>
                    <tr>
                        <td>{{$student->classroll}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->year}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->registrationid}}</td>
                        <td>{{$student->hall}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <!-- /.row -->
@endsection
