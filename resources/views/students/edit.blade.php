@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Edit Student</h2>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
                </div>
                <div class="mb-3">
                    <label for="division" class="form-label">Division</label>
                    <input type="text" class="form-control" id="division" name="division" value="{{ $student->division }}">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
                <div class="mb-3">
                    <img src="{{ asset('image/' . $student->photo) }}" alt="Photo" width="100">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection