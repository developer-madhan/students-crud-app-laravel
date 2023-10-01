@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <h1>Student Update Form</h1>
    <div class="col-md-6">

            <div class="mb-3 row">
                <label for="student_name" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$student->name}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="student_class" class="col-sm-2 col-form-label">Student Class</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="s_class" value="{{$student->s_class}}" readonly >
                </div>
            </div>
            <div class="mb-3 row ">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>


    </div>
@endsection
