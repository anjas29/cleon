@extends('master')
@section('title')
  Login
@endsection

@section('content')

  <div class="form-login box box-sunflower">
    <div class="box-header text-center">
      <img src="{{ URL::asset('img/logo_cleon.png') }}" alt="logo" />
    </div>
    <form action="index.html" method="post">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon sunflower-dark"><span class="glyphicon glyphicon-user"></span></span>
          <input type="text" class="form-control" name="username" placeholder="username">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon sunflower-dark"><span class="glyphicon glyphicon-lock"></span></span>
          <input type="password" class="form-control" name="password" placeholder="password">
        </div>
      </div>
      <button type="button" class="btn btn-warning btn-block">Login</button>
    </form>
  </div>
  <div class="copyright text-center">
    <p>
      Copyright &copy; Cleon 2016
    </p>
  </div>
@endsection
