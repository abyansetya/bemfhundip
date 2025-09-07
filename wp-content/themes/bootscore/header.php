<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <style>
	@font-face {
		font-family: 'Farro';
		font-style: normal;
		font-weight: 400;
		src: local('Farro'), url('https://fonts.cdnfonts.com/s/16472/Farro-Regular.woff') format('woff');
	}
	@font-face {
		font-family: 'Farro';
		font-style: normal;
		font-weight: 300;
		src: local('Farro'), url('https://fonts.cdnfonts.com/s/16472/Farro-Light.woff') format('woff');
	}
	@font-face {
		font-family: 'Farro';
		font-style: normal;
		font-weight: 500;
		src: local('Farro'), url('https://fonts.cdnfonts.com/s/16472/Farro-Medium.woff') format('woff');
	}
	@font-face {
		font-family: 'Farro';
		font-style: normal;
		font-weight: 700;
		src: local('Farro'), url('https://fonts.cdnfonts.com/s/16472/Farro-Bold.woff') format('woff');
	}  
  </style>
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <style>
    body {
      font-family: 'Farro', sans-serif;
      font-size: 13px;
    }
	  
	.btn-orange {
		background-color: #E88B45;
		border-color: #E88B45;
		color: #fff;
	}
	  
	.text-title {
		color: #D75A5A;
	}
	  
	  .text-orange {
		color: #E88B45;
	}
	  
	.bg-section {
		background: linear-gradient(356deg, #E68842 44.79%, #C33736 100%);
	}

    /* Logo Styling */
    .navbar-brand {
      display: flex;
      align-items: center;
      margin-right: 15px !important;
    }

    .logo {
      height: 50px;
      width: auto;
      object-fit: contain;
    }

    .logo.xs {
      height: 45px;
    }

    .logo.md {
      height: 50px;
    }

    /* Logo spacing adjustments */
    .navbar-brand.xs {
      margin-right: 0 !important;
    }

    .navbar-brand.md {
      margin-right: 10px !important;
    }

    @media (max-width: 767.98px) {
      .logo {
        height: 40px;
      }
      .logo.xs {
        height: 35px;
      }
    }
	  
    #listinformasi {
      scrollbar-color: #d4aa70 #e4e4e4;
      scrollbar-width: thin;
    }
    .slick-dots li button:before {
      font-size: 10px;
      color: #15616D;
    }
    .slick-dots li.slick-active button:before {
      color: #15616D;
      font-size: 13px;
    }
    .custom-arrow-right {
      right: -40px;
      position: absolute;
      top: 50%;
      display: block;
      width: 20px;
      height: 20px;
      padding: 0;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      cursor: pointer;
      color: transparent;
      border: none;
      outline: none;
      background: transparent;
    }
    .custom-arrow-left {
      left: -40px;
      position: absolute;
      top: 50%;
      display: block;
      width: 20px;
      height: 20px;
      padding: 0;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);
      cursor: pointer;
      color: transparent;
      border: none;
      outline: none;
      background: transparent;
    }
    .slick-dots {
      bottom: -50px;
    }

    .slick-slide {
      transform: scale(0.9);
      opacity: 0.8;
    }

    .slick-slide.slick-current {
      transform: scale(1);
      opacity: 1;
    }
  </style>
	
	  <style>
    .events-container {
      overflow-y: scroll;
      height: 100%;
      width: 100%;
      margin: 0px auto;
      display: inline-block;
      padding: 0px;
      border-bottom-right-radius: 3px;
      border-top-right-radius: 3px;
      padding: 0; }
      @media (max-width: 767.98px) {
        .events-container {
          width: 100%;
          height: auto; } }

    /* custom scrollbar */
    ::-webkit-scrollbar {
      width: 20px;
    }

    ::-webkit-scrollbar-track {
      background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #92a7af;
      border-radius: 20px;
      border: 6px solid transparent;
      background-clip: content-box;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #a8bbbf;
    }

    .events-container:after {
      clear: both; }

    .event-card {
      padding: 20px 0;
      max-width: 100%;
      display: block;
      background: #fff;
      border: none !important;
      margin: 20px;
      margin-left: 12px; }
      @media (max-width: 991.98px) {
        .event-card {
          margin: 10px; } }
      @media (max-width: 767.98px) {
        .event-card {
          margin: 0;
          background: #e6e6e6; } }

    .event-count, .event-name, .event-cancelled {
      display: inline;
      padding: 0 10px;
      font-size: 1rem; }

    .event-count {
      color: #7e0cf5;
      text-align: right; }

    .event-name {
      padding-right: 0;
      text-align: left; }

    .event-cancelled {
      color: #cd4dcc;
      text-align: right; }

    /*  Calendar wrapper */
    .calendar-container {
      position: relative;
      margin: 0 auto;
      height: 100%;
      width: 100%;
      border-radius: 10%;
      background: #F2E2E2;
      font: 13px Helvetica, Arial, san-serif;
      display: inline-block;
      padding: 20px;
      float: left; }
      @media (max-width: 991.98px) {
        .calendar-container {
          padding: 0; } }
      @media (max-width: 767.98px) {
        .calendar-container {
          padding: 0;
          width: 100%; } }

    .calendar-container:after {
      clear: both; }

    .calendar {
      width: 100%;
      padding: 0; }

    /* Calendar Header */
    .year-header {
      height: 40px;
      text-align: center;
      position: relative;
      color: #fff;
      border-top-left-radius: 3px;
      margin-top: 20px; }

    .year-header span {
      display: inline-block;
      font-size: 20px;
      line-height: 40px;
      color: #000; }

    .left-button, .right-button {
      cursor: pointer;
      width: 28px;
      text-align: center;
      position: absolute;
      color: #000 !important;
      -webkit-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      font-size: 14px !important; 
	}
		  
      .left-button:hover, .right-button:hover {
        color: #7e0cf5 !important; 
		  }

    .left-button {
      left: 0; 
		  }

    .right-button {
      right: 0;
      top: 0; 
		  }

    /* Buttons */
    .button {
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      font-size: 1rem;
      border-radius: 25px;
      padding: 0.65rem 1.9rem;
      -webkit-transition: .2s ease all;
      -o-transition: .2s ease all;
      transition: .2s ease all;
      color: white;
      border: none;
      background: #7e0cf5; }
      .button.button-white {
        background: #fff;
        color: #000; }
      .button:focus {
        -webkit-box-shadow: none;
        box-shadow: none;
        outline: none; }

    #cancel-button {
      background: #cd4dcc; }

    #add-button {
      display: block;
      position: absolute;
      right: 20px;
      bottom: 20px; }

    #add-button:hover, #ok-button:hover, #cancel-button:hover {
      -webkit-transform: scale(1.03);
      -ms-transform: scale(1.03);
      transform: scale(1.03); }

    #add-button:active, #ok-button:active, #cancel-button:active {
      -webkit-transform: translateY(3px) scale(0.97);
      -ms-transform: translateY(3px) scale(0.97);
      transform: translateY(3px) scale(0.97); }

    /* Days/months tables */
    .days-table, .dates-table, .months-table {
      border-collapse: separate;
      text-align: center; }

    .dates-table td {
      border-spacing: 5px;
    }

    .day {
      height: 26px;
      width: 26px;
      padding: 0 10px;
      line-height: 26px;
      border: 2px solid transparent;
      text-transform: uppercase;
      font-size: 10px;
      color: #000; }

    .month {
      cursor: default;
      height: 26px;
      width: 26px;
      padding: 0 2px;
      padding-top: 10px;
      line-height: 26px;
      text-transform: uppercase;
      font-size: 14px;
      color: #cccccc;
      -webkit-transition: all 250ms;
      -o-transition: all 250ms;
      transition: all 250ms; }
      @media (max-width: 991.98px) {
        .month {
          font-size: 8px; } }
      @media (max-width: 767.98px) {
        .month {
          font-size: 10.5px; } }

    .active-month {
      font-weight: 700;
      color: #000; }

    .month:hover {
      color: #326771; }

    /*  Dates table */
    .table-date {
      background: #BFBFBF;
      cursor: default;
      color: white;
      height: 26px;
      width: 26px;
      font-size: 16px;
      font-weight: bold;
      padding: 10px;
      line-height: 26px;
      text-align: center;
      border-radius: 10%;
      border: 2px solid transparent;
      -webkit-transition: all 250ms;
      -o-transition: all 250ms;
      transition: all 250ms;
      position: relative; }
/* 
    .table-date.nil {
      background: #F2E2E2;
    } */
		  
    .table-date:not(.nil):hover {
      border-color: #ed5656; }

    .event-date {
      border-color: #326771;
      background: #326771;
      color: #fff; }
      .event-date:after {
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        content: '';
        background: #28a745; }

    .active-date {
      background: #E88B45;
      color: #fff; }

    .event-date.active-date {
      background: #E88B45; }

    /* input dialog */
    .dialog {
      z-index: 5;
      background: #000;
      position: absolute;
      width: 50%;
      height: 500px;
      top: 0;
      right: 0;
      display: none; }
      @media (max-width: 767.98px) {
        .dialog {
          width: 100%; } }

    .dialog-header {
      margin: 20px;
      color: #fff;
      text-align: center;
      font-size: 28px; }

    .form-container {
      margin-top: 25%; }

    .form-label {
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 1px;
      color: rgba(255, 255, 255, 0.9); }

    .input {
      border: none;
      background: none;
      border-bottom: 1px rgba(255, 255, 255, 0.2) solid;
      display: block;
      margin-bottom: 50px;
      width: 300px;
      height: 20px;
      text-align: center;
      -webkit-transition: border-color 250ms;
      -o-transition: border-color 250ms;
      transition: border-color 250ms;
      color: #fff; }

    .input:focus {
      outline: none;
      border-color: #fff; }

    .error-input {
      border-color: #cd4dcc; }

  </style>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="page" class="site" style="background: #FFF3E9;">

    <header id="masthead" class="site-header">

      <div class="fixed-top bg-light">

        <nav id="nav-main" class="navbar navbar-expand-lg">

          <div class="container">

            <!-- Navbar Brand Mobile -->
            <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/bemfh.png" alt="logo" class="logo xs">
            </a>
            
            <!-- Navbar Brand Desktop -->
            <div class="d-none d-md-flex align-items-center">
              <a class="navbar-brand md" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logoundip.svg" alt="logo undip" class="logo md">
              </a>
              <a class="navbar-brand md" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/bemfh.png" alt="logo bem" class="logo md">
              </a>
              <a class="navbar-brand md" href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-kelopakbunga.png" alt="logo juang asa" class="logo md">
              </a>
            </div>
            
            <h6 class="landing-icon-text fw-bolder mt-2 mb-2 d-none d-md-block" style="color: #C14953;">
              BEM FAKULTAS HUKUM 
              <p class="mb-0">UNIVERSITAS DIPONEGORO</p>
            </h6>

            <div class="collapse navbar-collapse d-none d-lg-block" id="bootscore-navbar-desktop">
             <!-- Offcanvas Navbar -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
              <div class="offcanvas-header bg-light">
                <span class="h5 mb-0"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <!-- Bootstrap 5 Nav Walker Main Menu -->
                <?php
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <!-- Bootstrap 5 Nav Walker Main Menu End -->
              </div>
            </div>


            <div class="header-actions d-flex align-items-center">

              <!-- Top Nav Widget -->
              <div class="top-nav-widget">
                <?php if (is_active_sidebar('top-nav')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Searchform Large -->
              <div class="d-none d-lg-block ms-1 ms-md-2 top-nav-search-lg">
                <?php if (is_active_sidebar('top-nav-search')) : ?>
                  <div>
                    <?php dynamic_sidebar('top-nav-search'); ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Search Toggler Mobile -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2 top-nav-search-md" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                <i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span>
              </button>

              <!-- Navbar Toggler -->
              <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
              </button>

            </div><!-- .header-actions -->

          </div><!-- .container -->

        </nav><!-- .navbar -->

        <!-- Top Nav Search Mobile Collapse -->
        <div class="collapse container d-lg-none" id="collapse-search">
          <?php if (is_active_sidebar('top-nav-search')) : ?>
            <div class="mb-2">
              <?php dynamic_sidebar('top-nav-search'); ?>
            </div>
          <?php endif; ?>
        </div>

      </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->