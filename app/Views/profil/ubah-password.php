<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <hr>
        <div class="card-body">
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="/password/<?= user_id() ?>" method="post">
                <?= csrf_field() ?>
                <div class="mb-3 row">
                    <label for="title" class="col-sm-2 col-form-label">Password Lama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= $validation->hasError('password_lama') ? 'is-invalid' : '' ?>" name="password_lama">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('password_lama') ?>
                        </div>
                    </div>

                </div>
                <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Password Baru</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control <?= $validation->hasError('password_baru') ? 'is-invalid' : '' ?>" name="password_baru">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('password_baru') ?>
                        </div>
                    </div>
                
                </div>
                <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" <?= $validation->hasError('konfirmasi_password_baru') ? 'is-invalid' : '' ?> name="konfirmasi_password_baru">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('konfirmasi_password_baru') ?>
                        </div>
                    </div>

           <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button class="btn btn-danger" type="reset">Batal</button>
                </div>
        </form>
        <hr>
    </div>
</div>
<?= $this->endsection('content'); ?>