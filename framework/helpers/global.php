<?php
/**
 * Overrides mk_build_main_wrapper()
 * from /framework/helpers/global.php on Jupiter Donut.
 * 
 * @version 1.0.2
 */

/**
 * Replaces <div id="theme-page"> with <main id="theme-page">.
 */
if ( ! function_exists( 'mk_build_main_wrapper' ) ) {
	/**
	 * Builds content wrappers for the given content
	 *
	 * @param string $content HTML string to manpulate.
	 * @param string $wrapper_custom_class CSS class name for wrapper element.
	 * @param string $master_holder_class CSS class name for master holder element.
	 * @return void
	 */
	function mk_build_main_wrapper( $content, $wrapper_custom_class = '', $master_holder_class = '' ) {

		// Get theme options from global mk_options variable.
		global $mk_options, $post;

		// Get layout option from post meta.
		$layout = is_singular() ? get_post_meta( $post->ID, '_layout', true ) : '';

		// Check if it's single portfolio and and get the layout option from theme options.
		$layout = (is_singular( 'portfolio' )) ? ('default' == $layout ? $mk_options['portfolio_single_layout'] : $layout) : $layout;

		// Check if it's single blog and and get the layout option from theme options.
		$layout = (is_singular()) ? (('default' == $layout) ? $mk_options['single_layout'] : $layout) : $layout;

		// Employees single should always be full width.
		$layout = is_singular( 'employees' ) ? 'full' : $layout;

		$layout = ( is_404() && is_active_sidebar( 'Sidebar-7' ) ) ? 'right' : $layout;

				$layout = (is_archive() && get_post_type() == 'post') ? $mk_options['archive_page_layout'] : $layout;

				$layout = (is_archive() && get_post_type() == 'portfolio') ? $mk_options['archive_portfolio_layout'] : $layout;

				$layout = is_search() ? $mk_options['search_page_layout'] : $layout;

		if ( isset( $_REQUEST['layout'] ) && ! empty( $_REQUEST['layout'] ) ) {
			$layout = esc_html( $_REQUEST['layout'] );
		}

		// For other empty scenarios we get full layout.
		$layout = (empty( $layout )) ? 'full' : $layout;
		$layout_grid = ( 'full-width' !== $layout ) ? 'mk-grid' : '';

		$wrapper_class = empty( $wrapper_custom_class ) ? 'mk-main-wrapper ' . $layout_grid : $wrapper_custom_class;

		$wrapper_id = is_singular() ? 'id="mk-page-id-' . esc_attr( $post->ID ) . '"' : '';
		$itemprop = (is_singular()) ? 'mainEntityOfPage' : 'mainContentOfPage';

		$schema_markup = (is_singular()) ? get_schema_markup( 'blog' ) : get_schema_markup( 'main' );

		$post_id = global_get_post_id();
		$has_parallax = get_post_meta( $post_id, 'page_parallax', true ) ? get_post_meta( $post_id, 'page_parallax', true ) : 'false';
		$parallax_conf = '';
		if ( 'true' === $has_parallax ) {
			$parallax_conf .= ' data-mk-component="Parallax" ';
			$parallax_conf .= ' data-parallax-config=\'{"speed" : 0.3 }\' ';
		}

		/*
            Option to remove top and bottom padding of the content.
            Its used when page section will be added right after header
            and no space is desired.
        */
		$padding = is_singular() ? get_post_meta( $post->ID, '_padding', true ) : '';

		if ( 'true' === $padding ) {
			$padding = 'no-padding';
		} else if ( is_singular() ) {
			$post_type = get_post_type();
			if ( ( ! empty( $mk_options['stick_template_page'] ) && 'page' === $post_type && 'true' === $mk_options['stick_template_page'] ) ||
				( ! empty( $mk_options['stick_template_portfolio'] ) && 'portfolio' === $post_type && 'true' === $mk_options['stick_template_portfolio'] )
			 ) {
				$padding = 'no-padding';
			}
		}

		if ( mk_get_blog_single_style() === 'bold' ) {
			mk_get_view( 'blog/components', 'blog-single-bold-hero' );
		}
?>

		<div id="theme-page" class="master-holder <?php echo esc_attr( $master_holder_class ); ?> clearfix" <?php echo $schema_markup; ?>>
			<div class="master-holder-bg-holder">
				<div id="theme-page-bg" class="master-holder-bg js-el" <?php echo $parallax_conf; ?> ></div>
			</div>
			<div class="mk-main-wrapper-holder">
				<div <?php echo $wrapper_id; ?> class="theme-page-wrapper <?php echo esc_attr( $wrapper_class ) . ' ' . esc_attr( $layout ) . '-layout ' . esc_attr( $padding ); ?>">
					<div class="theme-content <?php echo esc_attr( $padding ); ?>" itemprop="<?php echo esc_attr( $itemprop ); ?>">
							<?php echo $content; ?>
							<div class="clearboth"></div>
						<?php
						if ( mk_is_pages_comments_enabled() ) {
							if ( comments_open() ) {
								comments_template( '', true );
							}
						}
						?>
					</div>
					<?php
					if ( 'left' === $layout || 'right' === $layout ) {
						get_sidebar(); }
?>
					<div class="clearboth"></div>
				</div>
			</div>
			<?php
			if ( is_singular( 'portfolio' ) && 'true' === $mk_options['enable_portfolio_similar_posts'] && 'true' === get_post_meta( $post->ID, '_portfolio_similar', true ) ) {
				// Will be loaded in single portfolio page only. located in views/portfolio/portfolio-similar-posts.php.
				mk_get_view( 'portfolio/components', 'portfolio-similar-posts' );
			}
			?>
		</div>

<?php
	}
}// End if().
