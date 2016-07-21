@extends('admin.master')

@section('title')
  Buat Pengumuman
@endsection

@section('content-wrapper')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 clearfix">
        <ol class="breadcrumb breadcrumb-arrow">
          <li><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> Pengumuman</a></li>
          <li class="active"><span><i class="glyphicon glyphicon-calendar"></i> Buat Pengumuman</span></li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="box box-sunflower">
          <div class="box-header">
            Post
          </div>
          <div class="container-fluid">
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="title">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" placeholder="judul">
              </div>
              <div class="form-group">
                <label for="title">Isi Berita:</label><br>
                <textarea class="form-control" name="isi" rows="8" cols="40"></textarea>
              </div>
              <input type="submit" class="btn btn-warning" value="Post Pengumuman">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
