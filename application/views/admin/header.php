<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>adminassests/favicon1.png">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>adminassests/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>adminassests/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <style>
        .multicolortext {
            background-image: linear-gradient(to left, violet, indigo, green, blue, yellow, orange, red);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>admin/dashboard">
                <div class="sidebar-brand-icon rotate-n-13">
                    <div style="color:white;">
                        <img src="<?php echo base_url(); ?>adminassests/favicon1.png" alt="" width=80px;>
                    </div>
                </div>
                <div class="sidebar-brand-text mx-3">
                    <span class="">
                        <?php //echo $this->session->userdata('firstname');
                        ?>
                    </span>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php //include "main.php";
            ?>
            <?php include 'side_menu.php'; ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <?php if ($this->session->flashdata('msg')) { ?>
                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong><?php echo $this->session->flashdata('msg'); ?></strong>
                                </div>
                            <?php } ?>
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-green-600 small "
                                        style="color:green; font-weight:bold;"><?php echo $this->session->userdata('firstname');?></span>
                                    <!-- <img class="img-profile rounded-circle"
                                        src="<?php //echo base_url() ?>adminassests/img/<?php //echo $images->image ?>"> -->
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url('');?>admin/login/change_password">
                                    <i class="fa fa-key" aria-hidden="true"></i>

                                        Password Change
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('');?>admin/login/logout"
                                        data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->