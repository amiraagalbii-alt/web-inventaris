<?php $this->load->view('header'); ?>

<h2>Form Barang</h2>
<form method="post">
    <input name="nama_barang" class="form-control mb-3" placeholder="Nama barang"
           value="<?= @html_escape($b->nama_barang) ?>" required>
    <input name="jumlah" type="number" class="form-control mb-3" placeholder="Jumlah"
           value="<?= @$b->jumlah ?>" required>
    <select name="kondisi" class="form-select mb-3">
        <option value="baik">Baik</option>
        <option value="rusak" <?= @$b->kondisi == 'rusak' ? 'selected' : '' ?>>Rusak</option>
    </select>
    <input name="lokasi" class="form-control mb-3" placeholder="Lokasi"
           value="<?= @html_escape($b->lokasi) ?>">
    <button class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('barang') ?>" class="btn btn-secondary">Batal</a>
</form>

<?php $this->load->view('footer'); ?>