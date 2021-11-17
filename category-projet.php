<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebLogic
 */

get_header();
?>
///////////////////////////////////////////////////////////////////////////////TEST CATEGORY PROJET.PHP
	<main id="primary" class="site-main">
		
	
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="galerie-projetPHP">
			<?php
			
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
				
				<div> 
				<?php the_post_thumbnail('thumbnail');?>
				
				

			<?php endwhile;?>
			</div>
			

		

		<?php endif;?>
		
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
