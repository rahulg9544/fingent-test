@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Student</h2>
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

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ $student->name }}">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="Enter Age" value="{{ $student->age }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender" id="gender" placeholder="gender" value="{{ $student->gender }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Reporting Teacher</label>

            <select name="reporting_teacher" id="reporting_teacher">
  <option value="Dhanya">Dhanya</option>
  <option value="Ashik">Ashik</option>
  <option value="Bindhu">Bindhu</option>
  <option value="Sindhu">Sindhu</option>
</select>
        </div>

          <button type="submit" class="btn btn-primary">Update Student</button>

    </form>

</div>


@endsection