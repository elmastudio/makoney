<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package makoney
 * @since 1.0.0
 */

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function makoney_support() {

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 'assets/build/css/style-editor.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'makoney_support' );

if ( ! function_exists( 'makoney_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Makoney 1.0
	 *
	 * @return void
	 */
	function makoney_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'makoney-style',
			get_template_directory_uri() . '/assets/build/css/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'makoney-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'makoney_styles' );


/**
 * Registers pattern categories.
 *
 * @since 1.0.0
 */
function makoney_register_pattern_categories() {

	$block_pattern_categories = array(
		'heroes'      => array( 'label' => __( 'Heroes') ),
		'features'    => array( 'label' => __( 'Features' ) ),
		'teams'       => array( 'label' => __( 'Teams') ),
		'portfolios'  => array( 'label' => __( 'Portfolios' ) ),
		'texts'       => array( 'label' => __( 'Texts' ) ),
		'contacts'    => array( 'label' => __( 'Contacts' ) ),
		'queries'     => array( 'label' => __( 'Queries' ) ),
		'banners'     => array( 'label' => __( 'Banners' ) ),
		'blog'        => array( 'label' => __( 'Blog') ),
		'newsletters' => array( 'label' => __( 'Newsletters' ) ),
		'headers'     => array( 'label' => __( 'Headers' ) ),
		'footers'     => array( 'label' => __( 'Footers' ) ),
		'pages'       => array( 'label' => __( 'Pages' ) ),
	);

	$block_pattern_categories = apply_filters( 'makoney_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'makoney_register_pattern_categories' );

/**
 * Register theme block styles.
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * TGMPA plugin activation.
 */
require_once get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'makoney_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function makoney_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(

		array(
			'name'      => 'AinoBlocks',
			'slug'      => 'aino-blocks',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'makoney',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}