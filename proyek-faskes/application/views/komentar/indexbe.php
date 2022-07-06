<script>
    function hapusRumahsakit(pesan) {
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>
<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">DataTable Komentar</h3>
    </div>
    <div class="table-responsive p-3">
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                    <th>Username</th>
                    <th>Faskes</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
            <?php
            $no = 1;
            foreach ($faskes as $km) :
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $km['tanggal'] ?></td>
                        <td><?= $km['isi'] ?></td>
                        <td><?= $km['username'] ?></td>
                        <td><?= $km['fasilitas'] ?></td>
                        <td><?= $km['rating'] ?></td>
                        <td><a href="<?= base_url("komentar/delete/" . $km['id']) ?>" class="btn btn-danger btn-sm" onclick="return hapusRumahsakit('Apakah Anda yakin ingin menghapus komentar <?= $km['username']; ?>?')"><i class="fas fa-trash"></i> Hapus</a></td>
                    </tr>
            <?php
            endforeach;
            ?>
                </tbody>
        </table>
    </div>
</div>