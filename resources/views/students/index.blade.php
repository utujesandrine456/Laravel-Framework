@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Student Management System</h1>
                <a href="{{ route('students.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Add New Student
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->studentname }}</td>
                            <td>{{ $student->course }}</td>
                            <td>${{ number_format($student->fee, 2) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
@endsection