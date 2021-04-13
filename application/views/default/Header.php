<?php
defined('BASEPATH') or exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Masjid Al - Ghifari</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="<?= base_url('assets/assets/css/bootstrap.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/css/bootstrap-responsive.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/css/prettyPhoto.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/js/google-code-prettify/prettify.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/css/flexslider.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/css/style.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/color/default.css')?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/font/font.css')?>" rel="stylesheet">

  


  
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="<?= base_url('assets/assets/ico/favicon.ico')?>">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/assets/ico/apple-touch-icon-144-precomposed.png')?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/assets/ico/apple-touch-icon-114-precomposed.png')?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/assets/ico/apple-touch-icon-72-precomposed.png')?>">
  <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/assets/ico/apple-touch-icon-57-precomposed.png')?>">
 
 

</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
        ================================================== -->
        <div class="navbar" style="background-color:#8FBC8F;">
          <div class="navbar-inner" style="background-color:#8FBC8F;" >
            <div class="container">
              <!-- logo -->
              <div class="logo">
                <a href="<?= site_url('Home')?>"><img style="width: 125px; height: 150%" src="<?= base_url('assets/assets/img/logomasjid.png')?>" alt="" /></a>
              </div>
              <!-- end logo -->
              <!-- top menu -->
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="<?= site_url('Home')?>"  style="color: white"> Home </a>
                    </li>
                      <li class="dropdown">
                    <a href="#" style="color: white"><i ></i> Kegiatan <i></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?= site_url('Home/Kegiatan_insidental_v')?>" style="color: white">Kegiatan Insidental</a></li>
                      <li><a href="<?= site_url('Home/Kegiatan_rutin_v')?>">Kegiatan Rutin</a></li>
                    </ul>
                                        
                    <li>
                      <a href="<?= site_url('Home/Foto_kegiatan_v')?>"style="color: white"><i class="fal fa-images"></i> Foto Kegiatan</a>
                    </li>

                  <!--   <li>
                      <a href="<?= site_url('Home/art')?>"style="color: white"><i class="fal fa-images"></i> art</a>
                    </li> -->

                     <li>
                      <a href="<?= site_url('Home/Imam_v')?>"style="color: white"><i class="fal fa-images"></i> Imam Sholat</a>
                    </li>
                    
                    <li>
                      <a href="<?= site_url('Home/Jadwal_salat_v')?>"style="color: white"><i class="fal fa-images"></i> Jadwal Sholat</a>
                    </li>
                    <li>
                      <a href="<?= site_url('Home_admin')?>"style="color: white"><i class="fal fa-images"></i> Login</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end menu -->

            </div>
          </div>
        </div>
      </header>
