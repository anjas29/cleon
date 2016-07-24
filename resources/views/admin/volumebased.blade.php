@extends('admin.master')

@section('title')
  Paket Dasar Volume
@endsection

@section('content-wrapper')
  <div class="container-fluid">
    <div class="box box-mint">
      <table class="table table-hover table-striped">
        <tbody>
          <tr>
            <td colspan="5%" align="center" valign="center" nowrap="nowrap" width="30%"><strong>TIME BASED</strong></td>
          </tr>
          <tr>
            <td style="text-align: center;" valign="bottom" nowrap="nowrap"><strong>PAKET</strong></td>
            <td style="text-align: center;" valign="bottom" nowrap="nowrap"><strong>HARGA</strong></td>
            <td style="text-align: center;" valign="bottom" nowrap="nowrap"><strong>AKTIF</strong></td>
            <td style="text-align: center;" valign="bottom" nowrap="nowrap"><strong>QUOTA</strong></td>
            <td style="text-align: center;" valign="bottom" nowrap="nowrap"><strong>SPEED</strong></td>
          </tr>
          <tr>
            <td valign="bottom" nowrap="nowrap">3 Jam</td>
            <td valign="bottom" nowrap="nowrap">5.000</td>
            <td valign="bottom" nowrap="nowrap">10 Hari</td>
            <td valign="bottom" nowrap="nowrap">Unlimited</td>
            <td valign="bottom" nowrap="nowrap">Up to 1 Mbps</td>
          </tr>
          <tr>
            <td valign="bottom" nowrap="nowrap">5 Jam</td>
            <td valign="bottom" nowrap="nowrap">10.000</td>
            <td valign="bottom" nowrap="nowrap">10 Hari</td>
            <td valign="bottom" nowrap="nowrap">Unlimited</td>
            <td valign="bottom" nowrap="nowrap">Up to 1 Mbps</td>
          </tr>
          <tr>
            <td valign="bottom" nowrap="nowrap">10 Jam</td>
            <td valign="bottom" nowrap="nowrap">15.000</td>
            <td valign="bottom" nowrap="nowrap">20 Hari</td>
            <td valign="bottom" nowrap="nowrap">Unlimited</td>
            <td valign="bottom" nowrap="nowrap">Up to 1 Mbps</td>
          </tr>
          <tr>
            <td valign="bottom" nowrap="nowrap">24 Jam</td>
            <td valign="bottom" nowrap="nowrap">30.000</td>
            <td valign="bottom" nowrap="nowrap">30 Hari</td>
            <td valign="bottom" nowrap="nowrap">Unlimited</td>
            <td valign="bottom" nowrap="nowrap">Up to 1 Mbps</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="box box-mint">
      <div class="box-header">
        Tambah Paket Waktu
      </div>
      <table class="table">
        <form class="" action="index.html" method="post">
          <tr>
            <td>
              <label>Paket</label>
              <input type="text" class="form-control" name="name" value="">
            </td>
            <td>
              <label>Harga</label>
              <input type="text" class="form-control" name="name" value="">
            </td>
            <td>
              <label>Quota</label>
              <input type="text" class="form-control" name="name" value="">
            </td>
            <td>
              <label>Aktif</label>
              <input type="text" class="form-control" name="name" value="">
            </td>
            <td>
              <label>Speed</label>
              <input type="text" class="form-control" name="name" value="">
            </td>
          </tr>
          <tr>
            <td colspan=5>
              <button type="submit" name="button" class="btn btn-info">Tambah</button>
            </td>
          </tr>
        </form>
      </table>
    </div>
  </div>
@endsection
