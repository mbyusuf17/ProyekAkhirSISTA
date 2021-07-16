<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Ubah Data Dosen</h3>
    </div>
    <div class="panel-body">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
            <input type="hidden" value="<?= $dosen['id']; ?>" name="id">
            <div class="form-group">
                    <label for="nidn">NIDN</label>
                    <input type="text" class="form-control" id="nidn" name="nidn" value="<?= $dosen['nidn'] ?>">
                    <?= form_error('nidn', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nama">Dosen</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $dosen['nama'] ?>">
                    <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah</button>
            </form>
        </div>
    </div>
</div>