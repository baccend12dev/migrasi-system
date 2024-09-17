<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data PERLPBBM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Tambah Data PERLPBBM</h1>

        <form action="{{ route('perlpbbms.store') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="NO_LPB">Nomor LPB</label>
                <input type="text" class="form-control" id="NO_LPB" name="NO_LPB" required>
            </div>
            <div class="form-group">
                <label for="TGL_LPB">Tanggal LPB</label>
                <input type="date" class="form-control" id="TGL_LPB" name="TGL_LPB" required>
            </div>
            <!-- Tambahkan input lain sesuai kebutuhan -->
            <div class="form-group">
                <label for="NM_BHN">Nama Bahan</label>
                <input type="text" class="form-control" id="NM_BHN" name="NM_BHN">
            </div>
            <div class="form-group">
                <label for="STN">Satuan</label>
                <input type="text" class="form-control" id="STN" name="STN">
            </div>
            <div class="form-group">
                <label for="UNITB">Jumlah Unit</label>
                <input type="text" class="form-control" id="UNITB" name="UNITB">
            </div>
            <div class="form-group">
                <label for="HSATUAN">Harga per Unit</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" class="form-control" id="HSATUAN" name="HSATUAN">
                </div>
            </div>

            <!-- <div class="form-group">
                <label for="STN">Total</label>
                <input type="text" class="form-control" id="Total" name="STN">
            </div> -->
            <div class="form-group">
                <label for="KP">KP</label>
                <input type="text" class="form-control" id="KP" name="KP">
            </div>
            <div class="form-group">
                <label for="NO_PO">Nomor PO</label>
                <input type="text" class="form-control" id="NO_PO" name="NO_PO">
            </div>
            <div class="form-group">
                <label for="TGL_PO">Tanggal PO</label>
                <input type="date" class="form-control" id="TGL_PO" name="TGL_PO">
            </div>
            <div class="form-group">
                <label for="KET_VAL">Keterangan Val</label>
                <input type="text" class="form-control" id="KET_VAL" name="KET_VAL">
            </div>
            <div class="form-group">
                <label for="IMP">IMP</label>
                <input type="text" class="form-control" id="IMP" name="IMP">
            </div>
            <div class="form-group">
                <label for="KET">KETERANGAN</label>
                <input type="text" class="form-control" id="KET" name="KET">
            </div>
            <!-- Tambahkan input lain sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
