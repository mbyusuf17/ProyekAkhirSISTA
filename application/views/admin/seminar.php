<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Seminar</h3>
        
    </div>
    <div class="panel-body">
    <a href="<?= base_url('seminar/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope='col'>no</th>
                    <th scope='col'>tanggal</th>
                    <th scope='col'>nim</th>
                    <th scope='col'>nama mahasiswa</th>
                    <th scope='col'>judul</th>
                    <th scope='col'>lokasi</th>
                    <th scope='col'>nilai akhir</th>
                    <th scope='col'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor=1;
                foreach($list_seminar as $row) :?>
                <tr>
                    <td scope='row' ><?= $nomor++ ?></td>
                    <td><?= $row['tanggal'].'|'.$row['jam']?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama_mahasiswa'] ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['lokasi'] ?></td>
                    <td><?= $row['nilai_akhir'] ?></td>                    
                    <td>
                        <a href="<?= base_url('seminar/ubah/'); ?><?= $row['id']; ?>" class="label label-warning">Ubah</a>
                        <a href="<?= base_url('seminar/hapus/'); ?><?= $row['id']; ?>" class="label label-danger pl-2 pr-2" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>