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

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B71ZPZTV6W"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-B71ZPZTV6W');
    </script>

  </head>
<body>

    <!-- Page loading spinner -->
    <div class="page-loading">
      <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Cargando...</span>
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
              <img src="https://imperiomexico.com.mx/assets/img/og_image_imperiomexico2023.png" class="card-img-top" alt="Card image">
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
                  <a href="<?= $rootPath ?>" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hotel</a>
                  <div class="dropdown-menu">
                    <div class="d-lg-flex pt-lg-3">
                      <div class="mega-dropdown-column">
                        <ul class="list-unstyled mb-3">
                          <li><a href="<?= $rootPath ?>#hotel" class="dropdown-item py-1">Ubicación</a></li>
                          <li><a href="<?= $rootPath ?>reservacion" class="dropdown-item py-1">Reservacion</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Campeonato</a>
                  <div class="dropdown-menu">
                    <div class="d-lg-flex pt-lg-3">
                      <div class="mega-dropdown-column">
                        <ul class="list-unstyled mb-3">
                          <li><a href="https://drive.google.com/file/d/1CKO5o1zFFcI6biAot4R6YtlMp_HVgcqp/view?usp=sharing" target="_blank" class="dropdown-item py-1">Reglamento</a></li>
                          <li><a href="<?= $rootPath ?>#inscripciones" class="dropdown-item py-1">Inscripciones</a></li>
                          <li><a href="<?= $rootPath ?>registro/solistas" class="dropdown-item py-1">Solistas</a></li>
                          <li><a href="<?= $rootPath ?>registro/parejas" class="dropdown-item py-1">Parejas</a></li>
                          <li><a href="<?= $rootPath ?>registro/grupos" class="dropdown-item py-1">Grupos</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="<?= $rootPath ?>#artistasinvitados" class="nav-link">Artistas Invitados</a>
                </li>
                <li class="nav-item">
                  <a href="<?= $rootPath ?>#conciertos" class="nav-link">Conciertos Internacionales</a>
                </li>
                <li class="nav-item">
                  <a href="<?= $rootPath ?>#pases" class="nav-link">Costos</a>
                </li>
                <li class="nav-item">
                  <a href="<?= $rootPath ?>#sede" class="nav-link">Sede</a>
                </li>
                
              </ul>
            </div>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </header>

    

      


    
