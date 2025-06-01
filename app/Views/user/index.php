<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
    <div class="card-body">
        <a href="/create-users">
            <button type="button" class="btn btn-primary">Tambah Data</button>
        </a>
        <hr>
        <?php if (session()->getFlashdata('Success')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('Successk') ?>
            </div>
        <?php endif; ?>
        <hr>
        <table class="table" id="example" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Role/Group</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($result as $value) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['username'] ?></td>
                        <td><?= $value['group_name'] ?></td>
                        <td>
                            <form action="/reset-password-users/<?= $value['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-warning" onclick="return confirm('Yakin Ingin menghapus data ini ?')"><i class="fas fa-trash"></i>Reset Paaword</button>
                            </form>
                             <from action="/users-hapus/<?= $value['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field() ?>
                                <input type="hidden" name="method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus data ini ?')"><i class="fas fa-trash"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endsection('content'); ?>