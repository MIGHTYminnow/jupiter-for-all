<?php if(!empty($view_params['link'])) { ?>
	<a class="team-member-name" href="<?php echo $view_params['link']; ?>">
<?php } ?>
	<span class="team-member-name jupiter-donut-font-16 jupiter-donut-display-block jupiter-donut-font-weight-bold jupiter-donut-text-transform-up jupiter-donut-color-333"><?php the_title(); ?></span>
<?php if(!empty($view_params['link'])) { ?>
	</a>
<?php } ?>
