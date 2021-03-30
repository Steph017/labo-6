<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!-- Debut du carrousel -->
<?php
		  ?>
		<section class="carrousel">
				<div>
					<a href="http://localhost/4w4/2020/10/07/582-1w1-mise-en-page-web-75h/">
						<img src="https://s2.svgbox.net/illlustrations.svg?ic=app-development&color=000000" width="250" height="250">
					</a>
					<p>Mise en page web - Session 1</p>
				</div>
				<div>
					<a href="http://localhost/4w4/2020/10/07/582-3c1-design-dinteractivite-75h/">
						<img src="https://s2.svgbox.net/illlustrations.svg?ic=ui-ux&color=000000" width="250" height="250">
					</a>
						<p>Design d'interactivité - Session 3</p>
				</div>
				<div>
					<a href="http://localhost/4w4/2020/10/07/description-du-cours-582-1m2-conception-graphique-et-imagerie-matricielle/">
						<img src="https://s2.svgbox.net/illlustrations.svg?ic=wacom-tablet&color=000000" width="150" height="150">
					</a>
						<p>Conception graphique et imagerie matricielle - Session 1</p>
				</div>
		</section>
		<section class="carrouselBoutton">
		<input type="radio" id='un' name="radio" value="other">
		<input type="radio" id='deux' name="radio" value="other">
		<input type="radio" id='trois' name="radio" value="other">
		</section>
		<?php  ?>	
	<!-- fin du carrousel -->

	
		<nav id="site-navigation" class="main-navigation">
			<button id="burger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div></div>
        		<div></div>
        		<div class='ouvrirX3'></div>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		
		
		
	</header><!-- #masthead -->
