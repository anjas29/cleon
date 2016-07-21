@extends('admin.master')

@section('content-wrapper')
  <div class="container-fluid">
    <h3 class="title-page"> <span class="glyphicon glyphicon-home"></span> Dashboard</h3>

    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="card">
          <div class="icon sunflower-dark">
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
          <div class="icon grass-dark">
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
          <div class="icon aqua-dark">
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
          <div class="icon bittersweet">
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
        <div class="box box-sunflower-light">
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
            <a href="#" aria-label="Left Align" class="btn sunflower-dark">Semua Pengumuman</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="box box-blue-jeans-light">
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
            <a href="#" aria-label="Left Align" class="btn btn-primary">Menu Post</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
