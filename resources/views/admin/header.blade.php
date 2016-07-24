@extends('admin.master')

@section('title')
  Header Halaman Utama
@endsection

@section('content-wrapper')
  <div class="container-fluid">
      <div class="box box-sunflower">
        <div class="box-header">
          <b>Header yang tampil sekarang : </b>
        </div>
        <img src="{{ URL::asset('img/header.jpg') }}" alt="" class="img-responsive"/>
      </div>
      <h4>Ubah header</h4>
      <form class="" action="index.html" method="post">
        <p>
          Ukuran header yang disarankan adalah 1241 x 387 pixel
        </p>
        <input type="file" name="name" value="">
        <input type="button" class="btn btn-info" name="name" value="Upload">
      </form>
    </div>
@endsection
