<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Peserta Seminar</h3>
    </div>
    <div class="panel-body">
    <a href="<?= base_url('peserta/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
        <tr>
            <th scope='col'>no</th>
            <th scope='col'>nim</th>
            <th scope='col'>nama</th>
            <th scope='col'>seminar</th>
            <th scope='col'>kehadiran</th>
            <th scope='col'>aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $nomor=1;
            foreach($seminar as $row) :?>
            <tr>
                <td scope='row' ><?= $nomor++ ?></td>
                <td><?= $row['nim']?></td>
                <td><?= $row['nama'] ?></td>    
                <td><?= $row['judul'] ?></td>  
                <td><?= $row['kehadiran'] ?></td>               
                <td>
                    <a href="<?= base_url('peserta/ubah/'); ?><?= $row['id']; ?>" class="label label-warning">Ubah</a>
                    <a href="<?= base_url('peserta/hapus/'); ?><?= $row['id']; ?>" class="label label-danger pl-2 pr-2" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>