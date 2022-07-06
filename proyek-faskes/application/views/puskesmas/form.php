<script>
    function hapusRumahsakit(pesan) {
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">Tambah Puskesmas</h3>
    </div>
    <div class="card-body">
        <?= form_open("puskesmas/insert") ?>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" maxlength="45" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control" maxlength="200" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label>
            <div class="col-8">
                <input id="latlong" name="latlong" placeholder="Masukkan Latlong" type="text" class="form-control" maxlength="40" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" minlength="10" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
            <div class="col-8">
                <select id="kecamatan" name="kecamatan" required="required" class="custom-select" required>
                    <option value="">Pilih Kecamatan</option>
                    <?php foreach ($kecamatan as $kcm) { ?>
                    <option value="<?= $kcm['id'] ?>"><?= $kcm['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website</label>
            <div class="col-8">
                <input id="website" name="website" placeholder="Masukkan Website" type="text" class="form-control" maxlength="45" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
            <div class="col-8">
                <input id="jumlah_dokter" name="jumlah_dokter" placeholder="Masukkan Jumlah Dokter" min="0" type="number" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
            <div class="col-8">
                <input id="jumlah_pegawai" name="jumlah_pegawai" placeholder="Masukkan Jumlah Pegawai" min="0" type="number" class="form-control" value="" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary" onclick="return hapusRumahsakit('Jika sudah, jangan lupa menambahkan foto di menu edit')">Submit</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>