<?php
/**
 * Adding theme setup for custome logo and footer logo
 *
 * 
 */


if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/theme-options/sample/barebones-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/theme-options/sample/barebones-config.php' );
}

if(! function_exists( 'eventre_cs_setup' )){

    function eventre_cs_setup(){

        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );

        add_theme_support( 'title-tag' );

		add_theme_support( 'custom-header' );

        register_nav_menus( 
            array(
                'primary-menu' => 'Primary Menu',
				'primary-menu-2' => 'Primary Menu 2',
                'footer-menu' => 'Footer Menu',
				'footer-menu-2' => 'Footer Menu 2',
            )
        );      
    }
}
 
add_action( 'after_setup_theme', 'eventre_cs_setup' );


function eventre_customizer_setting($wp_customize) {
	// add a setting 
		$wp_customize->add_setting('footer_logo');
	// Add a control to upload the hover logo
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'your_theme_hover_logo', array(
			'label' => 'Footer Logo',
			'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
			'settings' => 'footer_logo',
			'priority' => 1, // show it just below the custom-logo
		)));
	}
	
	 
	
	add_action('customize_register', 'eventre_customizer_setting');
/* logo setting */

function eventre_widgets_init() {
	register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="ticket">',
        'after_widget'  => '</div>',
    ) );

	register_sidebar( array(
        'name'          => 'Custom Footer Widget Area',
        'id'            => 'custom-footer-widget',
        'before_widget' => '<ul class="social-links-footer list-inline">',
        'after_widget'  => '</ul>',
    ) );
}
add_action( 'widgets_init', 'eventre_widgets_init' );


function eventre_styles() {
	
	// Bootstrap 4.0.0
	wp_enqueue_style('eventre-bootstrap-min', get_template_directory_uri(). '/plugins/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('eventre-bootstrap-min');
	
	wp_enqueue_style('eventre-font-awesome', get_template_directory_uri(). '/plugins/font-awsome/css/font-awesome.min.css');
	wp_enqueue_script('eventre-font-awesome');
    
	wp_enqueue_style('eventre-magnific-popup', get_template_directory_uri(). '/plugins/magnific-popup/magnific-popup.css');
	wp_enqueue_script('eventre-magnific-popup');

	wp_enqueue_style('eventre-slick', get_template_directory_uri(). '/plugins/slick/slick.css');
	wp_enqueue_script('eventre-slick');

	wp_enqueue_style('eventre-slick-theme', get_template_directory_uri(). '/plugins/slick/slick-theme.css');
	wp_enqueue_script('eventre-slick-theme');

	// Load Main stylesheet

	wp_enqueue_style( 'eventre-style', get_stylesheet_uri() );
	wp_enqueue_script('eventre-style');
}
add_action( 'wp_enqueue_scripts', 'eventre_styles', 100 );

function eventre_scripts(){

	// Owl Carousel Js
    wp_enqueue_script('jquery-owl-carousel-js', get_template_directory_uri() . '/assets/vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array('jquery'), '3.2.1', true);
    wp_enqueue_script('jquery-owl-carousel-js');
	
	//Custom Script
    wp_enqueue_script('custom-js-tfn', get_template_directory_uri() . '/assets/custom.js', array(), true);
    wp_enqueue_script('custom-js-tfn');
	
	wp_enqueue_script("jquery-js", get_template_directory_uri().'/plugins/jquery/jquery.js',array(), '3.3.1',true);

	wp_enqueue_script('popper-min-js', get_template_directory_uri().'/plugins/popper/popper.min.js',array(), '3.3.1',true);

	wp_enqueue_script("bootstrap-min-js", get_template_directory_uri().'/plugins/bootstrap/js/bootstrap.min.js',array(), '4.0.0',true);

	wp_enqueue_script('SmoothScroll-min-js', get_template_directory_uri().'/plugins/smoothscroll/SmoothScroll.min.js', array(), '3.3.1',true);

	wp_enqueue_script('mixitup-min-js', get_template_directory_uri().'/plugins/isotope/mixitup.min.js', array(),  '3.3.1',true);

	wp_enqueue_script('magnific-popup-min-js', get_template_directory_uri().'/plugins/magnific-popup/jquery.magnific-popup.min.js', array(),'3.3.1', true);
    
	//Slick Slider

	wp_enqueue_script('slick-min-js', get_template_directory_uri().'/plugins/slick/slick.min.js', array(),'3.3.1', true);

	wp_enqueue_script('syotimer-min-js', get_template_directory_uri().'/plugins/syotimer/jquery.syotimer.min.js', array(), '3.3.1',true);

	wp_enqueue_script('google-map-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ');

	wp_enqueue_script('gmap-js', get_template_directory_uri().'/plugins/google-map/gmap.js', array(), '3.3.1',true);

	wp_enqueue_script('custom-js', get_template_directory_uri().'/js/custom.js', array(),'3.3.1', true);
}
add_action( 'wp_enqueue_scripts', 'eventre_scripts', 100 );


// Add class to A element of .primary-menu
function tps_primary_menu_anchor_class($item_output, $item, $depth, $args) {
    $item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'tps_primary_menu_anchor_class', 10, 4);

function your_submenu_class($menu) {

	$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
	
	return $menu;  
}
add_filter('wp_nav_menu','your_submenu_class');

/* this fuction is use to add link classes in wp-nav-menu */
function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
/* this function for nav last and first item */
	function wpb_first_and_last_menu_class($items) {
		$items[1]->classes[] = 'first';
		$items[count($items)]->classes[] = 'last';
		return $items;
	}
	add_filter('wp_nav_menu_objects', 'wpb_first_and_last_menu_class');

	function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function evente_theme_options_global_variable()
    {
    global $yourglobalvariable;
    }

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WPBakeryShortCode' ) ) {
	// Including all shorcodes files
	$dir = get_template_directory( __FILE__ ) . '/vc-shortcodes/';
	$files = scandir( $dir, 1 );
	foreach ( $files as $file ) {
		if ( '.' !== $file && '..' !== $file ) {
			if ( is_file( get_template_directory( __FILE__ ) . '/vc-shortcodes/' . $file ) ) {
				require_once get_template_directory( __FILE__ ) . '/vc-shortcodes/' . $file;
			}
		}
	}
}