<!-- /*
* Template Name: Learner
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SDN Dinoyo 4</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $logo_app = $setting->logo_kiri == null ? base_url() . 'assets/img/faviconn.png' : base_url() . $setting->logo_kiri; ?>
  <link rel="shortcut icon" href="<?= $logo_app ?>" type="image/x-icon">


  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/homeprofile') ?> /css/style.css">

</head>

<body>
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">
        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-right">
          <a href="<?= base_url('homeprofile/view_home'); ?>" class="logo menu-absolute m-0">
            <?php $logo_app = $setting->logo_kiri == null ? base_url() . 'assets/img/faviconn.png' : base_url() . $setting->logo_kiri; ?>
            <img src="<?= $logo_app ?>" alt="App Logo" class="brand-image" style="opacity: .8" width="50px" height="47px">SDN DINOYO 4<span class="text-primary">.</span></a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="<?php echo base_url('homeprofile/view_home')?>">Home</a></li>
            <li class="has-children">
              <a href="#">Menu</a>
              <ul class="dropdown">
                <li><a href="<?php echo base_url('homeprofile/view_foto')?>">Foto Kita</a></li>
                <li><a href="<?php echo base_url('homeprofile/view_staff')?>">Tenaga Pendidik</a></li>
                <li><a href="<?php echo base_url('homeprofile/view_prestasi')?>">Prestasi</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('homeprofile/view_about')?>">About</a></li>
            <li><a href="<?php echo base_url('homeprofile/view_contact')?>">Contact</a></li>
          </ul>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>