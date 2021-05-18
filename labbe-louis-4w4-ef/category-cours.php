<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
 
get_header();
?>

<main id="primary" class="site-main">

	<?php if ( have_posts() ) : ?>

	<header class="page-header">

		<?php
				// echo (is_category('Projets')? '### oui projets ###': '### non ###');
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
		
				?>

	</header><!-- .page-header -->
	<section class="session">
		<?php
			/* Start the Loop */

			$precedent = "XXXXXX";

			while ( have_posts() ) :
				the_post();

				convertirTableau($tPropriété);?>



		<!--- article ---->
        

		<?php if (in_array($tPropriété['session'], ['1', '2', '3', '4', '5', '6']) ) : 
        
			if ("XXXXXX" != $precedent)	: ?>
			
		<h1> <?php echo $tPropriété['session'] ?></h1>

		<?php endif; 

		endif; ?>

		<?php get_template_part( 'template-parts/content', 'cours-session' ); ?>


		<?php  $precedent = $tPropriété['session'];
		

			endwhile;?>

	</section>

	<?php endif; ?>


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

function convertirTableau(&$tPropriété)
{
	
	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}