<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package scentric
 * @since Scentric 0.1
 */
?>
		<div id="sidebars" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<div id="primary-sidebar" class="sidebar">
				<?php if ( ! dynamic_sidebar( 'primary-sidebar-widgets' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'scentric' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'scentric' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			</div>

			<!-- secondary sidebar control - delete me if unneeded and undeclare from functions.php -->
		  <?php if ( is_active_sidebar( 'secondary-sidebar-widgets' ) ) : ?>
		    <div id="secondary-sidebar" class="sidebar">
		      <?php dynamic_sidebar( 'secondary-sidebar-widgets' ); ?>
		    </div>
		  <?php endif; // end secondary-sidebar-widgets ?>

		</div><!-- #secondary .widget-area -->
