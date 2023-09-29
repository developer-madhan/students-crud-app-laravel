@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    <h1>Student Insert Form</h1>
    <div class="col-md-6">
        <form action="{{route('students.store')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="student_name" class="col-sm-2 col-form-label">Student Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="student_name" name="student_name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="student_class" class="col-sm-2 col-form-label">Student Class</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="student_class" name="student_class">
                </div>
            </div>
            <div class="mb-3 row ">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
@endsection
