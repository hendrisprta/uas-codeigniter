<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
        
            <hr>
            <form action="/create-users" method="POST">
                <?= csrf_field() ?>
            <div class="mb-3">
                <label for="title" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="username">
                </div>
                <label for="title" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">Role Akses</label>
                <div class="col-sm-4">
                    <select class="form-select" name="role">
                        <option value="Admin">Admin</option>
                        <option value="Pengawas">Pengawas</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
