<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= DB::select("select * from students");
        return view('students_list', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insert_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('student_name');
        $s_class= $request->input('student_class');
        DB::insert("insert into students(name,s_class) values(?,?)",[$name,$s_class]);
        // return 'Record Created Successfully! <a href="/students" > Click here to go back </a>';
        return redirect('/students')->withMessage('Record Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student= DB::select('select * from students where id=?',[$id]);
        return view('show_form',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student= DB::select('select * from students where id=?',[$id]);
        return view('student_edit',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name=$request->input('student_name');
        $s_class= $request->input('student_class');
        DB::update('update students set name=?,s_class=? where id=?',[$name,$s_class,$id]);
        return redirect('/students')->withMessage('Record Updated Successfully!');
        // return 'Record Updated Successfully! <a href="/students" > Click here to go back </a>';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::delete('delete from students where id=?',[$id]);
        return redirect('/students')->withMessage('Record Deleted Successfully!');
        // return 'Record Deleted Successfully! <a href="/students" > Click here to go back </a>';

    }
}
