@extends('students.layout')
@section('content')
    <div class="card mt-5">
        <h2 class="card-header">CRUD with Photo Upload</h2>
        <div class="card-body">
            @session('success')
                <div class="alert alert-success">{{ $value }}</div>
            @endsession
            <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
            {{-- <a class="btn btn-success btn-sm" href="{{ route('student.create') }}"> <i class="fa fa-plus"></i> Create New Product</a> --}}

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Division</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse  ($students as $student)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->division }}</td>
                            <td><img src="{{ asset('image/' . $student->photo) }}" alt="Photo" width="100"></td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-success">Show</a> <a href="{{ route('students.show', $student->id)}}"></a>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td>There are {{ $students->count() }} students</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {!! $students->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
@endsection