@extends('admin.master')

@section('title')
  Post Berita
@endsection


@section('content-wrapper')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 clearfix">
        <ol class="breadcrumb breadcrumb-arrow">
          <li><a href="#"><i class="glyphicon glyphicon-home"></i> Berita</a></li>
          <li class="active"><span><i class="glyphicon glyphicon-calendar"></i> Buat Berita</span></li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="box box-mint">
          <div class="box-header">
            Post
          </div>
          <div class="container-fluid">

            <form class="" action="http://localhost/cleon/public/admin/berita/post" method="post">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="title">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" placeholder="judul">
              </div>
              <div class="form-group">
                <label for="title">Isi Berita:</label><br>
                <textarea name="isi" rows="10" cols="40"></textarea>
              </div>
              <input type="submit" class="btn btn-info" value="Post Berita">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('javascript')
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    tinymce.init({
      selector:'textarea'
    });
  </script>
@endpush
