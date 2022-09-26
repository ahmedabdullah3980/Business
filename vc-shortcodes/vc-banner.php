<?php

if (!defined('ABSPATH')) die('-1');

class vcBanner extends WPBakeryShortCode {

	function __construct() {
    	add_action( 'init', array( $this, 'banner_box' ) );
    	add_shortcode( 'banner', array( $this, 'banner_function' ) );
	}

	public function banner_box(){

		  if ( !defined( 'WPB_VC_VERSION' ) ) {
        	return;
    	}
      

    	vc_map( array(
            "name" => __( "Main Banner", "Business CS" ),
            "base" => "banner",
            "icon"=> "icon-box",
            "category" => __( "Business CS", "Business CS"),
            
            "params" => array(
                array(
                      "type" => "attach_image",
                      "class" => "",
                      "heading" => __( "Upload Image", "Cox CS" ),
                      "param_name" => "banner_background_image",
                      "value" => __( get_template_directory_uri().'/assets/images/banner-bg.png', "Cox CS" ),
                      "description" => __( "Add background Image", "Cox CS" ),
                      "group" => 'Media'
                    ),
                array(
                      'type' => 'textfield',
                      'heading' => __('Heading', 'Cox CS'),
                      'param_name' => 'heading',
                      "description" => __( "Add heading here.", "Cox CS" ),
                      'value' => esc_html__('', 'Cox CS'),
                    ),
                array(
                      'type' => 'textfield',
                      'heading' => __('Heading 1', 'Cox CS'),
                      'param_name' => 'heading_1',
                      "description" => __( "Add sub heading 1 here.", "Cox CS" ),
                      'value' => esc_html__('', 'Cox CS'),
                    ),
                    array(
                     'type' => 'textfield',
                     'heading' => __('Heading 2', 'Cox CS'),
                     'param_name' => 'heading_2',
                     "description" => __( "Add heading  2 here.", "Cox CS" ),
                     'value' => esc_html__('', 'Cox CS'),
                   ),
                   array(
                     'type' => 'textfield',
                     'heading' => __('Heading 3', 'Cox CS'),
                     'param_name' => 'heading_3',
                     "description" => __( "Add heading 3 here.", "Cox CS" ),
                     'value' => esc_html__('', 'Cox CS'),
                   ),
                   array(
                     'type' => 'textfield',
                     'heading' => __('Button Text', 'Cox CS'),
                     'param_name' => 'button_text',
                     "description" => __( "Add button text here.", "Cox CS" ),
                     'value' => esc_html__('', 'Cox CS'),
                   ),
                   array(
                     'type' => 'css_editor',
                     'heading' => __( 'Css', 'Eventre Theme' ),
                     'param_name' => 'css',
                     'group' => __( 'Design options', 'Eventre Theme' ),
                     ),
            )
         ) );

	}

	public function banner_function( $atts, $content = null ){
		
		$output = '';
		extract(
			shortcode_atts(
				array(
          'banner_background_image'  => '',
          'heading' => '',
          'heading_1' => '',
          'heading_2' => '',
          'heading_3' => '',
          'button_text' => '',
				), $atts
			)
		);
    $banner_background_image = wp_get_attachment_image_src( $banner_background_image, 'full' );
    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
    print_r($css_class);
		$output ='<section class="banner-two bg-banner-two overlay-white-slant text-overlay'. esc_attr( $css_class ) .'" style = "background:url(' .$banner_background_image[0]. ') no-repeat;">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <!-- Content Block -->
               <div class="block">
                  <h1>' .$heading. '</h1>
                  <h2>' .$heading_1. '</h2>
                  <h3>' .$heading_2. '</h3>
                  <h6>' .$heading_3. '</h6>
                  <!-- Action Button -->
                  <a href="#" class="btn btn-main-md">' .$button_text. '</a>
               </div>
            </div>
         </div>
      </div>
   </section>';

		return $output;

	}

}

new vcBanner();