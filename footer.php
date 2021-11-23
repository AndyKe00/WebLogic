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
			<div class="ensemble-icon-footer">
			<a href="https://fr-ca.facebook.com/maisonneuvetim/"><img class="icon-footer" src="http://eddym10.sg-host.com/wp-content/uploads/2021/11/facebook-150x150-1.png" ></a>
			<a href="https://www.instagram.com/maisonneuvetim/?hl=fr"><img class="icon-footer" src="http://eddym10.sg-host.com/wp-content/uploads/2021/11/instagram-150x150-1.png" ></a>
			<a href="https://www.behance.net/departement_tim"><img class="icon-footer" src="http://eddym10.sg-host.com/wp-content/uploads/2021/11/behance-150x150-1.png"></a>
			<a href="https://www.youtube.com/channel/UCFbzVrYpbJOaOW8ub9NiAOA"><img class="icon-footer" src="http://eddym10.sg-host.com/wp-content/uploads/2021/11/youtube-150x150-1.png"></a>
			</div>
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
