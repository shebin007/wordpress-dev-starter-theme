<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php 
print_r(get_theme_mod('sanad_top_button_1'));
?>
<header >
    <div class="container">
        <div class="main-logo-container">
          <div class="main-logo">
              <?= 
                  the_custom_logo()
              ?>
              <a href="<?= site_url() ?>" class="custom-logo-link" rel="home" aria-current="page">
                  <img src="<?=  get_theme_mod('sanad_logo'	 ) ?>" class="scroll-logo" />
              </a>
          </div>
         
        </div>
        <div class="before-nav-bar">
          <div class="btn-group">
            <a href="" class="secondary-btn">BOOK A TABLE</a>
            <a href="" class="secondary-btn">BECAME A MEMBER</a>
          </div>
          <div class="navlink">
            <a  class="link" href="#">MEMBERS LOGIN</a>
            <a  class="link" href="#">العربية</a>
          </div>
        </div>
        <nav>
          <div class="hamburger-menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-cross line-1"></div>
            <div class="menu-cross  line-2"></div>
          </div>
		  <?php
		  	$args = array(
				'container' => 'ul',
				'menu_class' => 'navbar',
				'theme_location'  => 'primary',
			);
		 	wp_nav_menu( $args );
		  ?>
        </nav>
    </div>
</header>

<main id="primary" class="site-main" role="main">
