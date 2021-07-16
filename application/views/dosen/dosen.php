
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Daftar Dosen</h3>
        
    </div>
    <div class="panel-body">
    <a href="<?= base_url('dosen/tambah'); ?>" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
        <tr>
            <th scope='col'>no</th>
            <th scope='col'>nidn</th>
            <th scope='col'>nama</th>
            <th scope='col'>aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php 
            $nomor=1;
            foreach($list_dosen as $row) :?>
            <tr>
                <td scope='row' ><?= $nomor++ ?></td>
                <td><?= $row['nidn']?></td>
                <td><?= $row['nama'] ?></td>                    
                <td>
                    <a href="<?= base_url('dosen/ubah/'); ?><?= $row['id']; ?>" class="label label-warning">Ubah</a>
                    <a href="<?= base_url('dosen/hapus/'); ?><?= $row['id']; ?>" class="label label-danger pl-2 pr-2" onclick="return confirm('Apakah kamu ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>