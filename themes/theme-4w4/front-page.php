<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

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

//////////////////////////// FRONT-PAGE.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="list-cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXXX";
			while ( have_posts() ) :
				the_post();
                $titre_grand = get_the_title();
				$session = substr($titre_grand,4, 1);
				$nbHeure = substr($titre_grand,-4, 3);
				$titre = substr($titre_grand,8, -6);
				$sigle = substr($titre_grand,0, 7);
				$typeCours = get_field('type_de_cours');


               if ( $typeCours != $precedent) : ?>
					<?php if ($precedent != "XXXXXXX"): ?>
					</section>
					<?php endif ?>
					<h2><?php echo $typeCours; ?></h2>		
					<section>
				<?php endif ?>

			   <article>
					<p> <?php echo $sigle . "-" . $nbHeure . "-" . $typeCours; ?> </p>
					<a href="<?php echo get_permalink(); ?>"> <?php echo $titre; ?></a>   
					<p> session : <?php echo $session; ?> </p>
			   </article>
			   
		<?php
		$precedent = $typeCours;
	 	endwhile; ?>
		
				</section>
		<?php endif; ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
