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
        <h3 class="card-title p-1">DataTable Klinik Gigi</h3>
    </div>
    <div class="table-responsive p-3">
        <a href="<?= base_url("klinikgigi/form/") ?>" class="btn btn-primary btn-md mb-3">Tambah</a>
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
            <?php
            $no = 1;
            foreach ($faskes as $kg) :
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $kg['nama'] ?></td>
                        <td><?= $kg['skor_rating'] ?></td>
                        <td>
                            <a href="<?= base_url("klinikgigi/detailbe/" . $kg['id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-info"></i> Detail</a>
                            <a href="<?= base_url("klinikgigi/edit/" . $kg['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url("klinikgigi/delete/" . $kg['id']) ?>" class="btn btn-danger btn-sm" onclick="return hapusRumahsakit('Apakah Anda yakin ingin menghapus data <?= $kg['nama']; ?>?')"><i class="fas fa-trash" ></i> Hapus</a>
                        </td>
                    </tr>
            <?php
            endforeach;
            ?>
                </tbody>
        </table>
    </div>
</div>