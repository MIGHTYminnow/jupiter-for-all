<?php

echo '<div class="mk-blog-meta-wrapper">';
if(!isset($view_params['author'])) {
	ob_start();
	the_author_posts_link();
	$author_link = ob_get_contents();
	ob_get_clean();
	echo '<div class="mk-blog-author blog-meta-item"><span>' . __('By', 'jupiter-donut') . '</span> ' . $author_link . '</div>';

}
if(!isset($view_params['cats'])) {
	echo '<div class="mk-categories blog-meta-item"><span> ' . __('In', 'jupiter-donut') . '</span> ' . get_the_category_list(', ') . '</div>';
	
	if(!isset($view_params['time'])) {
		echo '<span>' . __('Posted', 'jupiter-donut') . '</span> ';
	}
}
if(!isset($view_params['time'])) {
	echo '<time datetime="' . get_the_date('Y-m-d') . '">';
	echo '<a href="' . get_month_link(get_the_time("Y") , get_the_time("m")) . '">' . get_the_date() . '</a>';
	echo '</time>';
}

echo '</div>';

