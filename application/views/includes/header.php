<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title><?php echo $profile->title; ?></title>
  <meta name="description" content="<?=$meta_description?>">
  <meta name="keywords" content="<?=$meta_keywords?>">
  <meta name="title" content="<?=$meta_title?>">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo base_url(); ?>assests/images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500,600%7CTeko:300,400,500%7CMaven+Pro:500">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/fonts.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assests/css/jquery.mmenu.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assests/css/custom.css" />


</head>
<body>
  <?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
  <div class="page">
    <!-- Page Header-->
    <header class="section page-header">
      <div class="header-topline d-none d-lg-flex">
        <div class="container-fluid">
          <div class="row align-items-center">
            <ul class="list-inline list-inline-sm footer-social-list">

              <li><a href="tel:(703) 801-5334"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $address->mobile_number; ?></a></li>
              <li><a href="mailto:info@intelsysinc.com"></a><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo $address->email; ?></li>

            </ul>

            <div class="col-auto ml-auto d-flex align-items-center book">
              <ul class="headersocl">
                <li><a class="icon fa fa-facebook" target="_blank" href="<?=$social_media_links->facebook_links;?>"></a></li>
                <li><a class="icon fa fa-twitter" target="_blank" href="<?=$social_media_links->twitter_links;?>"></a></li>
                <li><a class="icon fa fa-linkedin" target="_blank" href="<?=$social_media_links->linkden_links;?>"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-panel">

                <!-- <a href="#menu" class="respmenu visible-xs"><i class="fa fa-bars fa-2x"></i></a> -->
                <div class="col-md-9">
          
                  <div class="rd-navbar-brand"><a class="brand" href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>uploads/<?php echo $profile->image ?>" alt="" width="191" height="52" /></a></div>
                </div>
                <div class="col-md-3">
                  <a href="#menu" class="rd-navbar-toggle respmenu visible-xs" onclick="window.location.href='#menu'"><span></span></a>

                </div>
              </div>

              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap">

                  <ul class="rd-navbar-nav">
                  
                    <li class="rd-nav-item <?php if ($this->uri->segment(1) == "home") {
                       echo 'class="active"';
                      } ?>"><a class="rd-nav-link" href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li class="rd-nav-item <?php echo ($this->uri->segment(1) == 'about') ? 'active' : ''; ?>"><a class="rd-nav-link" href="<?php echo base_url(); ?>about">About Us</a>
                    </li>

                    <li class="rd-nav-item rd-navbar--has-dropdown rd-navbar-submenu <?= ($this->uri->segment(1) == 'services' || $this->uri->segment(1) == 'services' || $page == 'dev-sec-ops.php' || $page == 'cyber-security.php' || $page == 'cloud-services.php' || $page == 'iv-and-v.php') ? 'active' : '' ?>">
                      <a class="rd-nav-link" href="<?php echo base_url(); ?>services">Services</a>
                      <span class="rd-navbar-submenu-toggle"></span>
                      <ul class="rd-menu rd-navbar-dropdown">  
                           
                        <?php foreach ($category as $categories) { ?>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url().'services/view/'. $categories->p_link?>"><?php echo $categories->service_category; ?></a></li>
                        <?php } ?>
                       
                        <!-- <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url(); ?>services/program_management">Program Management </a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url(); ?>services/devsecops">DevSecOps</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url(); ?>services/cybersecurity">Cyber Security</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url(); ?>services/cloudservices">Cloud Services</a></li>
                        <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="<?php echo base_url(); ?>services/ivandv">IV&V</a></li> -->
                      </ul>
                    </li>
                    <li class="rd-nav-item  <?php echo ($this->uri->segment(1) == 'about') ? '' : ''; ?>"><a class="rd-nav-link" href="<?php echo base_url(); ?>professionalservices">Professional Services</a></li>
                    <li class="rd-nav-item <?php echo ($this->uri->segment(1) == 'about') ? '' : ''; ?>"><a class="rd-nav-link" href="<?php echo base_url(); ?>joinus">Join Us</a></li>

                    <li class="rd-nav-item <?php echo ($this->uri->segment(1) == 'about') ? '' : ''; ?>"><a class="rd-nav-link" href="<?php echo base_url(); ?>contact">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>