@extends('admin.master')

@section('content-wrapper')
  <div class="container-fluid">
    <div class="title-page">
      <a href="#" id="addnew" data-toggle="modal" data-target="#formmodal" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add New User</a>
    </div>

    <div class="box box-blue-jeans-light">
      <div class="box-header">
        <i class="fa fa-user"></i> User List
      </div>
      <table class="table">
        <thead>
          <th>ID</th>
          <th>Nama</th>
          <th>Username</th>
          <th>Email</th>
          <th></th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Administrator Jeemen</td>
            <td>jeemen</td>
            <td>jeemen@mail.com</td>
            <td>
              <button data-id="1" class="delete btn btn-danger"><i class="fa fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  {{--  Modal add User--}}
  <div class="modal fade" id="formmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Tambah User Baru</h4>
        </div>
        <div class="modal-body">
          <form class="" action="index.html" method="post">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
            <div class="title-page">
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Daftarkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Edit User --}}

  {{--  Modal Konfirmasi Hapus User --}}
  <div id="hapusmodal" class="modal fade" tabindex="-1" role="dialog">
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
@endsection

@push('javascript')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.delete').click(function(event) {
        var id = $(this).data('id');
        $('#id').text(id);
        $('#hapusmodal').modal();
      });
    });
  </script>
@endpush
