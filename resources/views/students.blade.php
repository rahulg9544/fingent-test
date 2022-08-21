@extends('layouts.app')

@section('content')

<h1 class="text-center">Admin All Table students</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
            <a href="{{ route('students.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Reporting Teacher</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $i = 1;
                    @endphp
                        @foreach ($students as $student)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->reporting_teacher }}</td>
                                <td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('students.delete', $student->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>


@endsection