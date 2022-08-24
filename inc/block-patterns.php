<?php

/**
 * Registers pattern categories.
 *
 * @since Makoney 1.0.0
 */
function makoney_register_pattern_categories() {

		$block_pattern_categories = array(
			'heroes'      => array( 'label' => __( 'Heroes', 'makoney' ) ),
			'features'    => array( 'label' => __( 'Features', 'makoney' ) ),
			'teams'       => array( 'label' => __( 'Teams', 'makoney' ) ),
			'portfolios' => array( 'label' => __( 'Portfolios', 'makoney' ) ),
			'texts'        => array( 'label' => __( 'Texts', 'makoney' ) ),
			'contacts'    => array( 'label' => __( 'Contacts', 'makoney' ) ),
			'queries'     => array( 'label' => __( 'Queries', 'makoney' ) ),
			'banners'     => array( 'label' => __( 'Banners', 'makoney' ) ),
			'blog'        => array( 'label' => __( 'Blog', 'makoney' ) ),
			'newsletters' => array( 'label' => __( 'Newsletters', 'makoney' ) ),
			'headers'     => array( 'label' => __( 'Headers', 'makoney' ) ),
			'footers'     => array( 'label' => __( 'Footers', 'makoney' ) ),
			'pages'       => array( 'label' => __( 'Pages', 'makoney' ) ),
		);

		$block_pattern_categories = apply_filters( 'makoney_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}
}
add_action( 'init', 'makoney_register_pattern_categories' );