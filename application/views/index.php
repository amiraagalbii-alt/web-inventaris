<?php $this->load->view('header'); ?>

<h2>Data Barang</h2>
<a href="<?= site_url('barang/form') ?>" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table table-bordered bg-white">
    <tr>
        <th>Nama</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $b): ?>
    <tr>
        <td><?= html_escape($b->nama_barang) ?></td>
        <td><?= $b->jumlah ?></td>
        <td><?= $b->kondisi ?></td>
        <td><?= html_escape($b->lokasi) ?></td>
        <td>
            <a href="<?= site_url('barang/form/'.$b->id_barang) ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= site_url('barang/hapus/'.$b->id_barang) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php $this->load->view('footer'); ?>
