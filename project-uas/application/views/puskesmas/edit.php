<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">Edit Puskesmas</h3>
    </div>
    <div class="card-body">
        <?= form_open("Puskesmas/update/$faskes->id") ?>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" maxlength="45" value="<?= $faskes->nama ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
                <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control" maxlength="200" value="<?= $faskes->alamat ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="latlong" class="col-4 col-form-label">Latlong</label>
            <div class="col-8">
                <input id="latlong" name="latlong" placeholder="Masukkan Latlong" type="text" class="form-control" maxlength="40" value="<?= $faskes->latlong ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" minlength="10" required><?= $faskes->deskripsi ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
            <div class="col-8">
                <select id="kecamatan" name="kecamatan" required="required" class="custom-select">

                    <option value="1" <?php if ($faskes->kecamatan == "Beji") {
                                            echo 'selected';
                                        } ?>>Beji</option>
                    <option value="2" <?php if ($faskes->kecamatan == "Pancoran Mas") {
                                            echo 'selected';
                                        } ?>>Pancoran Mas</option>
                    <option value="3" <?php if ($faskes->kecamatan == "Bojongsari") {
                                            echo 'selected';
                                        } ?>>Bojongsari</option>
                    <option value="4" <?php if ($faskes->kecamatan == "Cilodong") {
                                            echo 'selected';
                                        } ?>>Cilodong</option>
                    <option value="5" <?php if ($faskes->kecamatan == "Cimanggis") {
                                            echo 'selected';
                                        } ?>>Cimanggis</option>
                    <option value="6" <?php if ($faskes->kecamatan == "Cinere") {
                                            echo 'selected';
                                        } ?>>Cinere</option>
                    <option value="7" <?php if ($faskes->kecamatan == "Cipayung") {
                                            echo 'selected';
                                        } ?>>Cipayung</option>
                    <option value="8" <?php if ($faskes->kecamatan == "Limo") {
                                            echo 'selected';
                                        } ?>>Limo</option>
                    <option value="9" <?php if ($faskes->kecamatan == "Sawangan") {
                                            echo 'selected';
                                        } ?>>Sawangan</option>
                    <option value="10" <?php if ($faskes->kecamatan == "Sukmajaya") {
                                            echo 'selected';
                                        } ?>>Sukmajaya</option>
                    <option value="11" <?php if ($faskes->kecamatan == "Tapos") {
                                            echo 'selected';
                                        } ?>>Tapos</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website</label>
            <div class="col-8">
                <input id="website" name="website" placeholder="Masukkan Website" type="text" class="form-control" maxlength="45" value="<?= $faskes->website ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
            <div class="col-8">
                <input id="jumlah_dokter" name="jumlah_dokter" placeholder="Masukkan Jumlah Dokter" min="0" type="number" class="form-control" value="<?= $faskes->jumlah_dokter ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
            <div class="col-8">
                <input id="jumlah_pegawai" name="jumlah_pegawai" placeholder="Masukkan Jumlah Pegawai" min="0" type="number" class="form-control" value="<?= $faskes->jumlah_pegawai ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">Edit Foto Puskesmas</h3>
    </div>
    <div class="card-body">
        <?php 
            $arrayFoto = array('foto1' => $faskes->foto1, 'foto2' => $faskes->foto2, 'foto3' => $faskes->foto3);
            $i = 0;
            foreach ($arrayFoto as $foto => $val) {
                $i++;
                $filegambar = base_url('uploads/'.strtolower(str_replace(' ', '', $faskes->jenis)).'/'.strtolower(str_replace(' ', '', $faskes->nama)).'/'.$val);
                $array = get_headers($filegambar);
                $string = $array[0];
                if(strpos($string, "200")) {
        ?>
        <?= form_open_multipart("Puskesmas/upload") ?>
                <div class="form-group row">
                    <label for="<?= $foto ?>" class="col-4 col-form-label"><?= ucfirst($foto) ?></label>
                    <div class="col-8">
                        <img class="w-25" src="<?= $filegambar ?>" alt="">
                        <input id="id" name="id" type="hidden" value="<?= $faskes->id ?>">
                        <input id="listfoto" name="listfoto" type="hidden" value="<?= $foto ?>">
                        <input id="path" name="path" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->nama)) ?>">
                        <input id="jenisfoto" name="jenisfoto" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->jenis)) ?>">
                        <input id="namalama" name="namalama" type="hidden" value="<?= $val ?>">
                        <input id="namafoto" name="namafoto" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->nama)).'0'.$i ?>">
                        <input id="<?= $foto ?>" name="<?= $foto ?>" placeholder="Masukkan <?= $val ?>" type="file" class="form-control" maxlength="40">
                    </div>
                </div>
                <?php } else { ?>
                <?= form_open_multipart("Puskesmas/upload") ?>
                    <div class="form-group row">
                        <label for="<?= $foto ?>" class="col-4 col-form-label"><?= ucfirst($foto) ?></label>
                        <div class="col-8">
                            <img class="w-25" src="<?= base_url('uploads/No_Image_Available.jpg') ?>" alt="">
                            <input id="id" name="id" type="hidden" value="<?= $faskes->id ?>">
                            <input id="listfoto" name="listfoto" type="hidden" value="<?= $foto ?>">
                            <input id="path" name="path" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->nama)) ?>">
                            <input id="jenisfoto" name="jenisfoto" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->jenis)) ?>">
                            <input id="namalama" name="namalama" type="hidden" value="<?= $val ?>">
                            <input id="namafoto" name="namafoto" type="hidden" value="<?= strtolower(str_replace(' ', '', $faskes->nama)).'0'.$i ?>">
                            <input id="<?= $foto ?>" name="<?= $foto ?>" placeholder="Masukkan <?= $val ?>" type="file" class="form-control" maxlength="40">
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        <?= form_close(); ?>
        <?php } ?>
    </div>
</div>