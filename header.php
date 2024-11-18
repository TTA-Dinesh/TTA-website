<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thethoughtfulagency
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'thethoughtfulagency' ); ?></a>

	<header id="masthead" class="site-header mt-5">
		
		<div class="site-branding container mx-auto flex">
		<button class="flex flex-col items-center justify-center w-8 h-8 space-y-1 mr-8">
		<span class="block w-9 h-0.5 bg-black"></span>
		<span class="block w-9 h-0.5 bg-black"></span>
		<span class="block w-9 h-0.5 bg-black"></span>
		</button>
			<?php
			the_custom_logo();
			?>
		</div>
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thethoughtfulagency' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> -->

		<div class="container mx-auto mt-20">
			<div class="columns-6">
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				<div class="disciplines-list font-mon">
					Our  Discipline
				</div> 
				
			</div>
		</div>
		
		<div class="container mx-auto mt-48 mb-48">
			<div class="header_banner">
				<h2 class="text-9xl mb-20">
				<strong class="font-centra">Paid Social Media <br>
						Advertising Agency<br></strong>
					<span class="font-eiko">for fashion &<br>
					lifestyle brands</span><span class="w-20 h-20 rounded-full text-blue">.</span>
				</h2>
				<button class="bg-blue text-white pt-3 pb-3 pl-5 pr-5 rounded-md font-mon text-sm flex items-center"> <svg class="mr-5" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
  <circle cx="6.32812" cy="6.23438" r="5" stroke="#F5F5F5"/>
</svg> GET IN TOUCH</button>
			</div>
		</div>


	</header><!-- #masthead -->
