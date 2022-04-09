<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?>
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($author); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($ogtitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($ogdescription); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogimagen); ?>">
     <!-- Favicon and Touch Icons -->
     <link rel="apple-touch-icon" sizes="180x180" href="<?= $rootPath ?>assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $rootPath ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $rootPath ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $rootPath ?>assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= $rootPath ?>assets/favicon/safari-pinned-tab.svg" color="#6366f1">
    <link rel="shortcut icon" href="<?= $rootPath ?>assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="<?= $rootPath ?>assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="<?= $rootPath ?>assets/vendor/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" media="screen" href="<?= $rootPath ?>assets/vendor/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" media="screen" href="<?= $rootPath ?>assets/vendor/lightgallery.js/dist/css/lightgallery.min.css"/>

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="<?= $rootPath ?>assets/css/theme.min.css">

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #131022;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      // let mode = window.localStorage.getItem('mode'),
      //     root = document.getElementsByTagName('html')[0];
      // if (mode !== undefined && mode === 'dark') {
      //   root.classList.add('dark-mode');
      // } else {
      //   root.classList.remove('dark-mode');
      // }
    </script>

    <!-- Page loading scripts -->
    <script>
      // (function () {
      //   window.onload = function () {
      //     const preloader = document.querySelector('.page-loading');
      //     preloader.classList.remove('active');
      //     setTimeout(function () {
      //       preloader.remove();
      //     }, 1000);
      //   };
      // })();
    </script>

  </head>
<body>

    <!-- Page loading spinner -->
    <div class="page-loading">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    
    <div class="modal fade sucessregistro" id="sucessregistro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Detalles de registro</h4>
          </div>
          <div class="modal-body">
            <div class="card mb-4">
              <img src="https://admin.eurosonlatino.com.mx/assets/images/mail-cover-impmx.jpg" class="card-img-top" alt="Card image">
              <div class="card-body">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="font-weight-medium alertaexitoso"> </span>                  
                </div>
                
                <p class=""card-text font-size-sm"">En breve recibirás un correo electrónico con los detalles de tu registro, no olvides verificar tu bandeja de correos no deseados, spam u otros(En correos Outlook).</p>

                <p class=""card-text font-size-sm""><strong>Si no lo recibiste 48hrs después de la compra, verifica tu bandeja de correos no deseados, spam u otros(En correos Outlook).</strong></p>

                <p class=""card-text font-size-sm"">En caso de no haberlo recibido favor de enviar un correo a <a href="mailto:info@imperiomexico.com.mx">info@imperiomexico.com.mx</a></p>
                <span class="text-muted font-size-xs">Esta página se redireccionará en <span id="testdiv"></span> segundos</span>
              </div>
            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Page wrapper for sticky footer -->
    <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
    <main class="page-wrapper">


      <!-- Navbar -->
      <!-- Remove "fixed-top" class to make navigation bar scrollable with the page -->
      <header class="header navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <div class="container px-3">
          <a href="#" class="navbar-brand pe-3">
            <img src="<?= $rootPath ?>assets/img/logo/logo-imperiomexico2022.png" width="47" alt="Imperio México">
            
          </a>
          <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="#" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="#artistasinvitados" class="nav-link">Artistas Invitados</a>
                </li>
                <li class="nav-item">
                  <a href="#pases" class="nav-link">Pases</a>
                </li>
                <li class="nav-item">
                  <a href="#sede" class="nav-link">Sede</a>
                </li>
                <li class="nav-item">
                  <a href="#concierto" class="nav-link">Concierto</a>
                </li>
              </ul>
            </div>
            <!-- <div class="offcanvas-footer border-top">
              <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
                <i class="bx bx-cart fs-4 lh-1 me-1"></i>
                &nbsp;Buy now
              </a>
            </div>       -->
          </div>
          <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
            <!-- <input type="checkbox" class="form-check-input" id="theme-mode"> -->
            <!-- <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label> -->
            <!-- <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label> -->
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i>
            &nbsp;Buy now
          </a> -->
        </div>
      </header>


      


    
