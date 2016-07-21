@extends('admin.master')

@section('title')
  Pengumuman
@endsection
@section('content-wrapper')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 clearfix">
        <ol class="breadcrumb breadcrumb-arrow">
          <li class="active"><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> Pengumuman</a></li>
        </ol>
      </div>
    </div>
    <div class="title-page">
      <a href="{{ URL::route('pengumumanpost') }}" aria-label="Left Align" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Pengumuman Baru</a>
    </div>
    <div class="box box-sunflower">
      <table class="table table-hover">
        <thead>
          <th>Number</th>
          <th>Title</th>
          <th>Dipos oleh</th>
          <th>Tanggal</th>
          <th>action</th>
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
                <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span></button>
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              1
            </td>
            <td>
              Ipssum
            </td>
            <td>
              Admin2
            </td>
            <td>
              12 Sept 2016
            </td>
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
@endsection
