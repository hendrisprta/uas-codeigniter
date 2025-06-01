<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
        <div class="card-body">
            <?php if(session()->getFlashdata('Success')) :?>
                <div class="alert alert-primary" role="alert">
                    <?=session()->getFlashdata('Success')?>
                </div>
            <?php endif; ?>

            <hr>
            <div class="card-body">
            <?= view('Myth\Auth\Views\_message_block')?>
            <form action="/profil/<?= user_id() ?>" method="POST">
                <?= csrf_field() ?> 
                <div class="mb-3">
                <label for="title" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="username" value="<?= $result['username']?>">
                    </div>
                </div>
                <label for="title" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" value="<?= $result['email']?>">
                    </div>
                </div>                
            </div>


                 
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </div>
            
            </form>
            </div>
        </div>
    </div>

    <?= $this->endsection('content'); ?>
