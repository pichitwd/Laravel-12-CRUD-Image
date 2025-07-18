@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Show Student</h2>
        <div class="card-body">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a> <a href="{{ route('students.index')}}"></a>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input type="text" class="form-control" id="division" name="division" value="{{ $student->division }}" disabled>
            </div>
            <div class="mb-3">
                <img src="{{ asset('image/' . $student->photo) }}" alt="Photo" width="100">
            </div>
        </div>
    </div>
@endsection