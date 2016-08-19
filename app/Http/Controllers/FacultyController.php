<?php

namespace App\Http\Controllers;


use DB;
use App\Models\Faculty;
use App\Http\Requests;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$faculties = DB::table('faculties')->get();

        $faculties = Faculty::all();
        //return view('faculty.home', compact('faculties'));
        //return view('landing.devlayout', compact('faculties', 'rows'));
        return view('faculty.home', compact('faculties', 'rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        return view('faculty.profile', compact('faculty'));

        //return $faculty;
        //return DB::table('faculties')->where('id',$id)->get();
        //return view('landing.devlayout');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function course()
    {
        return view('faculty.course');

        //return $faculty;
        //return DB::table('faculties')->where('id',$id)->get();
        //return view('landing.devlayout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function research()
    {
        return view('faculty.subview.research');

        //return $faculty;
        //return DB::table('faculties')->where('id',$id)->get();
        //return view('landing.devlayout');
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
