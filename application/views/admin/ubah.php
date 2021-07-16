<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Ubah Data Seminar</h3>
    </div>
    <div class="panel-body">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
            <input type="hidden" value="<?= $seminar['id']; ?>" name="id">
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" class="form-control" id="semester" name="semester" value="<?= $seminar['semester'] ?>">
                    <?= form_error('semester', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $seminar['tanggal'] ?>">
                    <?= form_error('tanggal', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" value="<?= $seminar['jam'] ?>">
                    <?= form_error('jam', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="kategori_seminar_id">Seminar</label>
                    <select name="kategori_seminar_id" id="kategori_seminar_id" class="form-control" value="<?= $seminar['kategori_seminar_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_kategori as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kategori_seminar_id', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $seminar['nim'] ?>">
                    <?= form_error('nim', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= $seminar['nama_mahasiswa'] ?>">
                    <?= form_error('nama_mahasiswa', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $seminar['judul'] ?>">
                    <?= form_error('judul', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pembimbing">Pembimbing</label>
                    <select name="pembimbing_id" id="pembimbing" class="form-control" value="<?= $seminar['pembimbing_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_dosen as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('pembimbing', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="penguji1">Penguji 1</label>
                    <select name="penguji1_id" id="penguji1" class="form-control" value="<?= $seminar['penguji1_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_dosen as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('penguji1', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="penguji2">Penguji 2</label>
                    <select name="penguji2_id" id="penguji2" class="form-control" value="<?= $seminar['penguji2_id'] ?>">
                        <option value="">-Select-</option>
                        <?php foreach($list_dosen as $row) : ?>
                            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('penguji2', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai_pembimbing">Nilai Pembimbing</label>
                    <input type="text" class="form-control" id="nilai_pembimbing" name="nilai_pembimbing" value="<?= $seminar['nilai_pembimbing'] ?>">
                    <?= form_error('nilai_pembimbing', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai_penguji1">Nilai Penguji 1</label>
                    <input type="text" class="form-control" id="nilai_penguji1" name="nilai_penguji1" value="<?= $seminar['nilai_penguji1'] ?>">
                    <?= form_error('nilai_penguji1', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai_penguji2">Nilai Penguji 2</label>
                    <input type="text" class="form-control" id="nilai_penguji2" name="nilai_penguji2" value="<?= $seminar['nilai_penguji2'] ?>">
                    <?= form_error('nilai_penguji2', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $seminar['lokasi'] ?>">
                    <?= form_error('lokasi', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nilai_akhir">Nilai Akhir</label>
                    <input type="text" class="form-control" id="nilai_akhir" name="nilai_akhir" value="<?= $seminar['nilai_akhir'] ?>">
                    <?= form_error('nilai_akhir', '<small class="pl-3 text-danger">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="ubah">Ubah</button>
            </form>
        </div>
    </div>
</div>