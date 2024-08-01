@extends('layouts.app')
@section('title','User | Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome to User Dashboard</h1>

                @auth('web')
                <!-- The admin is logged in -->
                <p>Welcome!</p>
                @endauth

                @guest('admin')
                <!-- The admin is not logged in -->
                <p>Please log in.</p>
                @endguest
        </div>
    </div>
</div>
@endsection
