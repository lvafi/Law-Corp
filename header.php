<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law-corp
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'law-corp' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<i class="fa fa-phone" aria-hidden="true"></i><span class="phone-number">604.770.2854</span>
		<i class="fa fa-envelope" aria-hidden="true"></i><span class="email">info@persaj.com</span>
		
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
	      <div>
				   <h1><a href="#"><img src='http://localhost:8888/law%20corporation%20Bableen/wp-content/uploads/2019/03/persaj-logo-01.png'  width='240'/></a></h1>
				</div>	 
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'law-corp' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
