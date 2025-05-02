<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
        <div class="card-body">
            <a href="/create-penilaian">
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
                        <th scope="col">No Pegawai</th>
                        <th scope="col">Penilaian</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach ($data_penilaian as $value) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $value['no_pegawai'] ?></td>
                        <td><?= $value['penilaian'] ?></td>
                        <td><?= $value['keterangan'] ?></td>
                        <td>
                        <!--FUNGSI UBAH DAN HAPUS PENILAIAN -->
                            <a href="/penilaian-edit/<?= $value['id_tbl_penilaian'] ?>"><button type="button" class="btn btn-info">Ubah</button></a>
                            <a href="/penilaian-hapus/<?= $value['id_tbl_penilaian'] ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</button></a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endsection('content'); ?>