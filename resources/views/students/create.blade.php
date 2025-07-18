@extends('students.layout')
@section('content')
  <div class="card mt-5">
    <h2 class="card-header">Add new student</h2>
    <div class="card-body">
      <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="division" class="form-label">Division</label>
          <input type="text" class="form-control" id="division" name="division">
        </div>
        <div class="mb-3">
          <label for="photo" class="form-label">Photo</label>
          <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection