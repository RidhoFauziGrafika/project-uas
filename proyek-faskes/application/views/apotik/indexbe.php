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
        <h3 class="card-title p-1">DataTable Apotik</h3>
    </div>
    <div class="table-responsive p-3">
        <a href="<?= base_url("apotik/form/") ?>" class="btn btn-primary btn-md mb-3">Tambah</a>
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
            foreach ($faskes as $ap) :
            ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $ap['nama'] ?></td>
                        <td><?= $ap['skor_rating'] ?></td>
                        <td>
                            <a href="<?= base_url("apotik/detailbe/" . $ap['id']) ?>" class="btn btn-success btn-sm"><i class="fas fa-info"></i> Detail</a>
                            <a href="<?= base_url("apotik/edit/" . $ap['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url("apotik/delete/" . $ap['id']) ?>" class="btn btn-danger btn-sm" onclick="return hapusRumahsakit('Apakah Anda yakin ingin menghapus data <?= $ap['nama']; ?>?')"><i class="fas fa-trash" ></i> Hapus</a>
                        </td>
                    </tr>
            <?php
            endforeach;
            ?>
                </tbody>
        </table>
    </div>
</div>