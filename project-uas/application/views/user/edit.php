<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
    <div class="card-header">
        <h3 class="card-title p-1">Edit User</h3>
    </div>
    <div class="card-body">
        <?= form_open("user/update/".$user['id']) ?>
        <div class="form-group row">
            <label for="username" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="username" name="username" placeholder="Masukkan Nama" type="text" class="form-control" maxlength="45" value="<?= $user['username'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control" maxlength="200" value="<?= $user['email'] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="password1" class="col-4 col-form-label">Password Baru</label>
            <div class="col-8">
                <input id="password1" name="password1" placeholder="Masukkan Password Baru" type="password" class="form-control" maxlength="40" value="">
                <div class="input-group-append">
                    <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="password2" class="col-4 col-form-label">Konfirmasi Password</label>
            <div class="col-8">
                <input id="password2" name="password2" placeholder="Masukkan Password Baru" type="password" class="form-control" maxlength="40" value="">
            </div>
        </div>
        <?php if ($this->session->userdata('role') == "administrator") { ?>
        <div class="form-group row">
            <label for="role" class="col-4 col-form-label">Role</label>
            <div class="col-8">
                <select id="role" name="role" required="required" class="custom-select" required>
                    <option value="">Pilih Role</option>
                    <option value="public" <?php if ( $user['role']  == 'public') { echo 'selected'; } ?>>Public</option>
                    <option value="administrator" <?php if ( $user['role']  == 'administrator') { echo 'selected'; } ?>>Administrator</option>
                </select>
            </div>
        </div>
        <?php } ?>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>