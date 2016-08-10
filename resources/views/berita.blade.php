@extends('master')

@section('title', 'Berita')

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
@endpush

@section('content')
  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    @for($i=0; $i < 5; $i++)
      <div class="blog-post">
        <h3 class="title">Bintang Muhammad</h3>
        <span class="date"><i class="fa fa-calendar-o"></i> 27 Agustus 2016</span>
        <div class="content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <a href="{{ URL::route('post') }}" class="btn btn-primary">Selengkapnya</a>
      </div>
    @endfor
  </div>

  {{-- footer --}}
  @include('component.footer')

@endsection
