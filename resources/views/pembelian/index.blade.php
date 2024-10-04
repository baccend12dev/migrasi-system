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
{{-- @section('navbar-link3', route('acounting.fakturpajak')) --}}
@section('navbar-item4','Pembayaran')


@section('content')
<a href="#" class="btn btn-success">create new</a>
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
        @foreach($ppols as $item)
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
        @endforeach
    </table>
@endsection
