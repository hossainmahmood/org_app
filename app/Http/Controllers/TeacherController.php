<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class TeacherController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//        $teacherList=DB::
        return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('teachers.teacherCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->birth_date = $request->birthDate;
        $teacher->email = $request->email;
        $teacher->phone_number = $request->phoneNumber;
        $teacher->address = $request->address;
        $teacher->hire_date = $request->hireDate;
        $teacher->department = $request->department;
        $teacher->picture = '';
        if ($request->file('picture') == null) {
            $teacher->picture = "NoImage";
        } else {
            $teacher->picture = $request->file('picture')->store('public');
        }
        
        $teacher->save();

        return redirect()->back()->with('status', 'Data Inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
