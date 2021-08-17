<?php
/**
 * The template for displaying the header
 *
 * @package Fiberr
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header id="home" class="theme-header">
  	<nav class="navbar navbar-expand-lg bg-light theme-nav-default">
  		<div class="container-fluid">
        <div class="theme-logo-search-wrap">
    			<a href="#home">
    				<img class="logo" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
    			</a>
          <form action="#" class="d-none d-sm-flex">
            <input type="search" class="theme-search-data" placeholder="search by keyword" required>
            <button type="submit" class="fas fa-search"></button>
          </form>
        </div>
  			<div class="collapse navbar-collapse">
  				<ul class="navbar-nav ml-auto">
  					<li class="nav-item"><a class="nav-link" href="#home">home<span></span></a></li>
  					<li class="nav-item"><a class="nav-link" href="#services">services<span></span></a></li>
  					<li class="nav-item"><a class="nav-link" href="#portfolio">portfolio<span></span></a></li>
  					<li class="nav-item"><a class="nav-link" href="#contactus">contact us<span></span></a></li>
  				</ul>
  			</div>
  			<a class="theme-mobile-menu d-lg-none" href="javascript:void(0)" onclick="openNav()">
  				<i class="fas fa-bars"></i>
  			</a>
  		</div>
      <div class="container-fluid d-sm-none"> 
        <div class="mobile-search-wrap">
          <form action="#">
            <input type="search" class="theme-search-data" placeholder="search by keyword" required>
            <button type="submit" class="fas fa-search"></button>
          </form>
        </div>
      </div>
  	</nav>
  </header><!-- .theme-header -->
  

  <!-- Start Header-Overlay Section -->
  <div class="theme-navbar-overlay" id="navoverlay">
    <div class="container-fluid">
      <div class="theme-overlay-wrap">
      <a href="javascrip:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <nav class="theme-overlay-nav w-100">
        <ul class="navbar-nav">
          <li class="nav-item side-item"><a class="nav-link" href="#home" onclick="closeNav()">home</a></li>
          <li class="nav-item side-item"><a class="nav-link" href="#services" onclick="closeNav()">services</a></li>
          <li class="nav-item side-item"><a class="nav-link" href="#portfolio" onclick="closeNav()">portfolio</a></li>
          <li class="nav-item side-item"><a class="nav-link" href="#contactus" onclick="closeNav()">contact us</a></li>
        </ul>
      </nav>
      <div class="theme-overlay-footer w-100">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i> </a> </li>
          <li><a href="#"><i class="fab fa-twitter"></i> </a> </li>
          <li><a href="#"><i class="fab fa-instagram"></i> </a> </li>
          <li><a href="#"><i class="fab fa-pinterest-p"></i> </a> </li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i> </a> </li>
        </ul>
        <p>© 2021 Helal Hossain. Made With Love by Themesindustry</p>
      </div>
      </div>
    </div>
  </div><!-- End Header-Overlay Section -->