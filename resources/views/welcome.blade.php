@extends('template.master')

@section('title halaman')
Halaman acounting
@endsection

@section('title main')
    Data Acounting
@endsection

@section('navbar-item1')  
All Data
@endsection
@section('navbar-link1',route('acounting.index'))

@section('navbar-item2','Tambah Data LPB')

@section('navbar-link2',route('acounting.tambahlpb'))
@section('content')
    <a href="#" class="btn btn-success">create new</a>
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
        @foreach ($acountings as $perlpbbm)
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
        @endforeach
    </table>
@endsection
