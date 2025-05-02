<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/crud-edit/<?= $result['id_tbl_pegawai'] ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
            <input type="hidden" value="<?= $result['id_tbl_pegawai'] ?>" name="no_lama">  
            <input type="hidden" value="<?= $result['foto'] ?>" name="foto_lama">    
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
            <!-- INPUT FOTO -->
            <div class="mb-3">
                <label class="form-label">Foto</label>
                
                <div class="col-sm-12">
                    <input type="file" class="form-control <?= $validation->hasError('foto') ? 'is-invalid' : '' ?>  " name="foto" id="foto" value="<?= $result['foto'] ?>" onchange="previewImage()">
                    <!-- VALIDASI -->
                    <div class="invalid-feedback">
                        <?= $validation->getError('foto') ?>
                    </div>
                    <div class="col-md-6">
                        <img src="/img/<?= $result['foto']  != null? $result['foto'] : 'default.png'?>" alt="" class="img-preview" width="300">
                    </div>
                </div>     
            </div>
            <!-- END INPUT FOTO -->
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
