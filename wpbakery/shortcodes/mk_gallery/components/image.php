<?php

$post_id       = global_get_post_id();
$content_width = jupiter_donut_get_option( 'content_width' );

if ( is_singular() ) {
	$layout = get_post_meta( $post_id, '_layout', true );
}

$layout     = ! empty( $layout ) ? $layout : 'full';
$height     = $view_params['height'];
$grid_width = jupiter_donut_get_option( 'grid_width' );

if ( 'grid' == $view_params['style'] ) {

	switch ( $view_params['column'] ) {
		case 1:
			if ( 'full' == $layout ) {
				$width = $grid_width - 40;
			} else {
				$width = round( ($content_width / 100) * $grid_width ) - 40;
			}
			break;
		case 2:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 2 ) - 36;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 2 ) - 36;
			}
			break;
		case 3:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 3 ) - 30;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 3 ) - 29;
			}
			break;
		case 4:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 4 ) - 26;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 4 ) - 26;
			}
			break;
		case 5:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 5 ) - 24;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 5 ) - 24;
			}
			break;
		case 6:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 6 ) - 24;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 6 ) - 24;
			}
			break;
		case 7:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 7 ) - 22;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 7 ) - 22;
			}
			break;
		case 8:
			if ( 'full' == $layout ) {
				$width = round( $grid_width / 8 ) - 14;
			} else {
				$width = round( (($content_width / 100) * $grid_width) / 8 ) - 13;
			}
			break;
	}
} else {

	$width = 600;
	$height = 600;

}

$thumbnail_id  = ! empty( get_post_thumbnail_id() ) ? get_post_thumbnail_id() : get_the_ID();

$featured_image_src = Mk_Image_Resize::resize_by_id_adaptive( $thumbnail_id, $view_params['image_size'], $width, $height, $crop = true, $dummy = true );
$image_size_atts    = Mk_Image_Resize::get_image_dimension_attr( $thumbnail_id, $view_params['image_size'], $width, $height );

?>

 <span class="gallery-inner">
	<img class="mk-gallery-image" src="<?php echo esc_attr( $featured_image_src['dummy'] ); ?>"
		<?php echo $featured_image_src['data-set']; ?>
		height="<?php echo esc_attr( $image_size_atts['height'] ); ?>"
		width="<?php echo esc_attr( $image_size_atts['width'] ); ?>"
		title="<?php echo the_title_attribute(); ?>"
		alt="<?php echo esc_attr( get_post_meta( $post_id, '_wp_attachment_image_alt', true ) ); ?>"  />
 </span>


