<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data PERLPBBM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Data PEMBELIAN BARANG</h1>

		<a href="{{ route('perlpbbms.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO_LPB</th>
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
                @foreach ($perlpbbms as $perlpbbm)
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
            </tbody>
        </table>
    </div>
</body>
</html>
