<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();

        // return a view and pass in the above variable 
        return view('student.index',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');
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
        return response()->json(['success'=>'Added new records.',"mydata"=>$request->input('first_name')]);
        $data=$request->all();
        return $data;
        //validation
        $this->validate($request,array(
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'grade_id' => 'required|',
        ));
        $student = new Student();

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->grade_id = $request->grade_id;
  
        $student->save();

        return redirect()->route('students.index')->with('message','save successfully'); 
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
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('students.index');
    }
}
