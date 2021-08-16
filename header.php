<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xcode3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary">
<?php esc_html_e( 'Skip to content', 'xcode3' ); ?>
</a>
<header id="masthead" class="site-header">
  <div class="xc-top-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="xc-top-bar-left">
            <ul>
              <li><i class="fa fa-phone-alt"></i><a href="tel:+1365895215">+1365895215</a></li>
              <li><i class="fa fa-envelope"></i><a href="mailto:info@creativetheme.com">info@creativetheme.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="xc-top-bar-right">
            <ul>
              <li><i class="fa fa-clock"></i> Mon-Sat/ 09:00-18:00, Sun / 10:00-18:00</li>
            </ul>
            <ul class="xc-social-link">
              <li><a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://telegram.org/" target="_blank"><i class="fa fa-telegram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="xc-header-main">
  <div class="container">
  <div class="xc-header-left">
  <div class="site-branding">
  <a href="http://192.168.1.73/xcode3/"><img src="http://192.168.1.73/xcode3/wp-content/themes/xcode3/images/xc-logo.png" alt="logo"/></a>
  </div>
  </div>
  <!-- .site-branding -->
  <div class="xc-header-right">
  <nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
    <?php esc_html_e( 'Primary Menu', 'xcode3' ); ?>
    </button>
    
    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
  </nav>
  <div class="search1">
    <button id="click" class="search-btn"><i class="fa fa-search"></i></button>

    <form id="search-field" class="search-field1" action="">
      <input type="text" placeholder="search">
      <div class="xc-search-submit">
      <button type="submit" value="search">
      <i class="fa fa-search"></i></button>
  </div>
    </form>
  </div>
</div>
</div>
</div>
  <!-- #site-navigation --> 
  <script>
 document.getElementById("click").addEventListener("click", function () {
  document.getElementById("search-field").classList.toggle("form-active");
});
 </script>
</header>
<!-- #masthead --> 
