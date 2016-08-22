@extends('admin.master')

@section('content-wrapper')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 clearfix">
        <ol class="breadcrumb breadcrumb-arrow">
          <li class="active"><a href="#"><i class="glyphicon glyphicon-list"></i> Berita</a></li>
        </ol>
      </div>
    </div>
    <div class="title-page">
      <a href="{{ URL::route('adminberitapost')}}" aria-label="Left Align" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Post Baru</a>
    </div>
    <div class="box box-blue-jeans">
      <table class="table table-hover">
        <thead>
          <th>
            #
          </th>
          <th>
            Title
          </th>
          <th>
            Dipos oleh
          </th>
          <th>
            tgl
          </th>
          <th>
            action
          </th>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              Lorem
            </td>
            <td>
              admin
            </td>
            <td>
              12 Sept 2016
            </td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></button>
                <a href="{{ URL::route('adminberitaedit', ['id' => 1]) }}" type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></a>
                <button type="button" class="btn btn-danger delete" data-id="1"><span class="glyphicon glyphicon-trash"></span></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <nav class="text-right">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <strong>Konfirmasi</strong><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
          Apakah anda yakin menghapus berita id-<span id="id"></span>?
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
        var data = $(this).data('id');
        $('#id').text(data)
        $('.modal').modal();
      });
    });
  </script>
@endpush
