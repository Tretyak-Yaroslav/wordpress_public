<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Публикационное агентство Перо </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
</head>

<body>
    <!-- support bar area start -->
  
    <!-- support bar area end -->
    
    <!-- ============Start Navigation ===== -->
    <nav class="navbar navbar-area navbar-expand-lg navbar-light bg-light myHeader" >
        <div class="container nav-container">
        <div class="navbar-header">
            <a class="navbar-brand logo" href="http://1378294.ik240062.web.hosting-test.net/">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo image">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php
      $args = array(
          'theme_location' => '',
          'menu' => '',
          'container' => 'ul',
          'container_class' => 'navbar-nav',
          'container_id' => '',
          'menu_class' => 'navbar-nav',
          'menu_id' => '',

          'echo' => true,
          'falback_cd' => 'wp_page_menu',
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'items_wrape' => '<ul id ="%1$s" class = "%2$s">%3$s</ul>',
          'depth' => 0,
          'walker' => '',
      );
wp_nav_menu($args);
      ?>
	   </div>
        </div>
    </nav> 