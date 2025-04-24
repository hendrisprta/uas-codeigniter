<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
        <div class="card-body">
            <a href="/create-departemen">
            <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
            <hr>
            <?php if (session()->getFlashdata('succes')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('succes') ?>
            </div>
            <?php endif; ?>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No Table</th>
                        <th scope="col">No Departemen</th>
                        <th scope="col">Nama Bagian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach ($data_departemen as $value) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $value['nama_departemen'] ?></td>
                        <td><?= $value['nama_bagian'] ?></td>
                        <td>
                        <!--FUNGSI UBAH DAN HAPUS -->
                            <a href="/departemen-edit/<?= $value['id_departemen'] ?>"><button type="button" class="btn btn-info">Ubah</button></a>
                            <a href="/departemen-hapus/<?= $value['id_departemen'] ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endsection('content'); ?>