<?= $this->extend('layout/masyarakat_layout'); ?>
<?= $this->section('content'); ?>

<h1>Form Pengaduan</h1>
<form action="<?= base_url('pengaduan'); ?>">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="username">Username : </label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="pengaduan">Pengaduan : </label>
    <textarea name="pengaduan" id="pengaduan" cols="30" rows="10"></textarea>
    <br>
    <label for="foto">Foto : </label>
    <input type="file" name="foto" id="foto" required>
    <br>
    <button type="submit">Kirim</button>
</form>

<?= $this->endSection(); ?>