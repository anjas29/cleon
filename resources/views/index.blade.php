@extends('master')

@section('title')
  Beranda
@endsection

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider-dots.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/css/unslider.css" media="screen" title="no title" charset="utf-8">
@endpush
@section('content')

  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    <div class="row">
      <div class="banner">
          <ul>
            <li><img class="img-responsive" src="{{ URL::asset('img/header.jpg') }}" alt="" /></li>
            <li><img class="img-responsive" src="{{ URL::asset('img/header.jpg') }}" alt="" /></li>
            <li><img class="img-responsive" src="{{ URL::asset('img/header.jpg') }}" alt="" /></li>
           </ul>
      </div>

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

  {{-- Buton Flying --}}
  <a id="fling" class="circle-btn aqua-dark" data-toggle="modal" data-target="#pengumuman" data-placement="top" title="Pengumuman"><i class="fa fa-bell"></i></a>
  {{--  Modal Pengumuman --}}
  <div class="modal fade" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="pengumuman">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Pengumuman</h4>
        </div>
        <div class="modal-body">
          UPDATE PAKET 5K dari 2 Jam menjadi 3 Jam
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  {{-- footer --}}
  @include('component.footer')

@endsection

@push('javascript')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#fling').addClass('animate-out');
      $('#pengumuman').modal();
      $('.modal').on('show.bs.modal', function (e) {
        $('#fling').removeClass('animate-in');
        $('#fling').addClass('animate-out');
      });
      $('.modal').on('hide.bs.modal', function (e) {
        $('#fling').removeClass('animate-out');
        $('#fling').addClass('animate-in');
      });
      $('#fling').tooltip();
      $('.banner').unslider({
        autoplay:true
        // arrows: false
      });
    });
  </script>
@endpush
