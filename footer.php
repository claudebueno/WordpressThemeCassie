<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Meme
 */
?>
		</div>
	<!-- .site-main --></div>

	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with up to four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>

	<footer class="site-footer" role="contentinfo">
		<div class="clearfix container">
				<div class="row">
					<div class="col-sm-6 site-info">
						&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. <?php _e( 'All rights reserved', 'themememe' ); ?>.
					<!-- .site-info --></div>

					<div class="col-sm-6 site-credit">
						Thème <a href="http://www.themememe.com/cassie">Cassie</a> réalisé par ThemeMeme et modifé par <a href="http://www.claudebueno.com/" target="_blank">Claude BUENO</a>
					<!-- .site-credit --></div>
				</div>
		</div>
	<!-- .site-footer --></footer>
<!-- .site --></div>

<?php wp_footer(); ?>

</body>
</html>