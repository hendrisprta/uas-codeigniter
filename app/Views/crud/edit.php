<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/crud-edit/<?= $result['id_tbl_pegawai'] ?>" method="POST">
                <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">No Pegawai</label>
                <input type="text" class="form-control" name="no_pegawai" value="<?= $result['no_pegawai'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $result['nama'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">departemen</label>
                <input type="text" class="form-control" name="departemen" value="<?= $result['departemen'] ?>">
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
