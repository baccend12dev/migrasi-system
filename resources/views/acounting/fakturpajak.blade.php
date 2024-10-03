@extends('template.master')

@section('title halaman')
    Halaman acounting
@endsection

@section('title main', 'Faktur Pajak Bahan Dll')
@section('title main2', 'Isi Faktur Pajak')


@section('navbar-item1')
    All Data
@endsection
@section('navbar-link1', route('acounting.index'))

@section('navbar-item2', 'Tambah Data LPB')
@section('navbar-link2', route('acounting.tambahlpb'))
@section('navbar-item3', 'Data Faktur')
@section('navbar-link3', route('acounting.fakturpajak'))
@section('navbar-item4', 'Pembayaran')
@section('navbar-link4', route('acounting.pembayaranlpb'))

@section('content')
    <a href="#form-input" class="btn btn-success">create new</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor LPB</th>
                <th>Tanggal lpb</th>
                <th>Nilai Faktur</th>
                <th>Pajak</th>
                <th>Nomor Faktur</th>
                <th>Tanggal Faktur</th>
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
            <div class="row" id="form-input">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomor_lpb">Nomor LPB</label>
                        <input type="text" class="form-control" id="nomor_lpb" placeholder="Enter Nomor lpb">
                    </div>
                    <div class="form-group">
                        <label>Tanggal LPB</label>
                        <div class="input-group date" id="reservationdate_lpb" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate_lpb" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pajak">Pajak</label>
                        <input type="text" class="form-control" id="pajak" placeholder="Enter Nomor PO">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Cetak Pajak</label>
                        <div class="input-group date" id="reservationdate_pajak" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate_pajak"
                                data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nilai_faktur">Nilai Faktur </label>
                        <input type="text" class="form-control" id="nilai_faktur" placeholder="Enter Nilai Faktur">
                    </div>
                    <div class="form-group">
                        <label for="nomor_faktur">Nomor Faktur</label>
                        <input type="text" class="form-control" id="nomor_faktur" placeholder="Enter Pajak">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Faktur</label>
                        <div class="input-group date" id="reservationdate_terima" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input"
                                data-target="#reservationdate" />
                            <div class="input-group-append" data-target="#reservationdate_terima"
                                data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        <!-- /.card-body -->
    </form>
    <!-- /.card -->
@endsection
