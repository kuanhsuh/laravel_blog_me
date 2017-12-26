@extends('layouts.master')

@section('content')
  <div class="col-sm-8">
    <h1>Register</h1>

    <form method="POST" action="/register">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="text" class="form-control" placeholder="Enter Password">
      </div>
      <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input name="password_confirmation" type="text" class="form-control" placeholder="Password Confirmation">
      </div>
      <button type="submit" class="btn btn-primary">Register User</button>
      <hr>

      @include('layouts.errors')
    </form>
  </div>

@endsection