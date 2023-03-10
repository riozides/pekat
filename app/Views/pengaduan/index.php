<?= $this->extend('layout/masyarakat_layout'); ?>
<?= $this->section('content'); ?>

<h1>Daftar Pengaduan</h1>

<table>
    <thead>
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pengaduan as $p) : ?>
            <tr>
                <td><?= $p['id_pengaduan']; ?></td>
                <td><?= $p['tgl_pengaduan']; ?></td>
                <td><?= $p['nik']; ?></td>
                <td><?= $p['isi_laporan']; ?></td>
                <td><?= $p['foto']; ?></td>
                <td><?= $p['status']; ?></td>
                <td>
                    <a href="/pengaduan/edit/<?= $p['id_pengaduan']; ?>">Edit</a>
                    <a href="/pengaduan/delete/<?= $p['id_pengaduan']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>