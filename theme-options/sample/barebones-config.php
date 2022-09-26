<?php
/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

if ( ! class_exists( 'Redux' ) ) {
	return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'theme_option';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	// REQUIRED!!  Change these values as you need/desire.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	'menu_title'                => esc_html__( 'Eventre Theme Options', 'Eventre' ),
	'page_title'                => esc_html__( 'Eventre Theme Options', 'Eventre' ),

	// Disable this in case you want to create your own google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Choose an icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Choose an priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Set a different name for your global variable other than the opt_name.
	'global_variable'           => '',

	// Show the time the page took to load, etc.
	'dev_mode'                  => true,

	// Enable basic customizer support.
	'customizer'                => true,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => null,

	// For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel.
	'page_slug'                 => '_options',

	// On load save the defaults to DB before user clicks save or not.
	'save_defaults'             => true,

	// If true, shows the default value next to each field that is not the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default. Suggested: *.
	'default_mark'              => '',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => false,

	// CAREFUL -> These options are for advanced use only.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
	'output_tag'                => true,

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',

	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	'use_cdn'                   => true,
	'compiler'                  => true,

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'light',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => esc_html__( 'Documentation', 'Eventre' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => esc_html__( 'Support', 'Eventre' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => esc_html__( 'Extensions', 'Eventre' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
	'url'   => '//github.com/ReduxFramework/ReduxFramework',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
	'title' => esc_html__( 'Like us on Facebook', 'Eventre' ),
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reduxframework',
	'title' => esc_html__( 'Follow us on Twitter', 'Eventre' ),
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/redux-framework',
	'title' => esc_html__( 'FInd us on LinkedIn', 'Eventre' ),
	'icon'  => 'el el-linkedin',
);

// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}
	$args['intro_text'] = '<p>' . sprintf( __( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $s', 'Eventre' ) . '</p>', '<strong>' . $v . '</strong>' );
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'Eventre' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'Eventre' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'Eventre' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'Eventre' ) . '</p>',
	),

	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'Eventre' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'Eventre' ) . '</p>',
	),
);

Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'Eventre' ) . '</p>';
Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
);


Redux::set_section( $opt_name, $section );

$section = array(
	'title' => __( 'General Options', 'Eventre' ),
	'id'    => 'basic',
	'desc'  => __( 'Basic fields as subsections.', 'Eventre' ),
	'icon'  => 'el el-home',
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'General Setting', 'Eventre' ),
	'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'Eventre' ) . '<a href="https://devs.redux.io/core-fields/text.html" target="_blank">https://devs.redux.io/core-fields/text.html</a>',
	'id'         => 'general-text-subsection',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'           => 'favicon',
			'type'         => 'media',
			'url'          => true,
			'title'        => esc_html__( 'Favicon Logo', 'Eventre' ),
			'compiler'     => 'true',
			'preview_size' => 'small',
		),
		array(
			'id'       => 'switch-on-header',
			'type'     => 'switch',
			'title'    => esc_html__( 'Switch On', 'Eventre' ),
			'subtitle' => esc_html__( 'Look, it\'s on!', 'Eventre' ),
			'default'  => true,
			'on'       => 'sticky',
			'off'      => 'Fixed',
		),
		array(
			'id'       => 'header-class',
			'type'     => 'text',
			'title'    => esc_html__( 'Header Sticky Class', 'Eventre' ),
			'desc'     => esc_html__( 'Please add your class to make header sticky', 'Eventre' ),
			'default'  => 'fixed-top',
			'required' => array( 'switch-on-header', '=', '1' ),
		),
	),
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Header', 'Eventre' ),
	'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'Eventre' ) . '<a href="https://devs.redux.io/core-fields/text.html" target="_blank">https://devs.redux.io/core-fields/text.html</a>',
	'id'         => 'header-text-subsection',
	'subsection' => true,
	'fields'     => array(

		array(
			'id'       => 'opt-image-select-layout',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Header Layout', 'Eventre' ),
			'subtitle' => esc_html__( 'Style of the Header Section', 'Eventre' ),

			// Must provide key => value(array:title|img) pairs for radio options.
			'options'  => array(
				'1' => array(
					'alt' => '1 Column',
					'img' => Redux_Core::$url . 'assets/img/header.png',
				),
			),
			'default'  => '1',
		),
		array(
			'id'       => 'site-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Site Title', 'Eventre' ),
			'desc'     => esc_html__( 'Field Description', 'Eventre' ),
			'default'  => 'Default Text',
		),
		array(
			'id'       => 'switch-on',
			'type'     => 'switch',
			'title'    => esc_html__( 'Switch On', 'Eventre' ),
			'subtitle' => esc_html__( 'Look, it\'s on!', 'Eventre' ),
			'default'  => true,
			'on'       => 'Custom',
			'off'      => 'Prededfined'
		),
		array(
			'id'           => 'header-logo',
			'type'         => 'media',
			'url'          => true,
			'title'        => esc_html__( 'Header Logo', 'Eventre' ),
			'compiler'     => 'true',
			'preview_size' => 'full',
		),
		array(
			'id'             => 'Logo-dimensions',
			'type'           => 'dimensions',
			'units'          => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %.
			'units_extended' => 'true', // Allow users to select any type of unit.
			'title'          => esc_html__( 'Main Header Logo Dimension', 'Eventre' ),
			'desc'           => esc_html__( 'Please Add Logo Dimesions.', 'Eventre' ),
			'default'        => array(
				'width'  => 200,
				'height' => 100,
			),
			'required' => array( 'switch-on', '=', '1' ),
		),
		array(
			'id'             => 'Logo-dimensions-Pre',
			'type'           => 'dimensions',
			'units'          => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %.
			'units_extended' => 'false', // Allow users to select any type of unit.
			'title'          => esc_html__( 'Main Header Logo Dimension', 'Eventre' ),
			'desc'           => esc_html__( 'Please Defined Your Logo Dimension.', 'Eventre' ),
			'default'        => array(
				'width'  => 167,
				'height' => 31,
			),
			'required' => array( 'switch-on', '=', '0' ),
		),
		array(
			'id'           => 'header-ticket-logo',
			'type'         => 'media',
			'url'          => true,
			'title'        => esc_html__( 'Ticket Icon', 'Eventre' ),
			'compiler'     => 'true',
			'preview_size' => 'full',
		),
		array(
			'id'       => 'ticket-title',
			'type'     => 'text',
			'title'    => esc_html__( 'Ticket Title', 'Eventre' ),
			'desc'     => esc_html__( 'Add your Ticket text here.', 'Eventre' ),
			'default'  => 'Buy Ticket',
		),

	),
);

