<?php

vc_map(array(
    "name" => __("Blog", 'jupiter-donut'),
    "base" => "mk_blog",
	'html_template' => dirname( __FILE__ ) . '/mk_blog.php',
    'icon' => 'icon-mk-blog vc_mk_element-icon',
    "admin_enqueue_js" => JUPITER_DONUT_INCLUDES_URL . '/wpbakery/shortcodes/mk_blog/vc_admin.js',
    "category" => __('Loops', 'jupiter-donut'),
    'description' => __( 'Blog loops are here.', 'jupiter-donut' ),
    "params" => array(
        array(
            "heading" => __("Style", 'jupiter-donut'),
            "description" => __("Select which blog loop style you would like to use.", 'jupiter-donut'),
            "param_name" => "style",
            "value" => array(
                __("Modern", 'jupiter-donut') => "modern",
                __("Classic", 'jupiter-donut') => "classic",
                __("Newspaper", 'jupiter-donut') => "newspaper",
                __("Grid", 'jupiter-donut') => "grid",
                __("Spotlight", 'jupiter-donut') => "spotlight",
                __("Thumbnail", 'jupiter-donut') => "thumbnail",
                __("Magazine", 'jupiter-donut') => "magazine",
            ),
            "type" => "dropdown"
        ),

        array(
            "heading" => __("Blog Post Formats to Exclude", 'jupiter-donut'),
            "description" => __("Using this option you may want to exclude post Formats you do not want to show in this blog feed.", 'jupiter-donut'),
            "param_name" => "exclude_post_format",
            "options" => array(
                "image" => __('Image', 'jupiter-donut') ,
                "video" => __('Video', 'jupiter-donut') ,
                "audio" => __('Audio', 'jupiter-donut') ,
                "portfolio" => __('Portfolio', 'jupiter-donut') ,
                "twitter" => __('Twitter', 'jupiter-donut') ,
                "blockquote" => __('Blockquote', 'jupiter-donut') ,
                "instagram" => __('Instagram', 'jupiter-donut') ,
            ),
            "type" => "multiselect"
        ),



        array(
            "type" => "range",
            "heading" => __("How many Columns?", 'jupiter-donut'),
            "param_name" => "column",
            "value" => "3",
            "min" => "1",
            "max" => "4",
            "step" => "1",
            "unit" => 'columns',
            "description" => __("This option defines how many columns will be set in one row. Column only works for newspaper and grid styles.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid',
                    'newspaper',
                    'spotlight'
                )
            )
        ),
        array(
            "heading" => __("Thumbnail Align", 'jupiter-donut'),
            "description" => __("", 'jupiter-donut'),
            "param_name" => "thumbnail_align",
            "value" => array(
                __("Left", 'jupiter-donut') => "left",
                __("Right", 'jupiter-donut') => "right"
            ),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'thumbnail'
                )
            )
        ),
        array(
            "heading" => __("Magazine Style Align", 'jupiter-donut'),
            "description" => __("", 'jupiter-donut'),
            "param_name" => "magazine_strcutre",
            "value" => array(
                __("One Column", 'jupiter-donut') => 1,
                __("Two Columns (Featured post on left side)", 'jupiter-donut') => 2,
                __("Two Columns (Featured post on right side)", 'jupiter-donut') => 3,
            ),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'magazine'
                )
            )
        ),
        array(
            "heading" => __("Image Size", 'jupiter-donut'),
            "description" => __("", 'jupiter-donut'),
            "param_name" => "image_size",
            "value" => mk_get_image_sizes(),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'modern',
                    'classic',
                    'newspaper',
                    'grid',
                    'spotlight',
                    'thumbnail'
                )
            )
        ),
		array(
            "heading" => __("Image Size", 'jupiter-donut'),
            "description" => __("", 'jupiter-donut'),
            "param_name" => "image_size_magazine",
            "value" => mk_get_image_sizes( false, false, false ),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'magazine',
                )
            )
        ),
        array(
            "type" => "range",
            "heading" => __("Images Height", 'jupiter-donut'),
            "param_name" => "grid_image_height",
            "value" => "350",
            "min" => "100",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "description" => __("This option works only when you choose 'Resize & Crop' from the option above.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "image_size",
                'value' => array(
                    'crop'
                )
            ),array(
                'element' => "style",
                'value' => array(
                    'modern',
                    'classic',
                    'newspaper',
                    'grid',
                    'spotlight'
                )
            )
        ),

        array(
            "type" => "range",
            "heading" => __("How many Posts?", 'jupiter-donut'),
            "param_name" => "post_count",
            "value" => "10",
            "min" => "-1",
            "max" => "50",
            "step" => "1",
            "unit" => 'posts',
            "description" => __("How many Posts would you like to show? (-1 means unlimited, please note that unlimited will be overrided the limit you defined at : Wordpress Sidebar > Settings > Reading > Blog pages show at most.)", 'jupiter-donut')
        ),
        array(
            "type" => "range",
            "heading" => __("Offset", 'jupiter-donut'),
            "param_name" => "post_offset",
            "value" => "0",
            "min" => "0",
            "max" => "50",
            "step" => "1",
            "unit" => 'posts',
            "description" => __("Number of posts to displace or pass over, it means based on your order of the loop, this number will define how many posts to pass over and start from the nth number of the offset.", 'jupiter-donut')
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Categories', 'jupiter-donut' ),
            'param_name'  => 'cat',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for category name to get autocomplete suggestions', 'jupiter-donut' ),
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Posts', 'jupiter-donut' ),
            'param_name'  => 'posts',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'jupiter-donut' ),
        ),

        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Authors', 'jupiter-donut' ),
            'param_name'  => 'author',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for user ID, Username, Email Address to get autocomplete suggestions', 'jupiter-donut' ),
        ),

        array(
            "type" => "toggle",
            "heading" => __("Transparent Border", 'jupiter-donut'),
            "param_name" => "transparent_border",
            "value" => "false",
            "description" => __("Enable this option to remove borders", 'jupiter-donut'),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid'
                )
            )
        ),

        array(
            "type" => "toggle",
            "heading" => __("Show Date?", 'jupiter-donut'),
            "param_name" => "disable_meta",
            "value" => "true",
            "description" => __("Disable this option if you do not want to show post date.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid'
                )
            )
        ),
        array(
            "type" => "toggle",
            "heading" => __("Comments Count & Social Share", 'jupiter-donut'),
            "param_name" => "comments_share",
            "value" => "true",
            "description" => __("Using this option you can disable Shocial Share and comments count from Blog loop.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'newspaper',
                    'classic',
                    'magazine'
                )
            )
        ),
        array(
            "type" => "toggle",
            "heading" => __("Full Content in Blog Loop?", 'jupiter-donut'),
            "param_name" => "full_content",
            "value" => "false",
            "description" => __("If you enable this option instead of blog excerpt the full post content will be shown.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'modern',
                    'classic',
                    'newspaper',
                    'grid'
                )
            )
        ),
        array(
            "type" => "range",
            "heading" => __("Post Excerpt Length", 'jupiter-donut'),
            "description" => __("Define the length of the excerpt by number of characters. Zero will disable excerpt.", 'jupiter-donut'),
            "param_name" => "excerpt_length",
            "value" => "200",
            "min" => "0",
            "max" => "2000",
            "step" => "1",
            "unit" => 'characters',
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'classic',
                    'modern',
                    'grid',
                    'newspaper',
                    'thumbnail'
                )
            )
        ),
        array(
            "type" => "toggle",
            "heading" => __("Pagination?", 'jupiter-donut'),
            "param_name" => "pagination",
            "value" => "true",
            "description" => __("Disable this option if you do not want pagination for this loop.", 'jupiter-donut'),
        ),
        array(
            "heading" => __("Pagination Style", 'jupiter-donut'),
            "description" => __("Select which pagination style you would like to use on this loop.", 'jupiter-donut'),
            "param_name" => "pagination_style",
            "value" => array(
                __("Classic Pagination Navigation", 'jupiter-donut') => "1",
                __("Load more button", 'jupiter-donut') => "2",
                __("Load more on page scroll", 'jupiter-donut') => "3"
            ),
            "type" => "dropdown",
             "dependency" => array(
             'element' => "pagination",
             'value' => array(
                    'true',
                )
            )
        ),
        array(
            "heading" => __("Order", 'jupiter-donut'),
            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'jupiter-donut'),
            "param_name" => "order",
            "value" => array(
                __("DESC (descending order)", 'jupiter-donut') => "DESC",
                __("ASC (ascending order)", 'jupiter-donut') => "ASC"

            ),
            "type" => "dropdown"
        ),
        array(
            "heading" => __("Orderby", 'jupiter-donut'),
            "description" => __("Sort retrieved Blog items by parameter.", 'jupiter-donut'),
            "param_name" => "orderby",
            "value" => $mk_orderby,
            "type" => "dropdown"
        ),
        array(
            "type" => "toggle",
            "heading" => __("Lazyload", 'jupiter-donut'),
            "param_name" => "lazyload",
            "value" => "false",
        ),
        array(
            "type" => "toggle",
            "heading" => __("Disable Lazyload", 'jupiter-donut'),
            "param_name" => "disable_lazyload",
            "value" => "false",
            "description" => __("Disable Lazyload is only available when 'Global Lazyload' is enabled in the Theme Options.", 'jupiter-donut'),
        ),
        $add_device_visibility,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'jupiter-donut'),
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'jupiter-donut')
        ),
    )
));
