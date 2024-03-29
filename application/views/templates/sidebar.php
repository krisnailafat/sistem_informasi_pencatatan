<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-tshirt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WPU Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!-- Query dari menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`
        FROM `user_menu` JOIN `user_access_menu`
          ON `user_menu`.`id` = `user_access_menu`.`menu_id`
       WHERE `user_access_menu`.`role_id` = $role_id
       ORDER BY `user_access_menu`.`menu_id` ASC
       ";
    $menu = $this->db->query($queryMenu)->result_array();
    // var_dump($menu);
    // die;
    ?>

    <!-- Nav Item - Dashboard -->
    <!-- LOOPING MENU -->

    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- SIAPKAN SUB-MENU SESUAI MENU -->

        <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
            FROM `user_sub_menu` JOIN `user_menu`
              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
           WHERE `user_sub_menu`.`menu_id` = $menuId
           AND `user_sub_menu`.`is_active` = 1
           ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>



    <?php endforeach; ?>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Logout
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->