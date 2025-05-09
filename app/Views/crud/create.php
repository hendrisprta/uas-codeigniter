<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/create-crud" method="POST" enctype="multipart/form-data">
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
            <!-- INPUT FOTO -->
            <div class="mb-3">
                <label class="form-label">Foto</label>
                
                <div class="col-sm-12">
                    <input type="file" class="form-control <?= $validation->hasError('foto') ? 'is-invalid' : '' ?> " name="foto" id="foto" value="<?=old('foto') ?>" onchange="previewImage()">
                    <!-- VALIDASI -->
                    <div class="invalid-feedback">
                        <?= $validation->getError('foto') ?>
                    </div>
                    <div class="col-md-6">
                        <img src="/img/default.png" alt="" class="img-preview" width="300">
                    </div>
                </div>     
            </div>
            <!-- END INPUT FOTO -->
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
