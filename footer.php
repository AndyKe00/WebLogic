<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebLogic
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="ensemble-colonne-footer">
				<div class="colonne-footer">
					<h3>Le programme</h3>
					<a href="">Conditions d'admissions</a>
					<a href="">Cours offerts</a>
					<a href="">Grille de cheminement</a>
					<a href="">Professeurs</a>
				</div>
				
				<div class="colonne-footer">
					<h3>Vie étudiante</h3>
					<a href="">La galerie de projets</a>
					<a href="">Témoignages d'étudiants</a>
				</div>
				
				<div class="colonne-footer">
					<h3>Perspectives d'avenir</h3>
					<a href="">Stages</a>
					<a href="">Marché du travail</a>
					<a href="">Études supérieurs</a>
				</div>
			</div>
			
			<div class="footer-section-bas">
				<h3>Suivez-nous</h3>
			<!--ce sera des img au lieu de divs, mais ce nest qu'à titre indicatif-->
			<div class="icon-footer"></div>
			<div class="icon-footer"></div>
			<div class="icon-footer"></div>
			<div class="icon-footer"></div>
			</div>
			
			
			<!--<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'weblogic' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'weblogic' ), 'WordPress' );
				?>
			</a>-->
			<!--<span class="sep"> | </span>-->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'weblogic' ), 'weblogic', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
