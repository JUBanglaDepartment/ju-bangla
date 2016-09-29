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
    <!--/.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Create Faculty</h3>
                </div>
                <div class="panel-body">
                    <form class="" role="form" action="system/createFaculty" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="faculty_name">Faculty Name</label>
                          <input type="text" name="faculty_name" class="form-control" id="faculty_name" placeholder="faculty name">
                        </div>

                        <div class="form-group">
                          <label for="faculty_email">Email Address</label>
                          <input type="text" name="faculty_email" class="form-control" id="faculty_email" placeholder="email address">
                          <p class="help-block">Enter faculty email address. This will be used as the username.</p>
                        </div>

                        <div class="form-group">
                          <label for="faculty_phone">Phone Number</label>
                          <input type="text" name="faculty_phone" class="form-control" id="faculty_phone" placeholder="phone number">
                        </div>

                        <div class="form-group">
                          <label for="faculty_fb">Facebook</label>
                          <input type="text" name="faculty_fb" class="form-control" id="faculty_fb" placeholder="facebook link">
                        </div>

                        <div class="form-group">
                          <p class="help-block">Please enter some lines about the faculty.</p>
                          <textarea name="faculty_bio" id="faculty_bio" rows="5" cols="50"></textarea>
                        </div>

                        <div class="form-group">
                          <p class="help-block">Please enter academic details of the faculty.</p>
                          <table class="table table-7 table-hover table-responsive">
                              <thead>
                                  <tr>
                                      <th>Sl</th><th>Degree</th><th>Institute</th><th>Subject</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @for ($i = 0; $i < 6; $i++)
                                  <tr>
                                      <td>{{$i+1}}</td>
                                      <td><input type="text" name="faculty_degree_{{1}}" class="form-control"></td>
                                      <td><input type="text" name="faculty_institute_{{1}}" class="form-control"></td>
                                      <td><input type="text" name="faculty_subject_{{1}}" class="form-control"></td>
                                  </tr>
                              @endfor
                              </tbody>
                          </table>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="reset" class="form-control" value="Reset">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="submit" class="form-control" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
