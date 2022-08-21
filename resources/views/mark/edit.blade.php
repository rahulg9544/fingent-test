@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Update Student Mark</h2>
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

    <form action="{{ route('students.mark.update', $mark->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="description" class="form-label">Student</label>
            
            <select name="name" id="name" disabled>
  <option>Select</option>
  @foreach ($students as $student)
  <option value="{{ $student->id }}">{{ $student->name }}</option>
  @endforeach
</select>

        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Term Selection</label>
            <input class="form-control" type="text" name="term" id="term" value="{{ $mark->term }}">
        </div>

        

        <div class="mb-3">
            <label for="age" class="form-label">Maths</label>
            <input type="text" class="form-control" name="maths" id="maths" placeholder="Maths" value="{{ $mark->maths }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Science</label>
            <input type="text" class="form-control" name="science" id="science" placeholder="Science" value="{{ $mark->science }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">History</label>
            <input type="text" class="form-control" name="history" id="history" placeholder="History" value="{{ $mark->history }}">
        </div>

          <button type="submit" class="btn btn-primary">Update Mark</button>

    </form>

</div>


@endsection