@extends('master')

@section('title')
  Beranda
@endsection

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
@endpush
@section('content')

  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    <div class="row">
      <img src="{{ URL::asset('img/header.jpg') }}" class="img-responsive" alt="" />
      <div class="alert alert-warning sunflower-dark" role="alert"><strong>UPDATE PAKET 5K dari 2 Jam menjadi 3 Jam</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h3 class="text-center">Pelayanan Kami</h3>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/cloud.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Fasilitas Lainnya</span>
          <p>
            Free 1 titik TV kabel jika jaringan yang dilewati melalu titik kabel internet JMN dan ada program kemitraan *2
          </p>
        </div>
      </div>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/modem.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Tidak Menggunakan Telepon</span>
          <p>
            Untuk dapat mengakses internet cleon, tidak memerlukan jaringan telepon namun memakai media wireless atau wifi (hotspot)
          </p>
        </div>
      </div>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/support.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Customer Service</span>
          <p>
            Layanan gangguan selama 24 jam melalu hotline, dan stand by selama jam kerja
          </p>
        </div>
      </div>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/wrench.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Instalasi Gratis</span>
          <p>
            Instalasi atau pemasangan perangkat gratis, dan cleon meminjamkan perangkat untuk digunakan pelanggan *1
          </p>
        </div>
      </div>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/group.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Penggunaan</span>
          <p>
            Dapat digunakan dimanapun selama dalam jaringan internet cleon, dan support berbagai device
          </p>
        </div>
      </div>
      <div class="col-sm-6 collation">
        <div class="left">
          <img src="{{ URL::asset('img/purse.png') }}" class="img-responsive">
        </div>
        <div class="right clearfix">
          <span class="title">Tersedia Banyak Paket</span>
          <p>
            Tersedia banyak pilihan paket seperti Volume Based (Kuota) serta Time Based (Waktu) dengan banyak pilihan harga sesuai kebutuhan
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- footer --}}
  @include('component.footer')

@endsection

@push('javascript')
  <script type="text/javascript">
  $(window).on('scroll', function() {
      var y_scroll_pos = window.pageYOffset;
      var scroll_pos_test = 200;             // set to whatever you want it to be

      if(y_scroll_pos > $('#first').offset().top) {
          $('#first').html('<hq>Slow</h1>');
      }
    });
  </script>
@endpush
