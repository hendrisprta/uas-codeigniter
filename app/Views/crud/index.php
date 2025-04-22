<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
        <div class="card-body">
            <a href="/crud-create">
            <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
            <hr>
        <!--JIKA SUKSES TAMBAH DATA-->
            <?php if(session()->getFlashdata('success')) :?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('success') ?>
            </div>
            <?php endif; ?>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Pegawai</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Departemen</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($data_crud as $value) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $value['no_pegawai'] ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['departemen'] ?></td>
                        <td>
                            <button type="button" class="btn btn-info">Ubah</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>

    <?= $this->endsection('content'); ?>