@extends('master')

@section('title', 'FAQ')

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
@endpush

@section('content')
  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    <h3>Frequently Asked Questions</h3>
    <div class="row">
      <div class="col-md-8">
        @for($i=0; $i < 7; $i++)
          <h5>Bagaimana Caranya?</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        @endfor
      </div>
      <div class="col-md-4">
        <nav>
          <ul class="nav nav-pills nav-stacked" data-spy="affix">
            <li><a href="#" class="active">link</a></li>
            <li><a href="#" class="active">link</a></li>
            <li><a href="#" class="active">link</a></li>
            <li><a href="#" class="active">link</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  {{-- footer --}}
  @include('component.footer')

@endsection
