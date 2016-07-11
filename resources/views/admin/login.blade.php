@extends('master')
@section('title')
  Login
@endsection

@section('content')

  <div class="form-login text-center">
    <img src="{{ URL::asset('img/logo_cleon.png') }}" alt="" />
  </div>
  <div class="form-login">
    <h5 class="text-center">Login</h5>
    <hr>
    <form action="index.html" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
      </div>
      <button type="button" class="btn btn-info btn-block">Login</button>
    </form>
  </div>
  <div class="copyright text-center">
    <p>
      Copyright &copy; Cleon 2016
    </p>
  </div>
@endsection
