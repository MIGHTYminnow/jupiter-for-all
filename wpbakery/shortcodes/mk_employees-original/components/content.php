<?php if ($view_params['description'] == 'true' && ! empty( get_post_meta(get_the_ID() , '_desc', true) ) ) {
		$content = str_replace(']]>', ']]&gt;', apply_filters('the_content', get_post_meta(get_the_ID() , '_desc', true)));
?>
		<div class="team-member-desc jupiter-donut-margin-top-20 jupiter-donut-margin-bottom-10 jupiter-donut-display-block"><?php echo $content; ?></div>
<?php } ?>
