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
					<!-- code pour aller chercher les categories -->		
					<section class='type-cours <?php echo (preg_replace('/\s+|\//', '', $typeCours))?>'>
				<?php endif ?>

			   <article>
			   		<p class="icone"><?php echo selectionne_icone($typeCours);?></p>
					<a class="titre" href="<?php echo get_permalink(); ?>"> <?php echo $titre; ?></a>
					<p class="infoCours"> <?php echo $sigle . "-" . $nbHeure . "-" . $typeCours; ?> </p>  
					<p class="infoCours" > session : <?php echo $session; ?> </p>
					<?php echo selectionne_SVG($typeCours);?>
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

/*-------------------------------------------------------------
ajout d'icone en fonction du type de cours
--------------------------------------------------------------- */
function selectionne_icone($typeCours){
	switch($typeCours){
		case "Web" :
			return '<img src="https://s2.svgbox.net/hero-solid.svg?ic=code&color=000000" width="50" height="50">';
		
		case "Spécifique" :
			return '<img src="https://s2.svgbox.net/hero-solid.svg?ic=badge-check&color=000000" width="50" height="50">';
		
		case "Jeu" :
			return '<img src="https://s2.svgbox.net/hero-solid.svg?ic=video-camera&color=000000" width="50" height="50">';

		case "Image 2d/3d" :
			return '<img src="https://s2.svgbox.net/hero-solid.svg?ic=color-swatch&color=000000" width="50" height="50">';
		
		case "Conception" :
			return '<img src="https://s2.svgbox.net/hero-solid.svg?ic=desktop-computer&color=000000" width="50" height="50">';
	}
}
/*-------------------------------------------------------------
ajout de SVG du type de cours
--------------------------------------------------------------- */
function selectionne_SVG($typeCours){
	switch($typeCours){
		case "Web" :
			return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E2F8F5" fill-opacity="1" d="M0,192L18.5,170.7C36.9,149,74,107,111,106.7C147.7,107,185,149,222,170.7C258.5,192,295,192,332,208C369.2,224,406,256,443,250.7C480,
			245,517,203,554,154.7C590.8,107,628,53,665,53.3C701.5,53,738,107,775,112C812.3,117,849,75,886,90.7C923.1,107,960,181,997,229.3C1033.8,277,1071,299,1108,282.7C1144.6,267,1182,213,1218,197.3C1255.4,181,1292,203,1329,176C1366.2,149,1403,75,1422,37.3L1440,0L1440,
			320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,
			320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>';
		
		case "Spécifique" :
			return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#CDF3EE" fill-opacity="1" d="M0,192L18.5,170.7C36.9,149,74,107,111,106.7C147.7,107,185,149,222,170.7C258.5,192,295,192,332,208C369.2,224,406,256,443,250.7C480,245,517,
			203,554,154.7C590.8,107,628,53,665,53.3C701.5,53,738,107,775,112C812.3,117,849,75,886,90.7C923.1,107,960,
			181,997,229.3C1033.8,277,1071,299,1108,282.7C1144.6,267,1182,213,1218,197.3C1255.4,181,1292,203,1329,176C1366.2,149,1403,75,1422,37.3L1440,
			0L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,
			320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>';
		
		case "Jeu" :
			return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#B9EEE7" fill-opacity="1" d="M0,192L18.5,170.7C36.9,149,74,107,111,106.7C147.7,107,185,149,222,170.7C258.5,192,295,192,332,208C369.2,224,406,256,443,250.7C480,245,517,203,554,154.7C590.8,107,628,53,665,53.3C701.5,
			53,738,107,775,112C812.3,117,849,75,886,90.7C923.1,107,960,181,997,229.3C1033.8,277,1071,299,1108,282.7C1144.6,267,1182,213,1218,197.3C1255.4,181,1292,203,1329,176C1366.2,149,1403,75,1422,37.3L1440,0L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,
			1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>';

		case "Image 2d/3d" :
			return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#A4E9E0" fill-opacity="1" d="M0,192L18.5,170.7C36.9,149,74,107,111,106.7C147.7,107,185,149,222,170.7C258.5,192,295,192,332,208C369.2,224,406,256,443,250.7C480,
			245,517,203,554,154.7C590.8,107,628,53,665,53.3C701.5,53,738,107,775,112C812.3,117,849,75,886,90.7C923.1,107,960,181,997,229.3C1033.8,277,1071,299,1108,282.7C1144.6,267,1182,213,1218,197.3C1255.4,181,1292,203,1329,176C1366.2,149,1403,75,1422,37.3L1440,0L1440,320L1421.5,320C1403.1,320,1366,320,1329,
			320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>';
		
		case "Conception" :
			return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8FE4D9" fill-opacity="1" d="M0,192L18.5,170.7C36.9,149,74,107,111,106.7C147.7,107,185,149,222,170.7C258.5,192,295,192,332,208C369.2,224,406,256,443,250.7C480,245,517,203,554,154.7C590.8,107,628,53,665,53.3C701.5,53,738,107,775,112C812.3,117,849,75,886,90.7C923.1,107,960,181,997,229.3C1033.8,277,1071,299,1108,282.7C1144.6,267,
			1182,213,1218,197.3C1255.4,181,1292,203,1329,176C1366.2,149,1403,75,1422,37.3L1440,0L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,
			111,320C73.8,320,37,320,18,320L0,320Z"></path></svg>';
	}
}