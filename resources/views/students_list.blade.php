@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
    @if (session()->get('message'))
        <div class="mt-3 alert alert-success">
            {{ session()->get('message') }}
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
                        <a href="{{ route('students.show', $student->id) }}" style="margin-right: 10px;"><i
                                class="fa-regular fa-eye fa-shake fa-xl" style="color: green;"></i></a>
                        <a href="{{ route('students.edit', $student->id) }}" style="margin-right: 10px;"><i
                                class="fa-solid fa-pen-to-square fa-bounce fa-xl" style="color: blue"></i></a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="post"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                style="border: none; background: transparent; outline: none; padding: 0; margin: 0;"
                                onclick="confirm('Are you sure you want to delete this item?');"><i
                                    class="fa-solid fa-person-circle-minus fa-fade fa-xl" style="color: red"></i></button>

                        </form>
                    </td>


                </tr>
            @endforeach

        </tbody>

    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Name: <p>{{$student->name}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
