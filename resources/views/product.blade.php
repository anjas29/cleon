@extends('master')

@section('title', 'Produk dan Paket')

@push('css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" media="screen" charset="utf-8">
@endpush

@section('content')
  {{-- header --}}
  @include('component.navbar')

  <div class="container">
    <h3>Produk</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="panel">
          <div class="tabbable clearfix">
            <ul id="myTab1" class="nav nav-tabs">
              <li class=""><a href="#home3" data-toggle="tab">Time Based</a></li>
              <li class="active"><a href="#profile3" data-toggle="tab">Volume Based</a></li>
              <li><a href="#myTabDrop3" data-toggle="tab">Unlimited</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade" id="home3">
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
              <div class="tab-pane fade active in" id="profile3">
                <table class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="5%" align="center" valign="center" nowrap="nowrap" width="30%"><strong>VOLUME BASED</strong></td>
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
              <div class="tab-pane fade" id="myTabDrop3">
                <table class="table table-hover table-striped">
                  <tbody>
                    <tr>
                      <td colspan="5%" align="center" valign="center" nowrap="nowrap" width="30%"><strong>Unlimited</strong></td>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- footer --}}
  @include('component.footer')
@endsection
