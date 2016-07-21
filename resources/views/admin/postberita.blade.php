@extends('admin.master')

@section('title')
  Post Berita
@endsection

@push('css')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endpush

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
            <form class="" action="index.html" method="post">
              <div class="form-group">
                <label for="title">Judul:</label>
                <input class="form-control" type="text" id="judul" name="judul" placeholder="judul">
              </div>
              <div class="form-group">
                <label for="title">Isi Berita:</label><br>
                <div id="summernote"></div>
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
  <script src="{{URL::asset('js/summernote.min.js')}}" charset="utf-8"></script>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
          ],
          height: 200
        });
    });
  </script>
@endpush
