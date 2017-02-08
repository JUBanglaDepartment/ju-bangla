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
                                        <th>Student Roll</th>
                                        <th>Student Name</th>
                                        <th>Attendance</th>
                                        <th>Tutorial</th>
                                        <th>Course FInal</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                @foreach ($students as $student)
                                    <tbody>
                                        <tr>
                                            <td>{{$student->classroll}}</td>
                                            <td>{{$student->name}}</td>
                                            <td><input type="text" value="0" name="{{$student->id}}_atendance"></td>
                                            <td><input type="text" value="0" name="{{$student->id}}_tutorial"></td>
                                            <td><input type="text" value="0" name="{{$student->id}}_course_final"></td>
                                            <td><input type="text" value="0" name="{{$student->id}}_total"></td>
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
    <!--

-->
@endsection
