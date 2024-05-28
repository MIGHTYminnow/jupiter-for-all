<?php
vc_map(array(
    "name" => __("Page Section", 'jupiter-donut') ,
    "base" => "mk_page_section",
	'html_template' => dirname( __FILE__ ) . '/mk_page_section.php',
	'front_enqueue_js' => JUPITER_DONUT_INCLUDES_URL . '/wpbakery/shortcodes/mk_page_section/vc_front.js',
    "category" => __('General', 'jupiter-donut') ,
    "as_parent" => array(
        'only' => 'vc_row',
    ) ,
	'class' => 'vc_main-sortable-element',
    'icon' => 'icon-mk-page-section vc_mk_element-icon',
    "content_element" => true,
    "is_container" => true,
    "show_settings_on_create" => false,
    'description' => __('Customisable full width page section.', 'jupiter-donut') ,
    "params" => array(
        array(
            "type" => "dropdown",
            "heading" => __("Vertical Align", 'jupiter-donut') ,
            "param_name" => "vertical_align",
            "width" => 300,
            "value" => array(
                __('Select Option', 'jupiter-donut') => "",
                __('Top', 'jupiter-donut') => "top",
                __('Center', 'jupiter-donut') => "center",
                __('Bottom', 'jupiter-donut') => "bottom",
            ) ,
            "description" => __("Vertical alignment of elements within this column.", 'jupiter-donut')
        ) ,

        array(
            "type" => "dropdown",
            "heading" => __("Section Layout", 'jupiter-donut') ,
            "param_name" => "layout_structure",
            "width" => 300,
            "value" => array(
                __('Full Layout', 'jupiter-donut') => "full",
                __('One Half Layout (Background Image on Left & Content in Right)', 'jupiter-donut') => "half_left",
                __('One Half Layout (Background Image on Right & Content in Left)', 'jupiter-donut') => "half_right"
            ) ,
            "description" => __("If you choose One Half layout, uploaded background image will be displayed in one half of the screen width. The shortcodes placed in this section will occupy the rest of the half (not screen wide, rather it will follow half of the main grid width).", 'jupiter-donut')
        ) ,

        array(
            "type" => "upload",
            "heading" => __("Background Image", 'jupiter-donut') ,
            "param_name" => "bg_image",
            "value" => "",
            "description" => __("", 'jupiter-donut')
        ) ,

        array(
            "type" => "upload",
            "heading" => __("Background Image (Portrait)", 'jupiter-donut') ,
            "param_name" => "bg_image_portrait",
            "value" => "",
            "description" => __("Alternatively, this image could be shown in mobile devices with portrait orientation. It is recommended to use images with portrait ratio such as 2:3. ", 'jupiter-donut')
        ) ,

        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Background Color", 'jupiter-donut') ,
            "param_name" => "bg_color",
            "value" => "",
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Background Blend Modes", 'jupiter-donut') ,
            "param_name" => "blend_mode",
            "value" => array(
                __('None', 'jupiter-donut') => "none",
                __('Multiply', 'jupiter-donut') => "multiply",
                __('Screen', 'jupiter-donut') => "screen",
                __('Overlay', 'jupiter-donut') => "overlay",
                __('Darken', 'jupiter-donut') => "darken",
                __('Lighten', 'jupiter-donut') => "lighten",
                __('Soft Light', 'jupiter-donut') => "soft-light",
                __('Luminosity', 'jupiter-donut') => "luminosity"
            ) ,
            "description" => __("*Experimental feature. Compatible with Chrome, Opera, Firefox and partially Safari", 'jupiter-donut')
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Top and Bottom Border Color", 'jupiter-donut') ,
            "param_name" => "border_color",
            "value" => "",
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Background Attachment", 'jupiter-donut') ,
            "param_name" => "attachment",
            "width" => 150,
            "value" => array(
                __('Scroll', 'jupiter-donut') => "scroll",
                __('Fixed', 'jupiter-donut') => "fixed"
            ) ,
            "description" => __("This option sets whether the background image is fixed or scrolls with the rest of the page. <a href='http://www.w3schools.com/CSSref/pr_background-attachment.asp'>Read More</a>", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Background Position", 'jupiter-donut') ,
            "param_name" => "bg_position",
            "width" => 300,
            "value" => array(
                __('Left Top', 'jupiter-donut') => "left top",
                __('Center Top', 'jupiter-donut') => "center top",
                __('Right Top', 'jupiter-donut') => "right top",
                __('Left Center', 'jupiter-donut') => "left center",
                __('Center Center', 'jupiter-donut') => "center center",
                __('Right Center', 'jupiter-donut') => "right center",
                __('Left Bottom', 'jupiter-donut') => "left bottom",
                __('Center Bottom', 'jupiter-donut') => "center bottom",
                __('Right Bottom', 'jupiter-donut') => "right bottom"
            ) ,
            "description" => __("First value defines horizontal position and second vertical position.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Background Repeat", 'jupiter-donut') ,
            "param_name" => "bg_repeat",
            "width" => 300,
            "value" => array(
                __('Repeat', 'jupiter-donut') => "repeat",
                __('No Repeat', 'jupiter-donut') => "no-repeat",
                __('Horizontal Repeat', 'jupiter-donut') => "repeat-x",
                __('Vertical Repeat', 'jupiter-donut') => "repeat-y"
            ) ,
            "description" => __("", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __('Cover whole background', 'jupiter-donut') ,
            "description" => __("Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.", 'jupiter-donut') ,
            "param_name" => "bg_stretch",
            "value" => "false"
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Parallax Background?", 'jupiter-donut') ,
            "description" => __("Please note that Smooth Scroll option should be enabled for the parallax feature function correctly. Smooth Scroll option is loctated in Theme Options > General Settings > Site Settings.", 'jupiter-donut') ,
            "param_name" => "enable_3d",
            "value" => "false",
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("3D Speed Factor", 'jupiter-donut') ,
            "param_name" => "speed_factor",
            "min" => "-10",
            "max" => "10",
            "step" => "0.1",
            "unit" => 'factor',
            "value" => "0.3",
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Background Video", 'jupiter-donut') ,
            "param_name" => "bg_video",
            "width" => 300,
            "value" => array(
                __('No', 'jupiter-donut') => "no",
                __('Yes', 'jupiter-donut') => "yes"
            ) ,
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Video Source", 'jupiter-donut') ,
            "param_name" => "video_source",
            "width" => 300,
            "value" => array(
                __('Self Hosted', 'jupiter-donut') => "self",
                __('Social Hosted', 'jupiter-donut') => "social"
            ) ,
            "description" => __("", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "bg_video",
                'value' => array(
                    'yes'
                )
            )
        ) ,
        array(
            "type" => "upload",
            "heading" => __("Background Video (.MP4)", 'jupiter-donut') ,
            "param_name" => "mp4",
            "value" => "",
            "description" => __("Upload your video with .MP4 extension. (Compatibility for Safari and IE9)", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'self'
                )
            )
        ) ,
        array(
            "type" => "upload",
            "heading" => __("Background Video (.WebM)", 'jupiter-donut') ,
            "param_name" => "webm",
            "value" => "",
            "description" => __("Upload your video with .WebM extension. (Compatibility for Firefox4, Opera, and Chrome)", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'self'
                )
            )
        ) ,
        array(
            "type" => "upload",
            "heading" => __("OGV Format", 'jupiter-donut') ,
            "param_name" => "ogv",
            "value" => "",
            "description" => __("Compatibility for older Firefox and Opera versions", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'self'
                )
            )
        ) ,
        array(
            "type" => "upload",
            "heading" => __("Background Video Preview image (fallback image)", 'jupiter-donut') ,
            "param_name" => "poster_image",
            "value" => "",
            "description" => __("This Image will be showed up until video is loaded. If video is not supported or could not load on user's machine, the image will stay in background.", 'jupiter-donut'),
            "dependency" => array(
                'element' => "bg_video",
                'value' => array(
                    'yes'
                )
            )
        ) ,
        array(
            "heading" => __("Stream Host Website", 'jupiter-donut') ,
            "description" => __("", 'jupiter-donut') ,
            "param_name" => "stream_host_website",
            "value" => array(
                __("Youtube", 'jupiter-donut') => "youtube",
                __("Vimeo", 'jupiter-donut') => "vimeo"
            ) ,
            "type" => "dropdown",
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            ) ,
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Video ID", 'jupiter-donut') ,
            "param_name" => "stream_video_id",
            "value" => "",
            "description" => __("Since the streaming video will always be shown in 16/9 ratio, Please make sure your video has a 16/9 ratio,, otherwise it would not get fully covered in the background.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            )
        ) ,

        array(
            "type" => "toggle",
            "heading" => __("Video Sound", 'jupiter-donut') ,
            "param_name" => "stream_sound",
            "value" => "false",
            "description" => __("You can turn on/off the sound of the video for streaming videos", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            )
        ) ,


        array(
            "type" => "toggle",
            "heading" => __("Video Loop?", 'jupiter-donut'),
            "param_name" => "video_loop",
            "value" => "true",
            "description" => __("", 'jupiter-donut'),
            "dependency" => array(
                'element' => "bg_video",
                'value' => array(
                    'yes'
                )
            )
        ),
        array(
            "type" => "toggle",
            "heading" => __("Overlay Mask Pattern?", 'jupiter-donut') ,
            "param_name" => "video_mask",
            "description" => __("Creates an overlay repeated pattern on your video background.", 'jupiter-donut') ,
            "value" => "false"
        ) ,

        array(
            "type" => "dropdown",
            "heading" => __("Gradient Overlay Orientation", 'jupiter-donut') ,
            "param_name" => "bg_gradient",
            "width" => 150,
            "value" => array(
                __('-- No Gradient --', 'jupiter-donut') => "false",
                __('Vertical ↓', 'jupiter-donut') => "vertical",
                __('Horizontal →', 'jupiter-donut') => "horizontal",
                __('Diagonal ↘', 'jupiter-donut') => "left_top",
                __('Diagonal ↗', 'jupiter-donut') => "left_bottom",
                __('Radial ○', 'jupiter-donut') => "radial",
            ) ,
            "description" => __("Choose the orientation of gradient overlay", 'jupiter-donut')
        ) ,

        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Overlay Color", 'jupiter-donut') ,
            "param_name" => "video_color_mask",
            "value" => "",
            "description" => __("Primary overlay color. Start color if used with gradient option selected.", 'jupiter-donut')
        ) ,

        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Overlay Color End", 'jupiter-donut') ,
            "param_name" => "gr_end",
            "value" => "",
            "description" => __("The ending color for gradient fill overlay. Use only with gradient option selected.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "bg_gradient",
                'value' => array(
                    "vertical",
                    "horizontal",
                    "left_top",
                    "left_bottom",
                    "radial"
                )
            )
        ) ,

        array(
            "type" => "range",
            "heading" => __("Overlay Color Mask Opacity", 'jupiter-donut') ,
            "param_name" => "video_opacity",
            "value" => "0.6",
            "min" => "0",
            "max" => "1",
            "step" => "0.1",
            "unit" => 'alpha',
            "description" => __("The opacity of overlay layer which you set above. ", 'jupiter-donut')
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Inner Shadow", 'jupiter-donut') ,
            "description" => __("When enabled, a light inner shadow appears inside the page section (below top border).", 'jupiter-donut') ,
            "param_name" => "top_shadow",
            "value" => "false"
        ) ,
        array(
            "heading" => __("Select Section Layout", 'jupiter-donut') ,
            "description" => __("If you choose left or right sidebar layout you can then assign a side bar in the next option or create a new custom sidebar in Theme Options", 'jupiter-donut') ,
            "param_name" => "section_layout",
            "border" => 'false',
            "value" => array(
                "page-layout-full.png" => 'full',
                "page-layout-left.png" => 'left',
                "page-layout-right.png" => 'right'
            ) ,
            "type" => "visual_selector",
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            'type' => 'widgetised_sidebars',
            'heading' => __('Sidebar', 'jupiter-donut') ,
            'param_name' => 'sidebar',
            'description' => __('Please select the sidebar you would like to show in this page section.', 'jupiter-donut') ,
            "dependency" => array(
                'element' => "layout_structure",
                'value' => array(
                    'full'
                )
            )
        ) ,
        array(
            "type"        => "toggle",
            "heading"     => __( "Page Section Adpative Height", 'jupiter-donut' ),
            "description" => __( "If you enable this option, the height of page section will be determined based on the background image. Consider that page section's content won't get resized automatically and it may overflow if the content is not responsive. Also Full Screen Height? option needs to be disabled.", 'jupiter-donut' ),
            "param_name"  => "adaptive_height",
            "value"       => "false",
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full'
                )
            )
        ),
        array(
            "type"        => "toggle",
            "heading"     => __( "Overflow", 'jupiter-donut' ),
            "description" => __( "If you enable this option, page section's content hides if it's bigger than page section's height.", 'jupiter-donut' ),
            "param_name"  => "overflow",
            "value"       => "false",
            "dependency"  => array(
                'element' => "adaptive_height",
                'value'   => 'true'
            )
        ),
        array(
            "type"        => "range",
            "heading"     => __( "Page Section Maximum Height", 'jupiter-donut' ),
            "param_name"  => "max_height",
            "value"       => "600",
            "min"         => "0",
            "max"         => "1500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __( "", 'jupiter-donut' ),
            "dependency"  => array(
                "element" => "adaptive_height",
                "value"   => 'true'
            )
        ),
        array(
            "type" => "range",
            "heading" => __("Page Section Minimum Height", 'jupiter-donut') ,
            "param_name" => "min_height",
            "value" => "100",
            "min" => "0",
            "max" => "1000",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Full Width?", 'jupiter-donut') ,
            "description" => __("If you enable this option page section content will be screen width full width.", 'jupiter-donut') ,
            "param_name" => "full_width",
            "value" => "false"
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Full Screen Height?", 'jupiter-donut') ,
            "param_name" => "full_height",
            "value" => "false",
            "description" => __("Using this option you can make this page section's height to cover the whole visible screen height (Not document height). Please note that if the inner content is larger than the window height, this feature will be disabled. Full height is browser resize sensitive and completely responsive.", 'jupiter-donut')
        ) ,

        array(
            "type" => "toggle",
            "heading" => __("Center Vertically", 'jupiter-donut') ,
            "param_name" => "js_vertical_centered",
            "value" => "false",
            "dependency" => array(
                'element' => "full_height",
                'value' => array(
                    'false'
                )
            )
        ) ,

        array(
            "type" => "dropdown",
            "heading" => __("Page Section Intro Effect", 'jupiter-donut') ,
            "param_name" => "intro_effect",
            "value" => array(
                __('None', 'jupiter-donut') => "false",
                __('Shuffle', 'jupiter-donut') => "shuffle",
                __('Zoom Out', 'jupiter-donut') => "zoom_out",
                __('Fade In', 'jupiter-donut') => "fade"
            ) ,
            "description" => __("Note that this page section must be the first element in the page with full height enabled above.", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "full_height",
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("Padding Top", 'jupiter-donut') ,
            "param_name" => "padding_top",
            "value" => "10",
            "min" => "0",
            "max" => "200",
            "step" => "1",
            "unit" => 'px',
            "description" => __("The space between the content and top border of page section", 'jupiter-donut')
        ) ,
        array(
            "type" => "range",
            "heading" => __("Padding Bottom", 'jupiter-donut') ,
            "param_name" => "padding_bottom",
            "value" => "10",
            "min" => "0",
            "max" => "200",
            "step" => "1",
            "unit" => 'px',
            "description" => __("The space between the content and bottom border of page section", 'jupiter-donut')
        ) ,
        array(
            "type" => "range",
            "heading" => __("Margin Bottom", 'jupiter-donut') ,
            "param_name" => "margin_bottom",
            "value" => "0",
            "min" => "0",
            "max" => "200",
            "step" => "1",
            "unit" => 'px',
            "description" => __("The space between the bottom border of page section and the next shortcode", 'jupiter-donut')
        ) ,

        array(
            "type" => "dropdown",
            "heading" => __("Scroll to Bottom Arrow", 'jupiter-donut') ,
            "param_name" => "skip_arrow",
            "value" => array(
                __('No', 'jupiter-donut') => "false",
                __('Yes', 'jupiter-donut') => "true"
            ) ,
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Scroll to Bottom Arrow Skin", 'jupiter-donut') ,
            "param_name" => "skip_arrow_skin",
            "value" => array(
                __('Light', 'jupiter-donut') => "light",
                __('Dark', 'jupiter-donut') => "dark"
            ) ,
            "description" => __("", 'jupiter-donut') ,
            "dependency" => array(
                'element' => "skip_arrow",
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Lazy Load", 'jupiter-donut') ,
            "param_name" => "lazyload",
            "value" => "false",
        ) ,


        array(
            "type" => "toggle",
            "heading" => __("Has Top Shape Divider", 'jupiter-donut'),
            "param_name" => "has_top_shape_divider",
            "value" => "false",
            "description" => __("", 'jupiter-donut'),
            "group" => __('Shape Divider ', 'jupiter-donut') ,
        ),

        array(
            "heading" => __("Choose a Shape Pattern", 'jupiter-donut') ,
            "description" => __("", 'jupiter-donut') ,
            "param_name" => "top_shape_style",
            "class" => 'shape-selector',
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => array(
                'shape/diagonal-top.png' => "diagonal-top",
                'shape/jagged-top.png' => "jagged-top",
                'shape/jagged-rounded-top.png' => "jagged-rounded-top",
                'shape/folded-top.png' => "folded-top",
                'shape/curve-top.png' => "curve-top",
                'shape/speech-top.png' => "speech-top",
            ) ,
            "type" => "visual_selector"
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Shape Size", 'jupiter-donut') ,
            "param_name" => "top_shape_size",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => array(
                "Big" => "big",
                "Small" => "small"
            )
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Shape Color", 'jupiter-donut') ,
            "param_name" => "top_shape_color",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => '#fff',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Background Color", 'jupiter-donut') ,
            "param_name" => "top_shape_bg_color",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => '',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'jupiter-donut') ,
            "param_name" => "top_shape_el_class",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'jupiter-donut')
        ) ,


        array(
            "type" => "toggle",
            "heading" => __("Has Bottom Shape Divider", 'jupiter-donut'),
            "param_name" => "has_bottom_shape_divider",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => "false",
            "description" => __("", 'jupiter-donut'),
        ),

        array(
            "heading" => __("Choose a Shape Pattern", 'jupiter-donut') ,
            "description" => __("", 'jupiter-donut') ,
            "param_name" => "bottom_shape_style",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "class" => 'shape-selector',
            "value" => array(
                'shape/diagonal-bottom.png' => "diagonal-bottom",
                'shape/jagged-bottom.png' => "jagged-bottom",
                'shape/jagged-rounded-bottom.png' => "jagged-rounded-bottom",
                'shape/folded-bottom.png' => "folded-bottom",
                'shape/curve-bottom.png' => "curve-bottom",
                'shape/speech-bottom.png' => "speech-bottom",
            ) ,
            "type" => "visual_selector"
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Shape Size", 'jupiter-donut') ,
            "param_name" => "bottom_shape_size",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => array(
                "Big" => "big",
                "Small" => "small"
            )
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Shape Color", 'jupiter-donut') ,
            "param_name" => "bottom_shape_color",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => '#fff',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "alpha_colorpicker",
            "heading" => __("Background Color", 'jupiter-donut') ,
            "param_name" => "bottom_shape_bg_color",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => '',
            "description" => __("", 'jupiter-donut')
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'jupiter-donut') ,
            "param_name" => "bottom_shape_el_class",
            "group" => __('Shape Divider ', 'jupiter-donut') ,
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", 'jupiter-donut')
        ) ,


        array(
            "type" => "textfield",
            "heading" => __("Section ID", 'jupiter-donut') ,
            "param_name" => "section_id",
            "value" => "",
            "description" => __("Give your page section a unique ID. please note that this ID value should be used only once in a page.", 'jupiter-donut')
        ) ,
        $add_device_visibility,
        $add_css_animations,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", 'jupiter-donut') ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'jupiter-donut')
        ) ,
    ) ,
    "js_view" => 'VcRowView'
));
