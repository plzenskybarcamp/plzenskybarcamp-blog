<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>


			<div class="action-panel">
                		<p>&nbsp;</p>
			</div>
		        <div class="social-media">
				<ul>
					<li class="tw"><a href="https://twitter.com/plzenskybarcamp" target="_blank"><span data-hover="Twitter"><i>Twitter</i></span></a></li>
					<li class="fb"><a href="https://www.facebook.com/plzenskybarcamp" target="_blank"><span data-hover="Facebook"><i>Facebook</i></span></a></li>
					<li class="gplus"><a href="https://plus.google.com/+PlzenskyBarcampCZ" rel="publisher" target="_blank"><span data-hover="Google+"><i>Google+</i></span></a></li>
					<li class="insta"><a href="https://instagram.com/plzenskybarcamp/" target="_blank"><span data-hover="Instagram"><i>Instagram</i></span></a></li>
					<li class="yt"><a href="https://www.youtube.com/PlzenskyBarcamp" target="_blank"><span data-hover="Youtube"><i>Youtube</i></span></a></li>
				</ul>
			</div>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>