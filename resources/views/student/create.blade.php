@extends('layouts.app')
@section('title','Student | Create')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="text-white text-center">New Student</h4>
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-white">Name:</label>
                            <input type="text" name="name" id="name" class="form-control"  required>
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="block text-white">Mobile:</label>
                            <input type="number" name="mobile" id="mobile" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                Add Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

