@extends('template.master')

@section('title halaman')
Halaman acounting
@endsection

@section('title main','Pembayaran Dll')
@section('title main2','Isi Pembayaran')

@section('navbar-item1')  
All Data
@endsection
@section('navbar-link1',route('acounting.index'))

@section('navbar-item2','Tambah Data LPB')
@section('navbar-link2',route('acounting.tambahlpb'))
@section('navbar-item3','Data Faktur')
@section('navbar-link3',route('acounting.fakturpajak'))
@section('navbar-item4','Pembayaran')
@section('navbar-link4',route('acounting.pembayaranlpb'))

@section('content')
    <a href="#form-input" class="btn btn-success">create new</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nomor LPB</th>
        <th>Tanggal lpb</th>
        <th>Nilai Faktur</th>
        <th>Pajak</th>
        <th>Materai</th>
        <th>Total</th>
        <th>No Bukti Kas</th>
        <th>Tanggal Bukti Kas</th>
        <th>No Kwitansi</th>
        <th>No Faktur Pajak</th>
        <th>Tanggal Cetak Pajak</th>
        
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
        @endforeach --}}
    </table>
@endsection
@section('content2')
    <!-- form start -->
    <form>
      <div class="card-body" id="form-input">
        <div class="form-group">
          <label for="nomor_lpb">Nomor LPB</label>
          <input type="text" class="form-control" id="nomor_lpb" placeholder="Enter Nomor lpb">
        </div>
        <div class="form-group">
          <label>Tanggal LPB</label>
            <div class="input-group date" id="reservationdate_lpb" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                <div class="input-group-append" data-target="#reservationdate_lpb" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="nilai_faktur">Nilai Faktur   </label>
          <input type="text" class="form-control" id="nilai_faktur" placeholder="Enter Nilai Faktur">
        </div>
        <div class="form-group">
            <label for="pajak">Pajak</label>
            <input type="text" class="form-control" id="pajak" placeholder="Enter Pajak">
        </div>
        <div class="form-group">
            <label for="materai">Materai</label>
            <input type="text" class="form-control" id="materai" placeholder="Enter Materai">
          </div>
          <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" placeholder="Enter Total">
          </div>
          <div class="form-group">
            <label for="no_kas">Nomor Bukti Kas</label>
            <input type="text" class="form-control" id="no_kas" placeholder="Enter Bukti Kas">
          </div>
        <div class="form-group">
          <label>Tanggal Bukti Kas</label>
             <div class="input-group date" id="reservationdate_buktikas" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                <div class="input-group-append" data-target="#reservationdate_buktikas" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="no_kwitansi">Nomor Kwitansi</label>
            <input type="text" class="form-control" id="no_kwitansi" placeholder="Enter Nomor Kwitansi">
          </div>
          <div class="form-group">
            <label for="no_pajak">Nomor Faktur Pajak</label>
            <input type="text" class="form-control" id="no_pajak" placeholder="Enter Faktur Pajak">
          </div>
        <div class="form-group">
            <label>Tanggal Cetak Pajak</label>
              <div class="input-group date" id="reservationdate_pajak" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate_pajak" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
@endsection