<?php
vc_map(array(
    "name" => __("Employees", 'jupiter-donut') ,
    "base" => "mk_employees",
	'html_template' => dirname( __FILE__ ) . '/mk_employees.php',
    'icon' => 'icon-mk-employees vc_mk_element-icon',
    "category" => __('Loops', 'jupiter-donut') ,
    'description' => __('Shows Employees posts in multiple styles.', 'jupiter-donut') ,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => __("Style", 'jupiter-donut') ,
            "param_name" => "style",
            "width" => 300,
            "value" => array(
                __('Simple', 'jupiter-donut') => "simple",
                __('Boxed', 'jupiter-donut') => "boxed",
                __('Classic', 'jupiter-donut') => "classic"
            ) ,
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "range",
            "heading" => __("Column", 'jupiter-donut') ,
            "param_name" => "column",
            "value" => "3",
            "min" => "1",
            "max" => "5",
            "step" => "1",
            "unit" => 'columns',
            "description" => __("Defines how many column to be in one row.", 'jupiter-donut')
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Custom Thumbnail Size?", 'jupiter-donut') ,
            "param_name" => "custom_image_size",
            "value" => "false",
            "description" => __("When enabled, you can set custom sizes from dropdown below.", 'jupiter-donut') ,
        ) ,
        array(
            "heading" => __("Thumbnail Size", 'jupiter-donut'),
            "description" => __("", 'jupiter-donut'),
            "param_name" => "image_size",
            "value" => mk_get_image_sizes(),
            "type" => "dropdown",
            "dependency" => array(
                'element' => "custom_image_size",
                'value' => array(
                    'true'
                )
            )
        ),
        array(
            "type" => "range",
            "heading" => __("Thumbnail Width", 'jupiter-donut') ,
            "param_name" => "image_width",
            "value" => "500",
            "min" => "10",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", 'jupiter-donut'),
            "dependency" => array(
                'element' => "image_size",
                'value' => array(
                    'crop'
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("Thumbnail Height", 'jupiter-donut') ,
            "param_name" => "image_height",
            "value" => "500",
            "min" => "10",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", 'jupiter-donut'),
            "dependency" => array(
                'element' => "image_size",
                'value' => array(
                    'crop'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Rounded Employee's Photo", 'jupiter-donut') ,
            "param_name" => "rounded_image",
            "value" => "true",
            "description" => __("When enabled, employee photos have rounded corners.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'simple'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Grayscale Employee's Photo", 'jupiter-donut') ,
            "param_name" => "grayscale_image",
            "value" => "true",
            "description" => __("The grayscale effect is not working on IE.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'simple'
                )
            )
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Box background Color", 'jupiter-donut') ,
            "param_name" => "box_bg_color",
            "value" => "",
            "description" => __("This option is only for Boxed style.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'boxed'
                )
            )
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Box Border Color", 'jupiter-donut') ,
            "param_name" => "box_border_color",
            "value" => "",
            "description" => __("This option is only for Boxed style.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'boxed'
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("Count", 'jupiter-donut') ,
            "param_name" => "count",
            "value" => "10",
            "min" => "-1",
            "max" => "50",
            "step" => "1",
            "unit" => 'employee',
            "description" => __("How many Employees you would like to show? (-1 means unlimited)", 'jupiter-donut')
        ) ,
         array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Categories', 'jupiter-donut' ),
            'param_name'  => 'categories',
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
            'heading'     => __( 'Select specific Employees', 'jupiter-donut' ),
            'param_name'  => 'employees',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'jupiter-donut' ),
        ),
        array(
            "type" => "range",
            "heading" => __("Offset", 'jupiter-donut') ,
            "param_name" => "offset",
            "value" => "0",
            "min" => "0",
            "max" => "50",
            "step" => "1",
            "unit" => 'posts',
            "description" => __("Number of post to displace or pass over. It means based on the order of the loop, this number will define how many posts to pass over and start from the nth number of the offset.", 'jupiter-donut')
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Description", 'jupiter-donut') ,
            "param_name" => "description",
            "value" => "true",
            "description" => __("If you dont want to show Employees description disable this option.", 'jupiter-donut')
        ) ,
        array(
            "heading" => __("Order", 'jupiter-donut') ,
            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'jupiter-donut') ,
            "param_name" => "order",
            "value" => array(
                __("DESC (descending order)", 'jupiter-donut') => "DESC",
                __("ASC (ascending order)", 'jupiter-donut') => "ASC"
            ) ,
            "type" => "dropdown"
        ) ,
        array(
            "heading" => __("Orderby", 'jupiter-donut') ,
            "description" => __("Sort retrieved employee items by parameter.", 'jupiter-donut') ,
            "param_name" => "orderby",
            "value" => $mk_orderby,
            "type" => "dropdown"
        ) ,
        $add_css_animations,
        $add_device_visibility,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'jupiter-donut') ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'jupiter-donut')
        ),

        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Employee Name Color", 'jupiter-donut') ,
            "param_name" => "name_color",
            "value" => "",
            "description" => __("", 'jupiter-donut'),
            "group" => __('Color', 'jupiter-donut') ,
        ),
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Employee Position Color", 'jupiter-donut') ,
            "param_name" => "position_color",
            "value" => "",
            "description" => __("", 'jupiter-donut'),
            "group" => __('Color', 'jupiter-donut') ,
        ),
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Employee About Color", 'jupiter-donut') ,
            "param_name" => "about_color",
            "value" => "",
            "description" => __("", 'jupiter-donut'),
            "group" => __('Color', 'jupiter-donut') ,
        ),
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Employee Social Color", 'jupiter-donut') ,
            "param_name" => "social_color",
            "value" => "",
            "description" => __("", 'jupiter-donut'),
            "group" => __('Color', 'jupiter-donut') ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'simple',
                    'boxed'
                )
            )
        ),
    )
));
