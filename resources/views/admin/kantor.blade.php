@extends('admin.master')

@section('title', 'Manajemen Profil Kantor')

@section('content-wrapper')
  <div class="container-fluid">
    <h3><i class="fa fa-building-o"></i> Kantor</h3>
    <div class="row">
      <div class="col-lg-6">
        <div class="box box-blue-jeans">
          <div class="box-header">
            Profil Umum
          </div>
          <div class="container-fluid">
            <form action="#" method="post">
              <label for="nama">Kantor</label>
              <input type="text" class="form-control" name="name" value="">
              <label for="nama">Alamat</label>
              <textarea type="text" class="form-control" name="name" value=""></textarea>
              <label for="Hotline">Hotline</label>
              <input type="text" class="form-control" name="name" value="">
              <label for="Teknis">Teknis (Jam Kerja)</label>
              <input type="text" class="form-control" name="name" value="">
              <label for="SMS Service">SMS Service</label>
              <input type="text" class="form-control" name="name" value="">
              <br>
              <input type="submit" class = "btn btn-primary" name="name" value="Simpan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box box-blue-jeans">
          <div class="box-header">
            <i class="fa fa-life-ring"></i> Technical Support Contact
          </div>
            <table class="table">
              <thead>
                <th>Nomor HP</th>
                <th>Divisi</th>
                <th>Act</th>
              </thead>
              <tbody>
                <tr>
                  <td>085643938398</td>
                  <td>Technical Support</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" data-id="1" class="edit btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
                      <button type="button" data-id="1" class="btn btn-danger delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box box-mint">
            <div class="box-header">
              Menambah Technical Support
            </div>
              <table class="table">
                <thead>
                  <th>Nomor HP</th>
                  <th>Divisi</th>
                  <th>Act</th>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control" name="name" value=""></td>
                    <td>
                      <select class="form-control">
                        <option>Administrasi</option>
                        <option>Support</option>
                        <option>Dropping Voucher</option>
                        <option>Online Support</option>
                      </select>
                    </td>
                    <td><input type="submit" class="btn btn-info" name="name" value="Save"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
  {{--  Modal Konfirmasi Penghapusan --}}
  <div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <strong>Konfirmasi Penghapusan Kontak nomor</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-body">
            Apakah anda yakin menghapus Kontak nomor id-<span id="id"></span>?
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
        $('.btn.delete').click(function() {
          var id = $(this).data('id');
          $('#id').text(id);
          $('.modal').modal();
        });
      });
  </script>
@endpush
