<?php
vc_map(array(
    "name" => __("Image Gallery", 'jupiter-donut') ,
    "base" => "mk_gallery",
	'html_template' => dirname( __FILE__ ) . '/mk_gallery.php',
    "category" => __('General', 'jupiter-donut') ,
    'icon' => 'icon-mk-image-gallery vc_mk_element-icon',
    "admin_enqueue_js" => JUPITER_DONUT_INCLUDES_URL . '/wpbakery/shortcodes/mk_gallery/vc_admin.js',
    'description' => __('Adds images in grids in many styles.', 'jupiter-donut') ,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Heading Title", 'jupiter-donut') ,
            "param_name" => "title",
            "value" => "",
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "attach_images",
            "heading" => __("Add Images", 'jupiter-donut') ,
            "param_name" => "images",
            "value" => "",
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Custom Links", 'jupiter-donut') ,
            "param_name" => "custom_links",
            "value" => "",
            "description" => __("Please add your links, If you use custom links the lightbox will be converted to external links. separate your URLs with comma ','", 'jupiter-donut')
        ) ,
        array(
            "heading" => __("Gallery Style", 'jupiter-donut') ,
            "description" => sprintf(__("In grid style you will need to set column and image heights. For Mansory Styles Structure see below image :%s", 'jupiter-donut'), "</br><img src='" . JUPITER_DONUT_ASSETS_URL . "/img/gallery-mansory-styles.png' /><br>"),
            "param_name" => "style",
            "value" => array(
                __("Grid", 'jupiter-donut') => "grid",
                __("Masonry Style 1", 'jupiter-donut') => "style1",
                __("Masonry Style 2", 'jupiter-donut') => "style2",
                __("Masonry Style 3", 'jupiter-donut') => "style3"
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "type" => "range",
            "heading" => __("How many Column?", 'jupiter-donut') ,
            "param_name" => "column",
            "value" => "3",
            "min" => "1",
            "max" => "8",
            "step" => "1",
            "unit" => 'column',
            "description" => __("How many columns would you like to appear in one row?", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'grid'
                )
            )
        ) ,
        array(
            "heading" => __("Image Size", 'jupiter-donut') ,
            "description" => __("<span style='color:red'>Please note that in Masonry styles, image width and height must be equal(square). So if you will use image sizes other than Resize & Crop, make sure those images are arranged to be square shaped images.</span>", 'jupiter-donut') ,
            "param_name" => "image_size",
            "value" => mk_get_image_sizes(),
            "type" => "dropdown",
        ) ,
        array(
            "type" => "range",
            "heading" => __("Image Heights", 'jupiter-donut') ,
            "param_name" => "height",
            "value" => "500",
            "min" => "100",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "description" => __("Define your gallery image's height.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "image_size",
                'value' => array(
                    'crop'
                )
            )
        ) ,
        array(
            "heading" => __("Hover Scenarios", 'jupiter-donut') ,
            "description" => __("This is what happens when user hovers over a gallery item.", 'jupiter-donut') ,
            "param_name" => "hover_scenarios",
            "value" => array(
                __("Fade Box", 'jupiter-donut') => "fadebox",
                __("Grayscale to Color", 'jupiter-donut') => "grayscale",
                __("Blur", 'jupiter-donut') => "blur",
                __("Slow Zoom", 'jupiter-donut') => "slow_zoom",
                __("Overlay Layer", 'jupiter-donut') => "overlay_layer",
                __("No Overlay", 'jupiter-donut') => "none",
            ) ,
            "type" => "dropdown",
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Overlay Color", 'jupiter-donut') ,
            "param_name" => "overlay_color",
            "value" => "",
            "description" => __("", 'jupiter-donut'),
            "dependency" => array(
                'element' => "hover_scenarios",
                'value' => array(
                    'fadebox',
                    'blur',
                    'overlay_layer',
                    'grayscale'
                )
            )
        ) ,
        array(
            "heading" => __("Item Spacing", 'jupiter-donut') ,
            "description" => __("Space between items.", 'jupiter-donut') ,
            "param_name" => "item_spacing",
            "value" => "8",
            "min" => "0",
            "max" => "50",
            "step" => "1",
            "unit" => 'px',
            "type" => "range",
        ) ,
        array(
            "type" => "range",
            "heading" => __("Margin Bottom", 'jupiter-donut') ,
            "param_name" => "margin_bottom",
            "value" => "20",
            "min" => "0",
            "max" => "500",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Image Frame Style", 'jupiter-donut') ,
            "param_name" => "frame_style",
            "value" => array(
                "No Frame" => "simple",
                "Grid" => "grid",
                "Rounded Frame" => "rounded",
                "Gray Border Frame" => "gray_border"
            ) ,
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Collection Title", 'jupiter-donut') ,
            "param_name" => "collection_title",
            "value" => "",
            "description" => __("This title will be replaced with all captions you define in Wordpress media. If you just want to give one title for all gallery images you can use this option. Image alt tag will still follow the media section image alt field.", 'jupiter-donut')
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Hover Captions", 'jupiter-donut') ,
            "param_name" => "disable_title",
            "value" => "false",
            "description" => __("Using this option you can enable / disable image hover captions. This option is disabled by default.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "hover_scenarios",
                'value' => array(
                    'fadebox'
                )
            )
        ) ,
        /*array(
            "type" => "dropdown",
            "heading" => __("Increase Quality of Image", 'jupiter-donut') ,
            "param_name" => "image_quality",
            "value" => array(
                __("Normal Quality", 'jupiter-donut') => "1",
                __("Images 2 times bigger (retina compatible)", 'jupiter-donut') => "2",
                __("Images 3 times bigger (fullwidth row compatible)", 'jupiter-donut') => "3"
            ) ,
            "description" => __("If you want gallery images to be retina compatible or you just want to use it in full width row, you may consider increasing the image size. This option will help you to manually define the image quality.", 'jupiter-donut')
        ) ,*/
        array(
            "heading" => __("Pagination?", 'jupiter-donut') ,
            "description" => __("Enable / Disable pagination for this image loop.", 'jupiter-donut') ,
            "param_name" => "pagination",
            "value" => 'false',
            "type" => "toggle"
        ) ,

        array(
            "heading" => __("Pagination Style", 'jupiter-donut') ,
            "description" => __("Select which pagination style you would like to use on this loop.", 'jupiter-donut') ,
            "param_name" => "pagination_style",
            "value" => array(
                __("Classic Pagination Navigation", 'jupiter-donut') => "1",
                __("Load more button", 'jupiter-donut') => "2",
                __("Load more on page scroll", 'jupiter-donut') => "3"
            ) ,
            "type" => "dropdown",
            "dependency" => array(
                'element' => "pagination",
                'value' => array(
                    "true"
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("How many Images per page?", 'jupiter-donut') ,
            "param_name" => "count",
            "value" => "10",
            "min" => "1",
            "max" => "50",
            "step" => "1",
            "unit" => 'images',
            "description" => __("How many Image would you like to show per page?", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "pagination",
                'value' => array(
                    "true"
                )
            )
        ) ,
        array(
            "heading" => __("Order", 'jupiter-donut') ,
            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'jupiter-donut') ,
            "param_name" => "order",
            "value" => array(
                __("ASC (ascending order)", 'jupiter-donut') => "ASC",
                __("DESC (descending order)", 'jupiter-donut') => "DESC"
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "heading" => __("Orderby", 'jupiter-donut') ,
            "description" => __("Sorts retrieved gallery items by parameter.", 'jupiter-donut') ,
            "param_name" => "orderby",
            "value" => array(
                        __("Date", 'jupiter-donut') => "date",
                        __("Posts In (manually selected posts)", 'jupiter-donut') => "post__in",
                        __("Post Id", 'jupiter-donut') => "id",
                        __("Title", 'jupiter-donut') => "title",
                        __("Random", 'jupiter-donut') => "rand",
                        __("Author", 'jupiter-donut') => "author"
                    ),
            "type" => "dropdown"
        ) ,
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
            "heading" => __("Extra class name", 'jupiter-donut') ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'jupiter-donut')
        ) ,
    )
));
