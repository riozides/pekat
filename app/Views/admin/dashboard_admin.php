<?= $this->extend('layout/admin_layout'); ?>
<?= $this->section('content'); ?>

<h1>Tabel Masyarakat</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($masyarakat as $m) : ?>
        <tr>
            <td><?= $m['id']; ?></td>
            <td><?= $m['nik']; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['username']; ?></td>
            <td><?= $m['telp']; ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h1>Tabel Petugas</h1>

<?= $this->endSection(); ?>