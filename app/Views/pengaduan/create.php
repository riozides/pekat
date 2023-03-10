<?= $this->extend('layout/masyarakat_layout'); ?>
<?= $this->section('content'); ?>
<h1>Tambah Pengaduan</h1>

<?= form_open_multipart('store'); ?>
    <label for="">Tanggal Pengaduan</label>
    <input type="date" name="tgl_pengaduan"><br>

    <label for="">NIK</label>
    <input type="text" name="nik"><br>

    <label for="">Isi Laporan</label>
    <input type="text" name="isi_laporan"><br>

    <label for="">Foto</label>
    <input type="file" name="foto"><br>

    <label for="">Status</label>
    <select name="status" id="">
        <option value="diproses">Diproses</option>
        <option value="selesai">Selesai</option>
    </select><br>

    <button type="submit">Simpan</button>

<?= form_close(); ?>

<?= $this->endSection(); ?>