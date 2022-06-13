@extends('layout.default')
@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Customer<small></small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Customer <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                        <th class="column-title">No </th>
                      <th class="column-title">Tanggal Oreder </th>
                      <th class="column-title">Status Pengirirman </th>
                      <th class="column-title">Alamat Penerima </th>
                      <th class="column-title">Nama Penerima </th>
                      <th class="column-title">Nomor Telepon </th>
                      <th class="column-title">Id Customer </th>
                      <th class="column-title">Id Pegawai </th>

                      @foreach ($pengiriman as $dm)

                          <tbody>
                            <td>{{ $dm->id}}</td>
                            <td>{{ $dm->tanggalorder}}</td>
                            <td>{{ $dm->statuspengiriman}}</td>
                            <td>{{ $dm->alamatpenerima}}</td>
                            <td>{{ $dm->namapenerima}}</td>
                            <td>{{ $dm->notelponpenerima}}</td>
                            <td>{{ $dm->idcustomer}}</td>
                            <td>{{ $dm->idpegawai}}</td>
                          </tbody>
                      @endforeach
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                      </th>
                    </tr>
                  </thead>

                </table>
              </div>
                      
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection