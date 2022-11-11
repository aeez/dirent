<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon">
            <img src="./app/assets/img/logo/logoTritech.png" style="background-color: white; border-radius:10%;">
        </div> -->
        <div class="sidebar-brand-text mx-3">DIRENT</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="./dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <?php if ($_SESSION['level'] == 'admin') : ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manajemen User</h6>
                    <a class="collapse-item" href="./petugas_tbl.php">Manajemen Petugas</a>
                    <a class="collapse-item" href="./customer_tbl.php">Manajemen Customer</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./mobil_tbl.php">
                <i class="bi bi-car-front-fill"></i>
                <span>Mobil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./pemesanan_tbl.php">
                <i class="fas fa-history"></i>
                <span>Pemesanan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./komentar_tbl.php">
                <i class="bi bi-chat-dots"></i>
                <span>Komentar</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if ($_SESSION['level'] == 'petugas') : ?>
        <li class="nav-item">
            <a class="nav-link" href="./mobil_tbl.php">
                <i class="bi bi-car-front-fill"></i>
                <span>Mobil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./pemesanan_tbl.php">
                <i class="fas fa-history"></i>
                <span>Pemesanan</span>
            </a>
        </li>
    <?php endif; ?>
</ul>
