<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
        /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $teacherList=DB::
        return view('teachers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('teachers.teacherCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher=new Teacher();
        $teacher->name=$request->name;  
        $teacher->birth_date= $request->birthDate;
//        $teacher->birth_date= date_format($request->birthDate,'YYYY-MM-DD');
        $teacher->email=$request->email;
        $teacher->phone_number=$request->phoneNumber;
        $teacher->address=$request->address;
        $teacher->hire_date= $request->hireDate;
//        $teacher->hire_date= date_format($request->hireDate,'Y-m-d');
        $teacher->department=$request->department;
        
        $teacher->save();
        
        return redirect()->route('home');
        
//        var_dump($request->birthDate);        
//        exit($department);
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
