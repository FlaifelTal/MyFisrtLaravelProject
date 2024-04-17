{{-- to extend the layout (in master) and correctly use the static template  --}}
@extends('layouts.master')

{{-- render the main sec in the desired place --}}
@section('content') 
{{-- put the name used in master --}}
<div class="container mt-4 content">
    <h1>Welcome to Your Website</h1>
    <p class="lead">Hello from gallery</p>
</div>
@endsection