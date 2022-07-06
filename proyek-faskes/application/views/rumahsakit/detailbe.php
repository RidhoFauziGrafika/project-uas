<script>
    function hapusRumahsakit(pesan) {
        if (confirm(pesan)) {
            true;
        } else {
            false;
        }
    }
</script>
<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">DataTable Rumah sakit</h3>
    </div>
    <div class="table-responsive p-3">
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Latlong</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Skor Rating</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Kecamatan</th>
                    <th>Website</th>
                    <th>Jumlah Dokter</th>
                    <th>Jumlah Pegawai</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?= $faskes->id ?></td>
                    <td><?= $faskes->nama ?></td>
                    <td><?= $faskes->alamat ?></td>
                    <td><?= $faskes->latlong ?></td>
                    <td><?= $faskes->jenis ?></td>
                    <td><?= $faskes->deskripsi ?></td>
                    <td><?= $faskes->skor_rating ?></td>
                    <td><?= $faskes->foto1 ?></td>
                    <td><?= $faskes->foto2 ?></td>
                    <td><?= $faskes->foto3 ?></td>
                    <td><?= $faskes->kecamatan ?></td>
                    <td><?= $faskes->website ?></td>
                    <td><?= $faskes->jumlah_dokter ?></td>
                    <td><?= $faskes->jumlah_pegawai ?></td>

                </tr>
            </tbody>
        </table>
    </div>
</div>