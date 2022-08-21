@extends('layouts.app')

@section('content')

<h1 class="text-center">Students Marks List</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
            <a href="{{ route('students.mark.create') }}" class="btn btn-primary">Create</a>
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
                        <th scope="col">Maths</th>
                        <th scope="col">Science</th>
                        <th scope="col">History</th>
                        <th scope="col">Term</th>
                        <th scope="col">Total Marks</th>
                        <th scope="col">Created On</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp

                    @foreach ($marks as $mark)
                    <tr>
                        <th scope="row">{{ $i++; }}</th>
                        <td>{{ $mark->studentNames->name }}</td>
                        <td>{{ $mark->maths }}</td>
                        <td>{{ $mark->science }}</td>
                        <td>{{ $mark->history }}</td>
                        <td>{{ $mark->term }}</td>
                        <td>{{ $mark->total_marks }}</td>
                        <td>{{ $mark->created_at }}</td>
                        <td><a href="{{ route('students.mark.edit', $mark->id) }}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('students.mark.delete', $mark->id) }}" method="POST">
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