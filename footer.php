<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package scentric
 * @since Scentric 0.1
 */
?>

  </div><!-- #main .site-main -->
  <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'scentric_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'scentric' ); ?>" rel="nofollow"><?php printf( __( 'Proudly powered by %s', 'scentric' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'scentric' ), '<a href="http://github.com/bytefair/scentric">Scentric</a>', '<a href="http://bytefair.com/" rel="nofollow">Paul Edmon Graham</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<!-- begin wp_footer() code -->
<?php wp_footer(); ?>
<!-- end wp_footer() code -->

</body>
</html>
