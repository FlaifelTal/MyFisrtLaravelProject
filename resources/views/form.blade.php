{{-- Extend the layout and render the main section --}}
@extends('layouts.master')

{{-- Define the content section --}}
@section('content') 

<form method="POST" action="{{ route('form.submit') }}">
    @csrf

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
  
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
