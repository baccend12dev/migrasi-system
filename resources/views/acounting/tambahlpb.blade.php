@extends('template.master')

@section('title halaman')
Halaman acounting
@endsection

@section('title main','Data LPB')
@section('title main2','Form Tambah Data')


@section('navbar-item1')  
All Data
@endsection
@section('navbar-link1',route('acounting.index'))

@section('navbar-item2','Tambah Data LPB')
@section('navbar-link2',route('acounting.tambahlpb'))
@section('navbar-item3','Data Faktur')
@section('navbar-link3',route('acounting.fakturpajak'))


@section('content')
    <a href="#form-input" class="btn btn-success">create new</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nomor LPB</th>
        <th>Tanggal LPB</th>
        <th>Nomor Terima</th>
        <th>Tanggal Terima</th>
        <th>Nomor PO</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Perkiraan</th>
        <th>Ket Valas</th>
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
      <div class="card-body" id="form-input">
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor LPB</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nomor LPB">
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
          <label for="NO_TERIMA">Nomor Terima</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Nomor terima">
        </div>
        <div class="form-group">
          <label>Tanggal Terima</label>
            <div class="input-group date" id="reservationdate_terima" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                <div class="input-group-append" data-target="#reservationdate_terima" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="NO_PO">Nomor PO</label>
          <input type="text" class="form-control" id="NO_PO" placeholder="Enter Nomor PO">
        </div>
        <div class="form-group">
          <label for="Nama_Barang">Nama Barang</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Nama Barang">
        </div>
        <div class="form-group">
          <label for="satuan">Satuan</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Satuan">
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Jumlah">
        </div>
        <div class="form-group">
          <label for="harga_satuan">Harga Satuan</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Harga Satuan">
        </div>
        <div class="form-group">
          <label for="perkiraan">Perkiraan</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Perkiraan">
        </div>
        <div class="form-group">
          <label for="ket_valas">Ket Valas</label>
          <input type="text" class="form-control" id="NO_TERIMA" placeholder="Enter Ket Valas">
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