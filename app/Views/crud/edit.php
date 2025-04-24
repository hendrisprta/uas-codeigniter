<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/crud-edit/<?= $result['id_tbl_pegawai'] ?>" method="POST">
                <?= csrf_field() ?>
            <input type="hidden" value="<?= $result['id_tbl_pegawai'] ?>" name="no_lama">    
            <div class="mb-3">
                <label class="form-label">No Pegawai</label>
                <input type="text" class="form-control <?= $validation->hasError('no_pegawai') ? 'is-invalid' : '' ?>" name="no_pegawai" value="<?= old('no_pegawai', $result['no_pegawai']) ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('no_pegawai')?>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" name="nama" value="<?= old('nama', $result['nama']) ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama')?>
                </div>

            </div>
            <div class="mb-3">
                <label class="form-label">departemen</label>
                <select class="form-control" name="id_departemen">
                    <?php foreach ($departemen as $value) : ?>
                        <option value="<?= $value['id_departemen'] ?>"
                            <?= old('id_departemen', $result['id_departemen']) == $value['id_departemen'] ? 'selected' : ''?>> 
                            <?= $value['nama_departemen']?> ===== <?= $value['nama_bagian']?>
                        </option>
                        <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
            <!-- TOMBOL BACK     -->
             <hr>
            <a href="/crud">
            <button class="btn btn-warning">Kembali</button>
            </a>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
