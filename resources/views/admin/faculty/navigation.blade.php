@extends('admin.subview.navigation')

@section('sidebar_navigation')
    <li class="active">
        <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="/admin/faculty"><i class="fa fa-fw fa-graduation-cap"></i> Faculty</a>
    </li>
    <li>
        <a href="/admin/student"><i class="fa fa-fw fa-group"></i> Students</a>
    </li>
    <li>
        <a href="/admin/course"><i class="fa fa-fw fa-book"></i> Courses</a>
    </li>
    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
            <li>
                <a href="#">Course 1</a>
            </li>
            <li>
                <a href="#">Course 2</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
    </li>
@endsection
