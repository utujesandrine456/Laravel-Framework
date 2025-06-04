@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Student Details</h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Student ID:</div>
                        <div class="col-md-8">{{ $student->id }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Student Name:</div>
                        <div class="col-md-8">{{ $student->studentname }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Course:</div>
                        <div class="col-md-8">{{ $student->course }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Fee:</div>
                        <div class="col-md-8">${{ number_format($student->fee, 2) }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Created At:</div>
                        <div class="col-md-8">{{ $student->created_at->format('M d, Y H:i:s') }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">Last Updated:</div>
                        <div class="col-md-8">{{ $student->updated_at->format('M d, Y H:i:s') }}</div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary me-md-2">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary me-md-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection