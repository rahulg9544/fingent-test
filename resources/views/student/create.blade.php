@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Create Student</h2>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" >
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age" value="{{ old('age') }}" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender" id="gender" placeholder="gender" value="{{ old('gender') }}" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Reporting Teacher</label>

            <select name="reporting_teacher" id="reporting_teacher" value="{{ old('reporting_teacher') }}" >
  <option value="Dhanya">Dhanya</option>
  <option value="Ashik">Ashik</option>
  <option value="Bindhu">Bindhu</option>
  <option value="Sindhu">Sindhu</option>
</select>
        </div>

        <button type="submit" class="btn btn-primary">Create Student</button>

    </form>

</div>


@endsection