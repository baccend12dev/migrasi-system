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
@section('navbar-link2', route('pembelian.create'))
@section('navbar-item3', 'Daftar Pembelian')
@section('navbar-link3', route('acounting.fakturpajak'))
@section('navbar-item4','Pembayaran')

@section('content')
    <a href="#form-input" class="btn btn-success">create new</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO_PO</th>
                <th>TGL_PO</th>	
                <th>NO_SP</th>	
                <th>TGL_SP</th>	
                <th>NM_BHN</th>	
                <th>STN	</th>
                <th>PESAN</th>	
                <th>SATUAN</th>	
                <th>H_UNIT</th>	
                <th>SISA</th>	
                <th>KODE_P</th>	
                <th>BG</th>	
                <th>KET</th>	
                <th>NO_SPH</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($ppols as $item)
            <tr>
                <td>{{ $item->NO_PO }}</td>
                <td>{{ $item->TGL_PO }}</td>
                <td>{{ $item->NO_SP }}</td>
                <td>{{ $item->TGL_SP }}</td>
                <td>{{ $item->NM_BHN }}</td>
                <td>{{ $item->STN }}</td>
                <td>{{ $item->PESAN }}</td>
                <td>{{ $item->SATUAN }}</td>
                <td>{{ $item->H_UNIT }}</td>
                <td>{{ $item->SISA }}</td>
                <td>{{ $item->KODE_P }}</td>
                <td>{{ $item->BG }}</td>
                <td>{{ $item->KET }}</td>
                <td>{{ $item->NO_SPH }}</td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection

@section('content2')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form start -->
    <form action="{{ route('pembelian.store') }}" method="post">
        @csrf
        <div class="row" id="form-input">
            <div class="col-md-6">
                <!-- Nomor PO -->
                <div class="form-group row">
                    <label for="NO_PO" class="col-sm-3 col-form-label">Nomor PO</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="NO_PO" name="NO_PO" required>
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
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate_lpb" name="TGL_PO" required/>
                            <div class="input-group-append" data-target="#reservationdate_lpb" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nomor SP -->
                <div class="form-group row">
                    <label for="NO_SP" class="col-sm-3 col-form-label">Nomor SP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="NO_SP" name="NO_SP" required>
                    </div>
                </div>
                <!-- Bahan -->
                <div class="form-group row">
                    <label for="NM_BHN" class="col-sm-3 col-form-label">BAHAN</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="NM_BHN" name="NM_BHN" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="STN" class="col-sm-3 col-form-label">Satuan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="STN" name="STN" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group d-flex align-items-center">
                    <label for="UNIT" class="col-sm-3 col-form-label" style="width: 100px;">JUMLAH UNIT</label>
                    <input type="number" class="form-control" id="UNIT" name="UNIT" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="SATUAN" class="col-sm-3 col-form-label" style="width: 100px;">HARGA /1</label>
                    <input type="number" step="0.01" class="form-control" id="SATUAN" name="SATUAN" required>
                </div>
                {{-- <div class="form-group d-flex align-items-center">
                    <label for="matauang" class="col-sm-3 col-form-label" style="width: 100px;">MATA UANG</label>
                    <input type="text" class="form-control" id="matauang" name="matauang" required>
                </div> --}}
                <div class="form-group d-flex align-items-center">
                    <label for="H_UNIT" class="col-sm-3 col-form-label" style="width: 100px;">TOTAL S</label>
                    <input type="text" class="form-control" id="H_UNIT" name="H_UNIT" required>
                </div>
                <div class="form-group d-flex align-items-center">
                    <label for="SISA" class="col-sm-3 col-form-label" style="width: 100px;">TOTAL</label>
                    <input type="number" step="0.01" class="form-control" id="SISA" name="SISA" required>
                </div>
                <div class="form-group row">
                    <label for="TGL_TERIMA" class="col-sm-3 col-form-label" style="width: 100px;">Tanggal Terima</label>
                    <div class="col-sm-8">
                        <div class="input-group date" id="reservationdate_terima" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate_terima" name="TGL_TERIMA" required/>
                            <div class="input-group-append" data-target="#reservationdate_terima" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection