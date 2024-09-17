@extends('template.master')

@section('judul konten')
Halaman Accounting 
@endsection

@section('main')
    Data acounting
@endsection

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
      <tr>
        <td>Trident</td>
        <td>07/07/2020
        </td>
        <td>Win 95+</td>
        <td> 07/07/2020</td>
        <td>X</td>
        <td>Trident</td>
        <td>12
        </td>
        <td>500000</td>
        <td> 4</td>
        <td>X</td>
        <td>Trident</td>
        <td>12
        </td>
        <td>500000</td>
        <td> 4</td>
        <td>X</td>
      </tr>
      
      
    </table>
@endsection

@section('script')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection