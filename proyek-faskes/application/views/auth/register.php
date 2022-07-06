<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?= base_url('home') ?>" class="h1">
                <img src="<?php echo base_url('assets/img/Faskes-Icon.png') ?>" style="width: 32px; height: 32px;" alt="">
                <b>Faskes</b>
            </a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="<?= base_url('auth/registration'); ?>" method="post">
                <div class="input-group mb-3 d-flex flex-column">
                    <input type="text" class="form-control w-100" placeholder="Full name" name="username" id="username" value="<?= set_value('username'); ?>">
                    <div class="input-group-append">
                        <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="input-group mb-3 d-flex flex-column">
                    <input type="email" class="form-control w-100" placeholder="Email" name="email" id="email" value="<?= set_value('email'); ?>">
                    <div class="input-group-append">
                        <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="input-group mb-3 d-flex flex-column">
                    <input type="password" class="form-control w-100" placeholder="Password" name="password1" id="password1">
                    <div class="input-group-append">
                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2">
                    <div class="input-group-append">
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="<?= base_url('auth') ?>" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->