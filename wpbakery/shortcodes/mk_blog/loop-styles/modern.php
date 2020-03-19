<?php

global $post;

$content_width = jupiter_donut_get_option('content_width');
$grid_width    = jupiter_donut_get_option('grid_width');
$skin_color    = jupiter_donut_get_option('skin_color');

if ($view_params['layout'] == 'full') {
	$image_width = $grid_width - 40;
} else {
	$image_width = (($content_width / 100) * $grid_width) - 40;
}


$post_type = get_post_meta($post->ID, '_single_post_type', true);
$post_type = !empty($post_type) ? $post_type : 'image';
?>

 <article id="<?php the_ID(); ?>" class="mk-blog-modern-item mk-isotop-item <?php echo $post_type; ?>-post-type">
<?php
    $media_atts = array(
        'image_size'    => $view_params['image_size'],
        'image_width'   => $image_width,
        'image_height'  => $view_params['grid_image_height'],
        'lazyload'      => $view_params['lazyload'],
        'disable_lazyload'      => $view_params['disable_lazyload'],
        'post_type'     => $post_type,
        //'image_quality' => $view_params['image_quality']
	);
	error_log( print_r( $media_atts, true ) );
    echo  mk_get_shortcode_view('mk_blog', 'components/featured-media', true, $media_atts);


    if ($view_params['comments_share'] != 'false') { ?>
        <div class="blog-modern-social-section">
            <?php
            echo mk_get_shortcode_view('mk_blog', 'components/social-share', true);
            echo mk_get_shortcode_view('mk_blog', 'components/comments', true, ['post_type' => $post_type]);
            ?>
        </div>
    <?php } ?>

    <div class="mk-blog-meta">
        <?php
            if ($view_params['disable_meta'] == 'true') {
                echo mk_get_shortcode_view('mk_blog', 'components/meta', true);
            }
            echo mk_get_shortcode_view('mk_blog', 'components/title', true);
            echo mk_get_shortcode_view('mk_blog', 'components/excerpt', true, ['excerpt_length' => $view_params['excerpt_length'], 'full_content' => $view_params['full_content']]);
        ?>

        <?php
            echo do_shortcode( '[mk_button dimension="flat" corner_style="rounded" bg_color="'.$skin_color.'" btn_hover_bg="'.hexDarker($skin_color, 30).'" text_color="light" btn_hover_txt_color="#ffffff" size="medium" target="_self" align="none" url="' . esc_url( get_permalink() ) . '"]'.__('READ MORE', 'jupiter-donut').'[/mk_button]' );
        ?>

        <div class="clearboth"></div>
    </div>

    <div class="clearboth"></div>
</article>
