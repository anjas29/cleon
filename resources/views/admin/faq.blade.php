@extends('admin.master')

@section('title')
  FAQ
@endsection

@push('css')

@endpush

@section('content-wrapper')
  <div class="container-fluid">
    <h3>Frequently Asked Questions</h3>
    <div class="title-page">
      <a href="#" class="btn btn-primary" id="buatfaq-btn">Buat FAQ baru</a>
    </div>

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
                <button type="button" id="btn-edit" data-id="" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
                <button type="button" data-id="1" class="delete btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-md-6" id="buatfaq">
        <div class="box box-blue-jeans">
          <div class="box-header">
            Buat FAQ Baru
          </div>
          <form class="" action="index.html" method="post">
          <div class="container-fluid">
              <label for="">Pertanyaan</label>
              <input type="text" class="form-control" name="name" value="">
              <label for="">Jawaban</label>
              <textarea class="form-control" name="name" rows="8"></textarea>
          </div>
          <div class="box-footer">
            <input type="submit" class="btn btn-primary" name="name" value="simpan">
          </div>
          </form>
        </div>
      </div>

      <div class="col-md-6" id="editfaq">
        <div class="box box-mint">
          <div class="box-header">
            Edit FAQ Baru
          </div>
          <form class="" action="index.html" method="post">
          <div class="container-fluid">
              <label for="">Pertanyaan</label>
              <input type="text" class="form-control" name="name" value="">
              <label for="">Jawaban</label>
              <textarea class="form-control" name="name" rows="8"></textarea>
          </div>
          <div class="box-footer">
            <input type="submit" class="btn btn-info" name="name" value="simpan">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{--  Modal Konfirmasi Penghapusan --}}
  <div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <strong>Konfirmasi Penghapusan FAQ</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-body">
            Apakah anda yakin menghapus pertanyaan id-<span id="id"></span>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-danger">Ya</button>
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
  <script>
    $('#buatfaq').hide();
    $('#editfaq').hide();
    $('#buatfaq-btn').click(function() {
      $('#editfaq').slideUp();
      $('#buatfaq').slideDown();
    });
    $('#btn-edit').click(function() {
      $('#buatfaq').slideUp();
      $('#editfaq').slideDown('slow');
    });
    $(document).ready(function() {
      $('.delete').click(function() {
        var id = $(this).data('id');
        $('#id').text(id);
        $('.modal').modal();
      });
    });
  </script>
@endpush
