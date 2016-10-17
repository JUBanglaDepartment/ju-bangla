<?php

namespace App\Http\Controllers\Admin;


use App\Models\Faculty;
use App\Models\student;
use App\Models\Course;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SystemAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.system.home');
    }

    /**
     * Show the form for creating a new faculty.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFaculty(Request $request)
    {
        echo "createFaculty";
        $faculty = new Faculty();
        $faculty->name = $request->faculty_name;
        $faculty->email = $request->faculty_email;
        $faculty->phone = $request->faculty_phone;
        $faculty->save();
        echo $faculty_name;
    }

    /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStudent(Request $request)
    {
        echo "createStudent";
        $student = new Student();
        $student->name = $request->student_name;
        $student->email = $request->student_email;
        $student->phone = $request->student_phone;
        $student->save();
        echo $student_name;
    }

    /**
     * Show the form for creating a new course.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCourse(Request $request)
    {
        echo "createcourse";
        $course = new Course();
        $course->name = $request->course_name;
        $course->code = $request->course_code;
        $course->save();
        echo $course_name;
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
