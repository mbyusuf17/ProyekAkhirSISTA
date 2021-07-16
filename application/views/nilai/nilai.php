
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Detail Penilaian</h3>
        
    </div>
    <div class="panel-body">
    <a href="<?= base_url('nilai/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
        <tr>
            <th scope='col'>no</th>
            <th scope='col'>Penilaian</th>
            <th scope='col'>Dosen</th>
            <th scope='col'>Seminar</th>
            <th scope='col'>nilai</th>
            <th scope='col'>aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $nomor=1;
            foreach($list_nilai as $row) :?>
            <tr>
                <td scope='row' ><?= $nomor++ ?></td>
                <td><?= $row['kategori_nilai']?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['judul']?></td>
                <td><?= $row['nilai'] ?></td>                    
                <td>
                    <a href="<?= base_url('nilai/ubah/'); ?><?= $row['id']; ?>" class="label label-warning">Ubah</a>
                    <a href="<?= base_url('nilai/hapus/'); ?><?= $row['id']; ?>" class="label label-danger pl-2 pr-2" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>