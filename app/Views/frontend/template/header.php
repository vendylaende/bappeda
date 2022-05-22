<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#0B74E7', 'colorSecondary': '#0C61E0', 'colorTertiary': '#2baab1', 'colorQuaternary': '#383f48'}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/frontassets/css/fontawesome/css/all.min.css">

    <title><?php echo $judul ?></title>

    <meta name="keywords" content=">Banggai Laut">
    <meta name="description" content="Website Resmi Badan Perencanaan Pembangunan Daerah Kabupate Banggai Laut">
    <meta name="author" content="Bappeda Banggai Laut">

    <link rel="shortcut icon" href="<?= base_url() ?>/frontassets/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>/frontassets/img/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <link id="googleFonts" href="<?= base_url() ?>/frontassets/css/css.css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/frontassets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/frontassets/vendor/animate/animate.compat.css">

    <link rel="stylesheet" href="<?= base_url() ?>/frontassets/vendor/owl.carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/theme.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/theme-elements.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/theme-blog.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/skins/skin-corporate-4.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/css/custombappenas.css">

    <!-- Head Libs -->
    <script src="https://www.bappenas.go.id/front_assets/vendor/modernizr/modernizr.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-7641248-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-7641248-1');
    </script>




    <style>

    </style>
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/vendor/rs-plugin/css/navigation.css">



    <link rel="stylesheet" href="https://www.bappenas.go.id/front_assets/newticker/css/jquery.newsticker.min.css">

</head>

<body data-plugin-page-transition="">
    <div class="body">
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top" style="background:#00508f;border-bottom:3px #faa634 solid;">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                                <span class="nav-link ps-0 text-light" href="#" style="cursor: text;"><i class="fa-solid fa-calendar-days"></i>
                                                    <?php echo Date('l d F Y'); ?> </span>
                                            </li>
                                            <!-- untuk menyembunyikan block switch bahasa dan sosial media, tambahkan class d-done -->
                                            <!-- <li class="nav-item dropdown nav-item-left-border d-sm-block nav-item-left-border-remove nav-item-left-border-md-show">
                                                <a class="nav-link text-light" href="https://www.bappenas.go.id/lang/id" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="https://www.bappenas.go.id/front_assets/img/blank.gif" class="flag flag-id" alt="Indonesia"> Indonesia
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                                    <a class="dropdown-item" href="https://www.bappenas.go.id/lang/en"><img src="https://www.bappenas.go.id/front_assets/img/blank.gif" class="flag flag-us" alt="English"> English</a>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <!-- untuk menyembunyikan block switch bahasa dan sosial media, tambahkan class d-done -->
                                    <ul class="header-social-icons social-icons d-sm-block social-icons-clean social-icons-icon-light">
                                        <li class="social-icons-facebook"><a href="https://www.facebook.com/pages/Kementerian-PPNBappenas/153022218082084?&kid=1415747503" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="https://twitter.com/BappenasRI?&kid=1415747503" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-instagram"><a href="https://www.instagram.com/bappenasri/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCx-7i_Oqg5pDX_2EBG_XpeQ" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/">
                                        <img alt="Porto" width="160" data-sticky-width="150" src="<?= base_url() ?>/frontassets/img/logotext.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="<?php if ($menu == 1) {
                                                                    echo "active";
                                                                } ?> dropdown-item" href="/">
                                                        Beranda </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="<?php if ($menu == 2) {
                                                                    echo "active";
                                                                } ?> dropdown-item dropdown-toggle " href="#">
                                                        Tentang Kami </a>
                                                    <ul class="dropdown-menu">
                                                        <li style="padding:5px 10px;font-size:14px;font-weight:bold;">
                                                            Profile </li>
                                                        <li><a class="<?php echo $menu; ?> dropdown-item" href="/visimisi">
                                                                Visi, Misi, Tujuan dan Renstra </a></li>
                                                        <li><a class="dropdown-item" href="errors/html/underconstruction.php">
                                                                Peran dan Fungsi </a></li>

                                                        <li style="padding:5px 10px;font-size:14px;font-weight:bold;">
                                                            Organisasi </li>
                                                        <li><a class="dropdown-item" href="https://www.bappenas.go.id/struktur-organisasi">
                                                                Struktur Organisasi </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="<?php if ($menu == 3) {
                                                                    echo "active";
                                                                } ?> dropdown-item dropdown-toggle" href="#">
                                                        Data dan Publikasi </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="/publikasi">
                                                                Dokumen Perencanaan </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Data Statistik </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle " href="#">
                                                        Berita </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Berita Utama </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle " href="#">
                                                        Dokumentasi </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Foto </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">
                                                                Vidio </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                                <li>
                                                    <a class=" dropdown-item" href="#" target="_blank">
                                                        PPID
                                                    </a>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form name="form-pencariandata-on-header" role="search" action="https://www.bappenas.go.id/pencarian-data" method="GET">
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="headerSearch" name="keyword" type="search" value="" placeholder="Search...">
                                                    <button class="btn" type="submit">
                                                        <i class="fas fa-search header-nav-top-icon"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>