@extends('template.master')

@section('title halaman')
Halaman Pembelian
@endsection

@section('title main')
    Data Pembelian
@endsection

@section('navbar-item1')
Data Beli
@endsection
@section('link-navbar1','pembelian.index')
@section('navbar-item2','Data Pajak')

@section('content')
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No_LPB</th>
        <th>TGL_LPB</th>
        <th>NO_LPB2</th>
        <th>TGL_LPB2</th>
        <th>NM_BHN</th>
        <th>STN</th>
        <th>UNITB</th>
        <th>HSATUAN</th>
        <th>TOTAL</th>
        <th>KP</th>
        <th>NO_PO</th>
        <th>TGL_PO</th>
        <th>KET_VAL</th>
        <th>IMP</th>
        <th>KET</th>    
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
