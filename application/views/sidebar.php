<div class="bg-primary text-white p-3" style="width:220px; min-height:100vh;">
    <h5 class="mb-4">Inventaris</h5>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('barang') ?>">Data Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= site_url('barang/form') ?>">Tambah Barang</a>
        </li>
        <li class="nav-item mt-3">
            <a class="nav-link text-white "
               href="<?= site_url('auth/logout') ?>"
               onclick="return confirm('Yakin ingin logout?')">Logout</a>
        </li>
    </ul>
</div>