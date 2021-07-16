<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Ubah Data Detail Penilaian</h3>
    </div>
    <div class="panel-body">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
            <input type="hidden" value="<?= $nilai['id']; ?>" name="id">
            <div class="form-group">
                    <label for="penilaian_id">Penilaian</label>
                    <select name="penilaian_id" id="penilaian_id" class="form-control" value="<?= $nilai['penilaian_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_penilaian as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('penilaian_id', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="dosen_id">Dosen</label>
                    <select name="dosen_id" id="dosen_id" class="form-control" value="<?= $nilai['dosen_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_dosen as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('dosen_id', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="seminar_id">Seminar</label>
                    <select name="seminar_id" id="seminar_id" class="form-control" value="<?= $nilai['seminar_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_seminar as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['judul'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('seminar_id', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $nilai['nilai'] ?>">
                    <?= form_error('nilai', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah</button>
            </form>
        </div>
    </div>
</div>