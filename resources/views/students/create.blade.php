@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Student</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="studentname" class="form-label">Student Name</label>
                            <input type="text" class="form-control @error('studentname') is-invalid @enderror" 
                                   id="studentname" name="studentname" value="{{ old('studentname') }}" required>
                            @error('studentname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control @error('course') is-invalid @enderror" 
                                   id="course" name="course" value="{{ old('course') }}" required>
                            @error('course')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="fee" class="form-label">Fee ($)</label>
                            <input type="number" step="0.01" class="form-control @error('fee') is-invalid @enderror" 
                                   id="fee" name="fee" value="{{ old('fee') }}" required>
                            @error('fee')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('students.index') }}" class="btn btn-secondary me-md-2">
                                <i class="fas fa-arrow-left"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Save Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection