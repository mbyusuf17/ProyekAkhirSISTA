<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Tambah Data Peserta</h3>
    </div>
    <div class="panel-body">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                    <?= form_error('nim', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="seminar_id">Seminar</label>
                    <select name="seminar_id" id="seminar_id" class="form-control">
                        <option value="">-Select-</option>
                        <?php foreach($seminar as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['judul'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('pembimbing', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="kehadiran">Kehadiran</label>
                    <input type="text" class="form-control" id="kehadiran" name="kehadiran">
                    <?= form_error('kehadiran', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
            </form>
        </div>
    </div>
</div>