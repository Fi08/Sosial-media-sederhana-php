<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman <?= $data['judul'] ?></title>

    <!-- Custom fonts for this template-->
    <!-- <link href="<?= BASE ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f736573531.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="<?= BASE ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= BASE ?>/css/my.css" rel="stylesheet">


</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class="sidebar-divider">
            <?php if (!isset($_SESSION['email'])) { ?>
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE ?>">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Twirrer</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE ?>/about">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>About</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE ?>/singup" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Sign Up</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE ?>/login">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Login</span></a>
                </li>
            <?php } ?>

            <?php if (isset($_SESSION['email'])) { ?>

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE ?>/user">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <?= $_SESSION['nama'] ?>
                    </div>
                    <span>Profil</span>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Divider -->


                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item active no-arrow mx-1">
                    <a class="nav-link" href="<?= BASE ?>/users">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Users</span></a>
                </li>


                <li class="nav-item active no-arrow mx-1">
                    <a class="nav-link" href="<?= BASE ?>/posts">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Posts</span></a>
                </li>

                <li class="nav-item active no-arrow mx-1">
                    <a class="nav-link" href="<?= BASE ?>/logout/me">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Logout</span></a>
                </li>
            <?php  } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content ">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-primary bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Menu Atas-->
                    </ul>
                </nav>
                <!-- End of Topbar -->