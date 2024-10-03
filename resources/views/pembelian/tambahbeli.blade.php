@extends('template.master')

@section('title halaman')
Halaman Pembelian
@endsection

@section('title main')
    Data Pembelian
@endsection

@section('navbar-item1','Data Beli')
@section('navbar-link1',route('pembelian.index'))
@section('navbar-item2','Isi Pembelian')
@section('navbar-link2', route('pembelian.tambahbeli'))
@section('navbar-item3', 'Daftar Pembelian')
@section('navbar-link3', route('acounting.fakturpajak'))
@section('navbar-item4','Pembayaran')

@section('content')
    <a href="#form-input" class="btn btn-success">create new</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor PO</th>
                <th>Tanggal PO</th>
                <th>Nomor SP</th>
                <th>BAHAN</th>
                <th>Satuan</th>
                <th>UNIT</th>
                <th>HARGA</th>
                <th>MATA UANG</th>
                <th>TOTAL</th>
                <th>TANGGAL KIRIM</th>
                <th>WAKTU KIRIM</th>
                <th>NOTE</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($acountings as $perlpbbm)
        <tr>
            <td>{{ $perlpbbm->NO_LPB }}</td>
            <td>{{ $perlpbbm->TGL_LPB }}</td>
            <td>{{ $perlpbbm->NO_LPB2 }}</td>
            <td>{{ $perlpbbm->TGL_LPB2 }}</td>
            <td>{{ $perlpbbm->NM_BHN }}</td>
            <td>{{ $perlpbbm->STN }}</td>
            <td>{{ $perlpbbm->UNITB }}</td>
            <td>{{ $perlpbbm->HSATUAN }}</td>
            <td>{{ $perlpbbm->TOTAL }}</td>
            <td>{{ $perlpbbm->KP }}</td>
            <td>{{ $perlpbbm->NO_PO }}</td>
            <td>{{ $perlpbbm->TGL_PO }}</td>
            <td>{{ $perlpbbm->KET_VAL }}</td>
            <td>{{ $perlpbbm->IMP }}</td>
            <td>{{ $perlpbbm->KET }}</td>
        </tr>
        @endforeach --}}
    </table>
@endsection
@section('content2')
    <!-- form start -->
    <form>
            <div class="row" id="form-input">
                <div class="col-md-6">
                    <!-- Nomor PO -->
                    <div class="form-group row">
                        <label for="NO_PO" class="col-sm-3 col-form-label">Nomor PO</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NO_PO" placeholder="">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" id="kode_dropdown">
                                <option>Pilih Kode</option>
                                <!-- Add your options here -->
                            </select>
                        </div>
                    </div>
                
                    <!-- Tanggal PO -->
                    <div class="form-group row">
                        <label for="TGL_PO" class="col-sm-3 col-form-label">Tanggal PO</label>
                        <div class="col-sm-8">
                            <div class="input-group date" id="reservationdate_lpb" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate_lpb" />
                                <div class="input-group-append" data-target="#reservationdate_lpb" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Nomor SP -->
                    <div class="form-group row">
                        <label for="NO_TERIMA" class="col-sm-3 col-form-label">Nomor SP</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Nomor terima">
                        </div>
                    </div>
                
                    <!-- Bahan -->
                    <div class="form-group row">
                        <label for="NO_PO_BAHAN" class="col-sm-3 col-form-label">BAHAN</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="NO_PO_BAHAN" placeholder="Enter Nomor PO">
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="satuan" class="col-sm-3 col-form-label" >Satuan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="satuan" placeholder="Enter Satuan">
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                          <div class="form-group d-flex align-items-center">
                            <label for="unit" class="col-sm-3 col-form-label" style="width: 100px;">UNIT</label>
                            <input type="text" class="form-control" id="unit" placeholder="Enter Unit">
                          </div>
                        <div class="form-group d-flex align-items-center">
                            <label for="harga" class="col-sm-3 col-form-label" style="width: 100px;">HARGA</label>
                            <input type="text" class="form-control" id="harga" placeholder="Enter Harga">
                        </div>
                            <div class="form-group d-flex align-items-center">
                              <label for="matauang" class="col-sm-3 col-form-label" style="width: 100px;">MATA UANG</label>
                              <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter mata uang">
                          </div>
                          <div class="form-group d-flex align-items-center">
                            <label for="total"  class="col-sm-3 col-form-label" style="width: 100px;">TOTAL</label>
                            <input type="text" class="form-control" id=total" placeholder="Enter total">
                        </div>
                      <div class="form-group row">
                        <label for="TGL_PO" class="col-sm-3 col-form-label" style="width: 100px;">Tanggal Terima</label>
                        <div class="col-sm-8">
                            <div class="input-group date" id="reservationdate_terima" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate_terima" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        <!-- /.card-body -->


    </form>
    <!-- /.card -->
@endsection
