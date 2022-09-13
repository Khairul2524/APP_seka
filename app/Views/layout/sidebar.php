<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/dashboard') ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-karyawan" aria-expanded="false" aria-controls="form-karyawan">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Karyawan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-karyawan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/penduduk') ?>">Karyawan</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/penduduk/form') ?>">Form Karyawan</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/kriteria') ?>">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Kriteria</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/bobot') ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Bobot</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/perhitungan') ?>">
                <i class="icon-plus menu-icon"></i>
                <span class="menu-title">Perhitungan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Manajemen User</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/user') ?>">User</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/level') ?>">Level</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>