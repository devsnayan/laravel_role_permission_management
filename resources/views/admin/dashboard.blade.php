@extends('layouts.app')
@section('title','Admin | Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to Admin Dashboard</h1>

                @auth('admin')
                <!-- The admin is logged in -->
                <p>Welcome, {{ Auth::guard('admin')->user()->name }}!</p>
                @endauth

                @guest('admin')
                <!-- The admin is not logged in -->
                <p>Please log in.</p>
                @endguest

                <form method="post" action="{{route('admin.logout')}}">
                    @csrf
                    
                    <button type="submit" class="btn btn-primary">Admin Logout</button>
                </form>
                
            
        </div>
    </div>
</div>
@endsection
