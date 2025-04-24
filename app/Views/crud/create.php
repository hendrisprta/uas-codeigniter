<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/create-crud" method="POST">
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
                <label class="form-label">nama</label>
                <input type="text" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" name="nama">
                <!-- VALIDASI -->
                <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">departemen</label>
                <select class="form-control" name="id_departemen">
                    <?php foreach ($departemen as $value) : ?>
                        <option value="<?= $value['id_departemen'] ?>">
                            <?= old('id_departemen') == $value['id_departemen'] ? 'selected' : ''?>>
                            <?= $value['nama_departemen']?> ===== <?= $value['nama_bagian']?>
                        </option>
                        <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
