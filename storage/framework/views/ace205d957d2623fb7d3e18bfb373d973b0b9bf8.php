<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu border-end">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="42">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-dark.png')); ?>" alt="" height="37">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo-sm.png')); ?>" alt="" height="42">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="37">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span><?php echo app('translator')->get('translation.menu'); ?></span></li>

                <li class="nav-item">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link <?php echo e(request()->routeIs('master.*') ? 'text-primary' : ''); ?>" href="#sidebarDataMaster" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDataMaster">
                        <i class="bx bxs-data"></i> <span>Data</span>
                    </a>
                    <div class="collapse menu-dropdown <?php echo e(request()->routeIs('master.*') ? 'show' : ''); ?>" id="sidebarDataMaster">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('master.unit.index')); ?>" class="nav-link <?php echo e(request()->routeIs('master.unit.*') ? 'text-primary' : ''); ?>">Unit</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('master.kategori.index')); ?>" class="nav-link <?php echo e(request()->routeIs('master.kategori.*') ? 'text-primary' : ''); ?>">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('master.asset.index')); ?>" class="nav-link <?php echo e(request()->routeIs('master.asset.*') ? 'text-primary' : ''); ?>">Asset</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><span>Apps</span></li>


                <li class="nav-item">
                    <a href="<?php echo e(route('peminjaman.index')); ?>" class="nav-link <?php echo e(request()->routeIs('peminjaman.*') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>Peminjaman</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('riwayat.index')); ?>" class="nav-link <?php echo e(request()->routeIs('riwayat.*') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span>Riwayat</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  <?php echo e(request()->routeIs('pengguna.*') ? 'text-primary' : ''); ?>" href="#sidebarPengguna" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPengguna">
                        <i class="bx bx-user-pin"></i> <span>Pengguna</span>

                    </a>
                    <div class="collapse menu-dropdown <?php echo e(request()->routeIs('pengguna.*') ? 'show' : ''); ?>" id="sidebarPengguna">


                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('pengguna.operator.index')); ?>" class="nav-link  <?php echo e(request()->routeIs('pengguna.operator.*') ? 'text-primary' : ''); ?>">Operator</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('pengguna.admin.index')); ?>" class="nav-link <?php echo e(request()->routeIs('pengguna.admin.*') ? 'text-primary' : ''); ?>">Admin</a>


                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('pengguna.client.index')); ?>" class="nav-link <?php echo e(request()->routeIs('pengguna.client.*') ? 'text-primary' : ''); ?>">Klien</a>


                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><span>Setting</span></li>

                <li class="nav-item">
                    <a href="<?php echo e(route('profile.index')); ?>" class="nav-link <?php echo e(request()->routeIs('profile.*') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-folder-user-line"></i> <span>Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('role.index')); ?>" class="nav-link <?php echo e(request()->routeIs('role.*') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-user-settings-line"></i> <span>Role</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('permission')); ?>" class="nav-link <?php echo e(request()->routeIs('permission') ? 'text-primary' : ''); ?>" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                        <i class="ri-list-settings-fill"></i> <span>Permission</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-logout-circle-line"></i> <span>Log out</span>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH C:\laragon\www\lendus-velzon\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>