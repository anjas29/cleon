@extends('master')

@section('title', 'Beranda Admin')

@section('content')
  @include('admin.component.navbar')
  <div class="body-content">
    <div class="container-fluid">
      <h3 class="title-page"><a href="#" class="btn btn-menu-toogle"><span class="glyphicon glyphicon-menu-hamburger"></span></a> <span class="glyphicon glyphicon-home"></span> Dashboard</h3>

      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="icon">
              <i><span class="glyphicon glyphicon-bullhorn"></span></i>
            </div>
            <div class="infobox">
              <div class="info">
                Pengumuman
              </div>
              <div class="sub-info">
                100
              </div>
              <a href="#">Lihat Semua</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="icon">
              <i><span class="glyphicon glyphicon-th-list"></span></i>
            </div>
            <div class="infobox">
              <div class="info">
                Berita
              </div>
              <div class="sub-info">
                100
              </div>
              <a href="#">Lihat Semua</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="icon">
              <i><span class="glyphicon glyphicon-question-sign"></span></i>
            </div>
            <div class="infobox">
              <div class="info">
                Pertanyaan Belum Terjawab
              </div>
              <div class="sub-info">
                100
              </div>
              <a href="#">Lihat Semua</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="icon">
              <i><span class="glyphicon glyphicon-user"></span></i>
            </div>
            <div class="infobox">
              <div class="info">
                Administrator
              </div>
              <div class="sub-info">
                100
              </div>
              <a href="#">Lihat Semua</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <span class="glyphicon glyphicon-bullhorn"></span> Pengumuman Terbaru
            </div>
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="box-footer text-right">
              <a href="#">Menu Post</a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <span class="glyphicon glyphicon-th-list"></span> Berita Terbaru
            </div>
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="box-footer text-right">
              <a href="#">Menu Post</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('javascript')
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
@endsection
