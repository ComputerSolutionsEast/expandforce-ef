<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
<!-- Owl Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/owl.theme.default.css">
<!-- Fonts Fontawesome -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/fontawesome-all.css">
<!-- CSS bootstrap Plugin  -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri()?>/assets/css/stellarnav.css">
<!-- Animation STYLESHEETS-->
<!-- Style -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="preload">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/fonts.css" rel="preload">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/custom.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/responsive.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-540216-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-540216-11');
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- HEADER SCRIPTS	-->
<link rel="profile" href="https://gmpg.org/xfn/11">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
  <!--Start Header-->
	<header id="header">
    <div class="primary-header">
      <div class="container-fluid">
        <div class="row">
          <aside class="col-xl-6 OfferText">
            <p class="mb-2 mb-xl-0 text-white"><i class="fal fa-exclamation-triangle"></i> Are you a driven and motivated 1st Line IT Support Engineer? <a href="https://ef-careers.powerappsportals.com" title="Click to read more" target="_blank"><u>Now Hiring</u></a></p>
          </aside>
          <aside class="col-xl-6 TopBar">
            <nav class="top-navigation">
              <ul>
                <!-- <li><a target="_blank" href="https://subscriptions.computersolutionseast.com" class="btn btn-danger btn-sm btn-round">Customer Portal</a></li> -->
                <li><a href="tel:(914)-355-5800"><i class="fas fa-phone-square"></i>  (954) 271-5970</a></li>
                <li><a href="mailto:info@expandforce.com"><i class="fas fa-envelope"></i> info@expandforce.com</a></li>
              </ul>
            </nav>
          </aside>
        </div>
      </div>
    </div>
    <div class="secondary-header">
      <div class="container-fluid">
        <aside class="logo"> <a class="navbar-brand" href="<?php echo get_home_url() ?>"><img alt="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg"></a> </aside>
      </div>
    </div>
    <nav class="menu">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="stellarnav d-flex">
          <!-- <ul class="main-menu mr-auto"> -->
						<?php
						wp_nav_menu( array(
							'menu' => 'Main Menu',
							'container' => 'li',
							'menu_id'         => '',
							'menu_class'=> 'main-menu mr-auto'
						) );
						?>
          <form class="form-inline my-2 my-lg-0 desktop-view" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
              <input type="text" class="form-control border-right-0" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
              <span class="input-group-append">
              <button class="btn border border-left-0" type="submit"><i class="fa fa-search"></i></button>
              </span></div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>
