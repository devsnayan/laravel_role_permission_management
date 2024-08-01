@extends('layouts.app')
@section('title','Student | Show')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                @can('add students')
                <div class="py-2">
                    <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm">
                        Add Student
                    </a>
                </div>
                @endcan
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-white">ID</th>
                            <th class=" text-white">Name</th>
                            <th class="  text-white">Mobile</th>
                            <th class="  text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="  text-white">{{ $student->id }}</td>
                            <td class="  text-white">{{ $student->name }}</td>
                            <td class="  text-white">{{ $student->mobile }}</td>
                            <td class=" ">
                                <div class="">
                                    @can('edit students')
                                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>
                                    @endcan
                                    @can('delete students')
                                    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection