@extends('layouts.master')

@section('content')
  <div class="col-sm-8">
    <h1>Login</h1>

    <form method="POST" action="/login">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="text" class="form-control" placeholder="Enter Password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <hr>

      @include('layouts.errors')
    </form>
  </div>

@endsection