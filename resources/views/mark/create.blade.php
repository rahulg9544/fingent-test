@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <h2>Create Mark</h2>
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

    <form action="{{ route('students.mark.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="description" class="form-label">Students</label>
            
            <select name="name" id="name">
  <option value="">Select</option>
  @foreach ($students as $student)
  <option value="{{ $student->id }}">{{ $student->name }}</option>
  @endforeach
</select>

        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Term Selection</label>
            <input class="form-control" type="text" name="term" id="term" value="{{ old('term') }}" >
        </div>

        

        <div class="mb-3">
            <label for="age" class="form-label">Maths</label>
            <input type="text" class="form-control" name="maths" id="maths" placeholder="Maths" value="{{ old('maths') }}" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Science</label>
            <input type="text" class="form-control" name="science" id="science" placeholder="Science" value="{{ old('science') }}" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">History</label>
            <input type="text" class="form-control" name="history" id="history" placeholder="History" value="{{ old('history') }}" >
        </div>

        <button type="submit" class="btn btn-primary">Create Mark</button>

    </form>

</div>


@endsection