@extends('admin.layout')

@section('navigation_content')
    @include('admin.faculty.navigation')
@endsection

@section('body_content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Faculty <small>Dashboard</small>
            </h1>
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
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Students' Score</h3>
                </div>
                <div class="panel-body">
                    <form class="" action="faculty/addMarks" method="post">
                        {{ csrf_field() }}
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Roll No</th>
                                        <th rowspan="2">Name</th>
                                        <th colspan="6">Tutorial Exam</th>
                                        <th colspan="3">Attendance</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                        <th>1st</th>
                                        <th>2nd</th>
                                        <th>3rd</th>
                                        <th>4th</th>
                                        <th>5th</th>
                                        <th>Average</th>
                                        <th>Count</th>
                                        <th>Percentage</th>
                                        <th>Score</th>
                                        <th>Score Received</th>
                                    </tr>
                                </thead>
                                @foreach ($students as $student)
                                    <tbody>
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->name}}</td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_1"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_2"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_3"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_4"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_5"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_avg"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_count"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_percent"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_score"></td>
                                            <td><input type="number" value="0" name="{{$student->id}}_tut_total"></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo; Previous</span>
                                    </a>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">Next &raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="text-right">
                            <input class="btn btn-primary" type="submit" value="Save" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
