<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/crud-create" method="POST">
                <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label">No Pegawai</label>
                <input type="text" class="form-control" name="no_pegawai">
            </div>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">departemen</label>
                <input type="text" class="form-control" name="departemen">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
