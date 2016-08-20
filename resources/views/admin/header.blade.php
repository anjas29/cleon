@extends('admin.master')

@section('title')
  Header Halaman Utama
@endsection

@section('content-wrapper')
  <div class="container-fluid">
      <div class="box">
        <div class="box-header">
          <b>Header yang tampil sekarang : </b>
        </div>

          {{-- Gallery --}}
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
            </div>
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
            </div>
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
            </div>
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
            </div>
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
            </div>
        </div>

        {{-- Form Tambah Header --}}
        <h4>Ubah header</h4>
        <div class="row">
          <div class="col-sm-12">
            <form class="" action="index.html" method="post">
              <p>
                <input type="file" name="name" value="">
              </p>
              <p>
                <i class="fa fa-exclamation-triangle"></i> Ukuran header yang disarankan adalah 1241 x 387 pixel

              </p>
              <input type="button" class="btn btn-info" name="name" value="Upload">
            </form>
          </div>
        </div>

    </div>


@endsection
