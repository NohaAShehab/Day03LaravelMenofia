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
        $data= Student::all();
//        dd($data);
        return view("students.index",["students"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
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
        //dd($request);

        //validation
        $request->validate([
            "name"=>"required | min:5",
            "email"=>"email |unique:students"
        ]);

        $name=request('name');
        $email=request('email');
        $track=request('track');

        # Conventional way
//        $student= new Student();
//        $student->name=$name;
//        $student->email=$email;
//        $student->track=$track;
//        $student->save();

        #Elequent

        Student::create([
            "name"=>$name,
            "track"=>$track,
            "email"=>$email
        ]);

        // return redirect("/students");  #route name
        return redirect(route("students.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
         return view('students.show',["student"=>$student]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
         return view('students.edit',["student"=>$student]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //

       #dd($student, $request);
        $name=request('name');
        $email=request('email');
        $track=request('track');

        //        $student->name=$name;
        //        $student->email=$email;
        //        $student->track=$track;
        //        $student->save();

        #Elquent
        // $student->fill(["name"=>$name,"email"=>$email,"track"=>$track])->save();

        #update
        $student->update(["name"=>$name,"email"=>$email,"track"=>$track]);
        // return redirect("/students");

        // return redirect(route('students.show',$student));
        return redirect($student->path());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();
        // return redirect("/students");
        return redirect(route("students.index"));

    }
}
