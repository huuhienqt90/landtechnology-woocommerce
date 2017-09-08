<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for general settings  -
// ----------------------------------------
$options[]      = array(
	'name'        => 'general_settings',
	'title'       => __('General Settings', THEME_TEXTDOMAIN),
	'icon'        => 'fa fa-cogs',
	'sections'    => array(
			array(
				'name'      => 'general_settings',
				'title'     => __('General Settings', THEME_TEXTDOMAIN),
				'icon'      => 'fa fa-cogs',

				// begin: fields
				'fields'    => array(

				), // end: fields

			), // end: general settings

			array(
				'name'      => 'header_settings',
				'title'     => __('Header Settings', THEME_TEXTDOMAIN),
				'icon'      => 'fa fa-cogs',

				// begin: fields
				'fields'    => array(

				), // end: fields

			), // end: general settings

			array(
				'name'      => 'footer_settings',
				'title'     => __('Footer Settings', THEME_TEXTDOMAIN),
				'icon'      => 'fa fa-cogs',

				// begin: fields
				'fields'    => array(

				), // end: fields

			), // end: general settings
	)
);


// ----------------------------------------
// a option section for social media  -
// ----------------------------------------
$options[]      = array(
	'name'        => 'social_media',
	'title'       => __('Social Media', THEME_TEXTDOMAIN),
	'icon'        => 'fa fa-share'
);


// ----------------------------------------
// a option section for advanced  -
// ----------------------------------------
$options[]     = array(
	'name'        => 'advanced',
	'title'       => __('Advanced', THEME_TEXTDOMAIN),
	'icon'        => 'fa fa-cubes'
);

// ----------------------------------------
// a option section for advanced  -
// ----------------------------------------
$options[]      = array(
	'name'        => 'custom_css',
	'title'       => __('Custom CSS', THEME_TEXTDOMAIN),
	'icon'        => 'fa fa-css3',
	'fields'      => array(
		 // begin: a field
		array(
			'id'      => 'custom_css',
			'type'    => 'textarea',
			'title'   => 'Custom CSS',
		),
		// end a field
	)
);

return $options;
