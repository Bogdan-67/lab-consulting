<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
     <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <!-- Jquery UI CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery-ui.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
    <!-- Slick-theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.min.css">
    <!-- Arctic Modal CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.arcticmodal-0.3.css">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/lightbox.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">
    <title>LAB Consulting</title>
    <?php wp_head() ?>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader" class="visible"></div>

    <!-- Fixed navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navigation">
        <div class="container">
                <a href="<?php echo get_permalink(2) ?>" class="navbar-brand">
                    <img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="LAB Consulting" class="header-logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div id="nav-icon3">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array(
                            'theme_location'  => '',
                            'menu'            => 'Основное',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0 d-flex',
                            'menu_id'         => 'nav-menu',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
                  <button class="call-btn call-btn_header ms-auto">
                      <i class="fa-solid fa-phone-flip"></i>
                        Заказать звонок
                  </button>
                </div>
        </div>
    </nav>