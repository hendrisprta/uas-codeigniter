<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/create-departemen" method="POST">
                <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">Nama Departemen</label>
                <input type="text" class="form-control <?= $validation->hasError('nama_departemen') ? 'is-invalid' : '' ?>  " name="nama_departemen">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_departemen') ?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Bagian</label>
                <input type="text" class="form-control <?= $validation->hasError('nama_bagian') ? 'is-invalid' : '' ?>" name="nama_bagian">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_bagian') ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
