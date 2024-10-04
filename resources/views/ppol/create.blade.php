@extends('template.master')

@section('content')
<div class="container">
    <h2>Input Data PPOL</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('ppol.store') }}" method="POST">
        {{-- @csrf --}}
        <div class="form-group">
            <label for="NO_PO">No PO</label>
            <input type="text" class="form-control" id="NO_PO" name="NO_PO" required maxlength="11">
        </div>
        <div class="form-group">
            <label for="TGL_PO">Tanggal PO</label>
            <input type="date" class="form-control" id="TGL_PO" name="TGL_PO" required>
        </div>
        <div class="form-group">
            <label for="NO_SP">No SP</label>
            <input type="text" class="form-control" id="NO_SP" name="NO_SP" required maxlength="7">
        </div>
        <div class="form-group">
            <label for="TGL_SP">Tanggal SP</label>
            <input type="date" class="form-control" id="TGL_SP" name="TGL_SP" required>
        </div>
        <div class="form-group">
            <label for="NM_BHN">Nama Bahan</label>
            <input type="text" class="form-control" id="NM_BHN" name="NM_BHN" required maxlength="45">
        </div>
        <div class="form-group">
            <label for="STN">Satuan</label>
            <input type="text" class="form-control" id="STN" name="STN" required maxlength="3">
        </div>
        <div class="form-group">
            <label for="PESAN">Jumlah Pesan</label>
            <input type="number" class="form-control" id="PESAN" name="PESAN" required>
        </div>
        <div class="form-group">
            <label for="SATUAN">Satuan</label>
            <input type="number" class="form-control" id="SATUAN" name="SATUAN" required>
        </div>
        <div class="form-group">
            <label for="H_UNIT">Harga Satuan</label>
            <input type="number" class="form-control" id="H_UNIT" name="H_UNIT" required>
        </div>
        <div class="form-group">
            <label for="SISA">Sisa</label>
            <input type="number" class="form-control" id="SISA" name="SISA" required>
        </div>
        <div class="form-group">
            <label for="KODE_P">Kode P</label>
            <input type="text" class="form-control" id="KODE_P" name="KODE_P" required maxlength="3">
        </div>
        <div class="form-group">
            <label for="BG">BG</label>
            <input type="text" class="form-control" id="BG" name="BG" required maxlength="1">
        </div>
        <div class="form-group">
            <label for="KET">Keterangan</label>
            <input type="text" class="form-control" id="KET" name="KET" maxlength="254">
        </div>
        <div class="form-group">
            <label for="NO_SPH">No SPH</label>
            <input type="text" class="form-control" id="NO_SPH" name="NO_SPH" required maxlength="20">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
