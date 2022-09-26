<?php

if (!defined('ABSPATH')) die('-1');

class vcContent extends WPBakeryShortCode {

	function __construct() {
    	add_action( 'init', array( $this, 'content_box' ) );
    	add_shortcode( 'content', array( $this, 'content_function' ) );
	}

	public function content_box(){

		  if ( !defined( 'WPB_VC_VERSION' ) ) {
        	return;
    	}
      

    	vc_map( array(
            "name" => __( "Main content", "Business CS" ),
            "base" => "content",
            "icon"=> "icon-box",
            "category" => __( "Business CS", "Business CS"),
            
            "params" => array(
                array(
                      "type" => "attach_image",
                      "class" => "",
                      "heading" => __( "Upload Image", "Cox CS" ),
                      "param_name" => "content_background_image",
                      "value" => __( get_template_directory_uri().'/images/speakers/featured-speaker-two.jpg', "Cox CS" ),
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
                      'heading' => __('Span Heading', 'Cox CS'),
                      'param_name' => 'span_heading',
                      "description" => __( "Add Span Heading here.", "Cox CS" ),
                      'value' => esc_html__('', 'Cox CS'),
                    ),
                    array(
                     'type' => 'textarea',
                     'heading' => __('Description', 'Cox CS'),
                     'param_name' => 'description',
                     "description" => __( "Add description here.", "Cox CS" ),
                     'value' => esc_html__('', 'Cox CS'),
                   ),
                   array(
                     'type' => 'textarea',
                     'heading' => __('Sub Description', 'Cox CS'),
                     'param_name' => 'sub_description',
                     "description" => __( "Add sub description here.", "Cox CS" ),
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
                     'type' => 'textfield',
                     'heading' => __('Button Text 2', 'Cox CS'),
                     'param_name' => 'button_text_2',
                     "description" => __( "Add button text 2 here.", "Cox CS" ),
                     'value' => esc_html__('', 'Cox CS'),
                   ),
            )
         ) );

	}

	public function content_function( $atts, $content = null ){
		
		$output = '';
		extract(
			shortcode_atts(
				array(
          'content_background_image'  => '',
          'heading' => '',
          'span_heading' => '',
          'description' => '',
          'sub_description' => '',
          'button_text' => '',
          'button_text_2' => '',
				), $atts
			)
		);
    $content_background_image = wp_get_attachment_image_src( $content_background_image, 'full' );

		$output ='<section class="section about">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-6 align-self-center">
               <div class="image-block two bg-about">
                  <img class="img-fluid" src="' .$content_background_image[0]. '" alt="">
               </div>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center ml-lg-auto">
               <div class="content-block">
                  <h2>' .$heading. ' <span class="alternate">' .$span_heading. '</span></h2>
                  <div class="description-one">
                     <p>
                     ' .$description. '
                     </p>
                  </div>
                  <div class="description-two">
                     <p>' .$sub_description. '</p>
                  </div>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <a href="#" class="btn btn-main-md">' .$button_text. '</a>
                     </li>
                     <li class="list-inline-item">
                        <a href="#" class="btn btn-transparent-md">' .$button_text_2. '</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>';

		return $output;

	}

}

new vcContent();