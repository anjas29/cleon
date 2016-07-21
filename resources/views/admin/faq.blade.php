@extends('admin.master')

@section('title')
  FAQ
@endsection

@push('css')

@endpush

@section('content-wrapper')
  <div class="container-fluid">
    <h3>Frequently Asked Questions</h3>
    <div class="box box-blue-jeans">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Pertanyaan</th>
          <th>Jawaban</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Gimana cara menggunakan VPN?</td>
            <td>Lorem ipsum dolor sit amer....</td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></button>
                <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
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
