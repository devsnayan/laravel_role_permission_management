@extends('layouts.app')
@section('title','Student | Update')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="text-white text-center">Update Student</h4>
                    <form action="{{ route('students.update', $student) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-white">Name:</label>
                            <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="block text-white">Mobile:</label>
                            <input type="number" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