Redux::set_section( $opt_name, $section );

$section = array(
	'title'      => esc_html__( 'Footer', 'Eventre' ),
	'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'Eventre' ) . '<a href="https://devs.redux.io/core-fields/text.html" target="_blank">https://devs.redux.io/core-fields/text.html</a>',
	'id'         => 'footer-text-subsection',
	'subsection' => true,
	'fields'     => array(

		array(
			'id'           => 'footer-logo',
			'type'         => 'media',
			'url'          => true,
			'title'        => esc_html__( 'Footer Logo', 'Eventre' ),
			'compiler'     => 'true',
			'preview_size' => 'full',
			'default'  => array(
				'url'=>'http://localhost/business/wp-content/uploads/2022/03/footer-logo.png'
			),
		),
		array(
			'id'             => 'footer-Logo-dimensions',
			'type'           => 'dimensions',
			'units'          => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %.
			'units_extended' => 'true', // Allow users to select any type of unit.
			'title'          => esc_html__( 'Main Footer Logo Dimension', 'Eventre' ),
			'subtitle'       => esc_html__( 'Adjust your Logo Customization', 'Eventre' ),
			'desc'           => esc_html__( 'Please Add Logo Dimesions.', 'Eventre' ),
		),
		array(
			'id'       => 'footer-copyright',
			'type'     => 'editor',
			'title'    => esc_html__( 'Footer Copyright', 'Eventre' ),
			'desc'     => esc_html__( 'Add your Copright Footer Text', 'Eventre' ),
			'default'  => 'Default Text',
		),

	),
);

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Color', 'Eventre' ),
		'id'         => 'opt-color',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'Eventre' ) . '<a href="https://devs.redux.io/core-fields/color.html" target="_blank">https://devs.redux.io/core-fields/color.html</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'heading-color',
				'type'        => 'color',
				'output'      => array(
					'color'     => '.h1, h2, h3, h4, h5, h6',
					'important' => true,
				),
				'title'       => esc_html__( 'Heading Tags Color', 'Eventre' ),
				'subtitle'    => esc_html__( 'Change your Heading Tag Color.', 'Eventre' ),
				'default'     => '#000000',
				'color_alpha' => true,
			),
			array(
				'id'       => 'opt-color-footer',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Background Color', 'Eventre' ),
				'subtitle' => esc_html__( 'Pick a background color for the Header.', 'Eventre' ),
				'default'  => '#dd9933',
				'validate' => 'color',
				'output'   => array(
					'background-color' => '.main-nav',
				),
			),
		),
	)
);


Redux::set_section( $opt_name, $section );


/*
 * <--- END SECTIONS
 */
