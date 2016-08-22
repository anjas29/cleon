  @extends('admin.master')

@section('title')
  Header Halaman Utama
@endsection

@section('content-wrapper')
  <div class="container-fluid">
      <div class="box box-mint">
        <div class="box-header">
          <b>Header yang tampil sekarang : </b>
        </div>
`
          {{-- Gallery --}}
          @for($i=1; $i < 10; $i++)
            <div class="thumb--square">
              <img src="{{ URL::asset('img/header.jpg') }}">
              <span>Gambar</span>
              <a href="#" data-id="{{ $i }}" class="delete btn-danger btn left" ><i class="fa fa-trash-o"></i></a>`
            </div>

          @endfor

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

    <div class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <strong>Konfirmasi Penghapusan Gambar</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-body">
            Apakah anda yakin menghapus Gambar id-<span id="id"></span>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-danger">Ya</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @endsection

@push('javascript')
    <script type="text/javascript">
      $(document).ready(function() {
        $('.delete').click(function() {
          var id = $(this).data('id');
          var data = $(this).data('id');
          $('#id').text(data)
          $('.modal').modal();
        });
      });
    </script>
@endpush
