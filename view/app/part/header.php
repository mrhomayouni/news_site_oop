<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Magazine</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?= helper::url("public/app/css/linearicons.css") ?>">
    <link rel=" stylesheet" href="<?= helper::url("public/app/css/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= helper::url("public/app/css/bootstrap.css") ?>">
    <link rel=" stylesheet" href="<?= helper::url("public/app/css/magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?= helper::url("public/app/css/nice-select.css") ?>">
    <link rel=" stylesheet" href="<?= helper::url("public/app/css/animate.min.css") ?>">
    <link rel="stylesheet" href="<?= helper::url("public/app/css/owl.carousel.css") ?>">
    <link rel=" stylesheet" href="<?= helper::url("public/app/css/jquery-ui.css") ?>">
    <link rel="stylesheet" href="<?= helper::url("public/app/css/main.css") ?>">
</head>

<body>
<header>

    <div class=" header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                    <ul>
                        <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a>
                        </li>
                        <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <a href="index.html">
                        <img class="img-fluid" src="img/logo.png" alt="">
                    </a>
                </div>
                <?php if (isset($banners_top)) {?>
                    <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                        <img class="img-fluid"  src="<?=helper::url($banners_top->image)?>" alt="">
                    </div>
                <?php } else {?>
                    <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                        <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container main-menu" id="main-menu">
        <div class="row align-items-center justify-content-between">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <?php foreach ($all_menus as $menu) { ?>
                        <?php if ($menu->parent_id == 0) { ?>
                            <li class="menu-active"  ><?= $menu->name ?></a>
                                <ul>
                                    <?php foreach ($all_menus as $menu_item) { ?>

                                        <?php if ($menu_item->parent_id == $menu->id) { ?>

                                            <li><a href="<?=$menu_item->url?>" target="_blank" > <?= $menu_item->name ?> </a></li>

                                        <?php } ?>

                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
            <div class="navbar-right">
                <form class="Search" action="" >
                    <input type="text" class="form-control Search-box" name="Search-box" id="Search-box"
                           placeholder="جستجو">
                    <label for="Search-box" class="Search-box-label">
                        <span class="lnr lnr-magnifier"></span>
                    </label>
                    <span class="Search-close">
								<span class="lnr lnr-cross"></span>
                        </span>
                </form>
            </div>
        </div>
    </div>
</header>
