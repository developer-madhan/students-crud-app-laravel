@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
@if(session()->get('message'))
<div class="mt-3 alert alert-success">
    {{session()->get('message')}}
</div>
@endif
    <h1>Students Records</h1>
    <table class="table table-bordered border-primary table-hover">
        <thead>
            <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Class</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->s_class }}</td>
                    <td>
                        <a href="{{route('students.show',$student->id)}}"><i class="fa-regular fa-eye fa-shake fa-xl" style="color: green;"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{route('students.edit',$student->id)}}"><i class="fa-solid fa-pen-to-square fa-bounce fa-xl" style="color: blue"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{route('students.destroy',$student->id)}}"><i class="fa-solid fa-person-circle-minus fa-fade fa-xl" style="color: red"></i></a>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

@endsection
