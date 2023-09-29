@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <h1>Student Update Form</h1>
    <div class="col-md-6">
        <form action="{{route('students.update',$student[0]->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <label for="student_name" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="student_name" name="student_name" value="{{$student[0]->name}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="student_class" class="col-sm-2 col-form-label">Student Class</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="student_class" name="student_class"value="{{$student[0]->s_class}}">
                </div>
            </div>
            <div class="mb-3 row ">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>
@endsection
