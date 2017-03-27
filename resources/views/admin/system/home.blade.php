@extends('admin.layout')

@section('navigation_content')
    @include('admin.system.navigation')
@endsection

@section('body_content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin <small>Dashboard</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-4 col-md-6">
            @include('admin.system.subview.create_faculty')
        </div>
        <div class="col-lg-4 col-md-6">
            @include('admin.system.subview.create_student')
        </div>
        <div class="col-lg-4 col-md-6">
            @include('admin.system.subview.create_course')
        </div>
    </div>
    <!-- /.row -->
@endsection
