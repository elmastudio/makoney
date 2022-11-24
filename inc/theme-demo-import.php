<?php
/**
 * Theme Demo Import.
 *
 * @package makoney
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Demo import.
*/
function makoney_import_files() {

	return array(
		array(
			'import_file_name'           => 'Makoney',
			'import_file_url'            => 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/makoney-demo-import.xml',
			'import_preview_image_url'	 => esc_url( 'https://elmastudiouploads.s3.eu-central-1.amazonaws.com/makoney-screenshot.png' ),
			'preview_url'                => 'https://themes.ainoblocks.io/makoney/',
		),
	);
}

/**
* Assign menus and front page after demo import
*
* @param array $selected_import array with demo import data
*/
function makoney_after_import( $selected_import ) {
}