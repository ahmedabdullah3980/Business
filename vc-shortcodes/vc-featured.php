<?php

if (!defined('ABSPATH')) die('-1');

class vcFeatured extends WPBakeryShortCode
{

    // 1. Define constants at compile time (used in mapping)
    const slug = 'tp_featured';
    const base = 'tp_featured';

    // 2. Integrate with hooks
    function __construct()
    {
        // For the parent wrapper
        add_action('vc_before_init', array($this, 'tp_featured_mapping'));
        add_shortcode('tp_featured', array($this, 'tp_featured_html'));
        // For child / nested
        add_action('vc_before_init', array($this, 'tp_featured_content_mapping'));
        add_shortcode('tp_featured_item', array($this, 'tp_featured_content_html'));
    }

    public function tp_featured_mapping()
    {
        if (!defined('WPB_VC_VERSION')) {
            return;
        }
        vc_map(
            array(
                'name' => __('featured', "Eventre"),
                'base' => 'tp_featured',
                'description' => __('Add featured to your page.', "Eventre"),
                'as_parent' => array('only' => 'tp_featured_item'), // set as parent of the content map/html
                'content_element' => true,
                'show_settings_on_create' => false,
                "js_view" => 'VcColumnView',
                "category" => __('Eventre', "Eventre"),
                'params' => array(
                    array(
                        "type" => "textfield",
                        "heading" => __("Extra Class Name", "Eventre"),
                        "param_name" => "el_class",
                        "description" => __("Extra class to be customized via CSS", "Eventre")
                    ),
                    array(
                        'type' => 'css_editor',
                        'heading' => __('Custom Design Options', "Eventre"),
                        'param_name' => 'css',
                        'group' => __('Design options', "Eventre"),
                    ),
                ),
            )
        );
    }


    public function tp_featured_content_mapping()
    {

        vc_map(
            array(
                'icon' => get_template_directory_uri() . '/assets/src/images/html.svg',
                'name' => __('featured Item', "Eventre"),
                'base' => 'tp_featured_item',
                'description' => __('Add featured Question here.', "Eventre"),
                "category" => __('Content', 'Eventre'),
                'content_element' => true,
                'as_child' => array('only' => 'tp_featured'),
                'params' => array(
                    
                    array(
                        "type" => "attach_image",
                        "class" => "",
                        "heading" => __( "Upload Image", "Eventre" ),
                        "param_name" => "eventre_background_image",
                        "value" => __( get_template_directory_uri().'/images/speakers/featured-speaker-two.jpg', "Cox CS" ),
                        "description" => __( "Add background Image", "Eventre" ),
                        "group" => 'Media'
                      ),

                    array(
                        'type' => 'textfield',
                        'heading' => __('Heading', 'Eventre'),
                        'param_name' => 'heading',
                        'description' => __( "Add featured Question here", "Eventre" ),
                        'value' => esc_html__('', 'Eventre'),
                        'admin_label' => true,
                        'weight' => 0,
                        'group' => __('Content', 'Eventre'),
                    ),

                    array(
                        'type' => 'textfield',
                        'class' => '',
                        'heading' => __('Description', 'Eventre'),
                        'param_name' => 'description',
                        'description' => __( "Add featured Answer here", "Eventre" ),
                        'value' => esc_html__('', 'Eventre'),
                        'admin_label' => true,
                        'group' => __('Content', 'Eventre'),
                    ),

                    array(
                        'type' => 'css_editor',
                        'heading' => __( 'Css', 'Eventre Theme' ),
                        'param_name' => 'css',
                        'group' => __( 'Design options', 'Eventre Theme' ),
                        ),

                    array(
                        'type' => 'textfield',
                        'class' => '',
                        'heading' => __('List Link', 'Eventre'),
                        'param_name' => 'list',
                        'description' => __( "Add featured Answer here", "Eventre" ),
                        'value' => esc_html__('', 'Eventre'),
                        'admin_label' => true,
                        'group' => __('Content', 'Eventre'),
                    ),

                ),
            )
        );

    }

    public function tp_featured_html($atts, $content = null)
    {
        $output = '';
        $el_class = '';

        extract(
            shortcode_atts(
                array(
                    'el_class' => '',
                ), $atts
            )
        );
        $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
        print_r($css_class);
        static $i = 0;
        $output = '<section class="speakers-full-width'. esc_attr( $css_class ) .'">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <!-- Speaker Slider -->
                    <div class="speaker-slider">
                ' . do_shortcode($content) . '
                </div>
			</div>
		</div>
	</div>
</section>';
        return $output;
    }

    public function tp_featured_content_html($atts, $content = null)
    {
        static $count = 1;

        $output = '';
        extract(
            shortcode_atts(
                array(
                    'heading' => '',
                    'description' => '',
                    'eventre_background_image' => '',
                    'list' => '',
                ), $atts
            )
        );
        
        $eventre_background_image = wp_get_attachment_image_src( $eventre_background_image, 'full' );
        $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
        print_r($css_class);

        $output = '<div class="speaker-image'. esc_attr( $css_class ) .'">
        <img src="' .$eventre_background_image[0]. '" alt="speaker" class="img-fluid">
        <div class="primary-overlay text-center">
            <h5>' .$heading. '</h5>
            <p>' .$description. '</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="' .$list. '"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="' .$list. '"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="' .$list. '"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>';

        $count++;
        return $output;

    }

}

if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_tp_featured extends WPBakeryShortCodesContainer
    {
    }
}

if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_tp_featured_item extends WPBakeryShortCode
    {
    }
}

new vcFeatured(); ?>