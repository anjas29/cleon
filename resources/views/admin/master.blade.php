@extends('master')

@section('title', 'Beranda Admin')

@section('content')
  @include('admin.component.navbar')
  <div class="body-content">
    <div class="container-fluid">
        <section class="profil clearfix">
          <div class="dropdown col-md-4 col-lg-3">
            <a href="#"  style="position: relative" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <img src="{{URL::asset('img/profpic.jpg')}}" alt="" class="img-circle"/>
              <span>Administrator Jeemen</span>  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">Edit Profil</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>
        </section>
    </div>
    @yield('content-wrapper')
  </div>
@endsection

@push('javascript')
  <script type="text/javascript">
  var display = true;
    $('.btn-menu-toogle').click(function() {
      if ( display == true ) {
        $('.left-sidenav').animate({"width": 0, "overflow-x":"hidden"}, 250);
        $('.body-content').animate({"margin-left": 0}, 250);
        display = false;
      } else {
        $('.left-sidenav').animate({"width": 240}, 250);
        $('.body-content').animate({"margin-left": 240}, 250);
        display = true;
      }
    });

  </script>
@endpush
