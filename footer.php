<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package scentric
 * @since Scentric 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'scentric_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', scentric ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', scentric ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', scentric ), '<a href="http://github.com/bytefair/scentric">Scentric</a>', '<a href="http://bytefair.com/" rel="designer">Paul Edmon Graham</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
   mathiasbynens.be/notes/async-analytics-snippet -->
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>




<!--  begin wp_footer() code -->
<?php wp_footer(); ?>
<!-- end wp_footer() code -->

</body>
</html>