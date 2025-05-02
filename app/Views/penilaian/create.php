<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/create-penilaian" method="POST">
                <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">No Pegawai</label>
                <input type="text" class="form-control <?= $validation->hasError('no_pegawai') ? 'is-invalid' : '' ?>  " name="no_pegawai">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('no_pegawai') ?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">penilaian</label>
                <input type="text" class="form-control <?= $validation->hasError('penilaian') ? 'is-invalid' : '' ?>" name="penilaian">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('penilaian') ?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" class="form-control <?= $validation->hasError('keterangan') ? 'is-invalid' : '' ?>" name="keterangan">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('keterangan') ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
