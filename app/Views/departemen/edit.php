<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/departemen-edit/<?= $result['id_departemen'] ?>" method="POST">
                <?= csrf_field() ?>
            <input type="hidden" value="<?= $result['id_departemen'] ?>" name="no_lama">    
            <div class="mb-3">
                <label class="form-label">Nama Departemen</label>
                <input type="text" class="form-control <?= $validation->hasError('nama_departemen') ? 'is-invalid' : '' ?>" name="nama_departemen" value="<?= old('nama_departemen', $result['nama_departemen']) ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_departemen')?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Bagian</label>
                <input type="text" class="form-control <?= $validation->hasError('nama_bagian') ? 'is-invalid' : '' ?>" name="nama_bagian" value="<?= old('nama_departemen', $result['nama_departemen']) ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_departemen')?>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
            <!-- TOMBOL BACK     -->
             <hr>
            <a href="/departemen">
            <button class="btn btn-warning">Kembali</button>
            </a>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
