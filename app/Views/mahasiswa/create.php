<?= $this->extend('templates/template') ?>
<?= $this->section('content') ?>

<form action="/store" method="post">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-paper-plane"></i>
        Submit</button>
    </div>
</form>
<?= $this->endSection() ?>