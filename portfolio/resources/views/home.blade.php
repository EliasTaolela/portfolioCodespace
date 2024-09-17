@extends('layouts.app')

@section('content')
<div class="home-container">
    <h1>Welcome to My Portfolio</h1>
    <p>Explore my work and learn more about me.</p>
    
    <div class="links">
        <a href="{{ route('projects') }}">View Projects</a>
        <a href="{{ route('about') }}">About Me</a>
    </div>
</div>
@endsection
