<?php 
$facebook = get_post_meta(get_the_ID() , '_facebook', true);
$linkedin = get_post_meta(get_the_ID() , '_linkedin', true);
$twitter = get_post_meta(get_the_ID() , '_twitter', true);
$email = get_post_meta(get_the_ID() , '_email', true);
$googleplus = get_post_meta(get_the_ID() , '_googleplus', true);
$instagram = get_post_meta(get_the_ID() , '_instagram', true);
?>

<ul class="mk-employeee-networks">
	<?php if (!empty($email)) { ?>
		<li><a target="_blank" href="mailto:<?php echo antispambot($email); ?>" title="<?php _e('Get In Touch With', 'jupiter-donut'); ?> <?php the_title_attribute(); ?>"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-envelope', 16); ?><span class="screen-reader-text">E-mail</span></a></li>
	<?php } 
	if (!empty($facebook)) {  ?>
		<li><a target="_blank" href="<?php echo $facebook; ?>" title="<?php the_title_attribute(); ?> <?php _e('On', 'jupiter-donut'); ?> Facebook"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-moon-facebook', 16); ?><span class="screen-reader-text">Facebook</span></a></li>
	<?php }
	if (!empty($twitter)) {  ?>
		<li><a target="_blank" href="<?php echo $twitter; ?>" title="<?php the_title_attribute(); ?> <?php _e('On', 'jupiter-donut'); ?> Twitter"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-moon-twitter', 16); ?><span class="screen-reader-text">Twitter</span></a></li>
	<?php }
	if (!empty($googleplus)) {  ?>
		<li><a target="_blank" href="<?php echo $googleplus; ?>" title="<?php the_title_attribute(); ?> <?php _e('On', 'jupiter-donut'); ?> Google Plus"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-moon-google-plus', 16); ?><span class="screen-reader-text">Google Plus</span></a></li>
	<?php }
	if (!empty($linkedin)) {  ?>
		<li><a target="_blank" href="<?php echo $linkedin; ?>" title="<?php the_title_attribute(); ?> <?php _e('On', 'jupiter-donut'); ?> Linked In"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-jupiter-icon-simple-linkedin', 16); ?><span class="screen-reader-text">Linked In</span></a></li>
	<?php }
	if (!empty($instagram)) {  ?>
		<li><a target="_blank" href="<?php echo $instagram; ?>" title="<?php the_title_attribute(); ?> <?php _e('On', 'jupiter-donut'); ?> Instagram"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-instagram', 16); ?><span class="screen-reader-text">Instagram</span></a></li>
	<?php }  ?>
</ul>