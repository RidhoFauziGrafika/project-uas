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
        <h3 class="card-title p-1">DataTable User</h3>
    </div>
    <div class="table-responsive p-3">
        <table id="example" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Last Login</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                <?php
                if($this->session->userdata('role') != "public") {
                $no = 1;
                foreach ($user as $us) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $us['username'] ?></td>
                        <td><?= $us['email'] ?></td>
                        <td><?= $us['created_at'] ?></td>
                        <td><?= $us['last_login'] ?></td>
                        <td><?= $us['role'] ?></td>
                        <?php if ($us['role'] == 'public') { ?>
                        <td>
                            <a href="<?= base_url("index.php/User/edit/" . $us['id']) ?>" class="btn btn-warning btn-sm"><i class="d-block fas fa-edit"></i> Edit</a>
                            <a href="<?= base_url("index.php/User/delete/" . $us['id']) ?>" class="btn btn-danger btn-sm" onclick="return hapusRumahsakit('Apakah Anda yakin ingin menghapus data <?= $us['username']; ?>?')"><i class="d-block fas fa-trash" ></i> Hapus</a>
                        </td>
                        <?php } else {?>
                        <td>
                            <a href="<?= base_url("index.php/User/edit/" . $us['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        <?php } ?>
                    </tr>
                    <?php
                    endforeach; } else {
                        ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['created_at'] ?></td>
                                <td><?= $user['last_login'] ?></td>
                                <td><?= $user['role'] ?></td>
                                <?php if ($user['role'] == 'public') { ?>
                                <td>
                                    <a href="<?= base_url("index.php/User/edit/" . $user['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                                <?php } else {?>
                                <td>
                                    <a href="<?= base_url("index.php/User/edit/" . $user['id']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                <?php } ?>
                            </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
</div>