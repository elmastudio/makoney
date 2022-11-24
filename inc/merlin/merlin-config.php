<?php
/**
 * Merlin WP configuration file.
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */

	$config = array(
		'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'dev_mode'             => true, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	);

	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Demo Import', 'makoney' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'makoney' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'makoney' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'makoney' ),

		'btn-skip'                 => esc_html__( 'Skip', 'makoney' ),
		'btn-next'                 => esc_html__( 'Next', 'makoney' ),
		'btn-start'                => esc_html__( 'Start', 'makoney' ),
		'btn-try-again'            => esc_html__( 'Try Again', 'makoney' ),
		'btn-no'                   => esc_html__( 'Cancel', 'makoney' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'makoney' ),
		'btn-plugins-activate'     => esc_html__( 'Activating...', 'makoney' ),
		'btn-content-install'      => esc_html__( 'Install', 'makoney' ),
		'btn-import'               => esc_html__( 'Import', 'makoney' ),
		'btn-content-importing'    => esc_html__( 'Importing...', 'makoney' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'makoney' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'makoney' ),
		'welcome%s'                => esc_html__( 'This wizard will help you to import your theme demo content. It should take only a few minutes.', 'makoney' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'makoney' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'makoney' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'makoney' ),
		'plugins'                  => esc_html__( 'Let\'s install the recommended WordPress plugins to get your site up to speed.', 'makoney' ),
		'plugins-success%s'        => esc_html__( 'The recommended WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'makoney' ),
		'plugins-install-error%s'  => esc_html__( 'Installation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'makoney' ),
		'plugins-activate-error%s' => esc_html__( 'Activation failed: An unexpected error occurred. Something may be wrong with WordPress.org or this server\'s configuration.', 'makoney' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'makoney' ),

		'import-header'            => esc_html__( 'Import Theme Demo Content', 'makoney' ),
		'import'                   => esc_html__( 'Let\'s import the theme demo content to your website. This could take some minutes. Please wait.', 'makoney' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themes.ainoblocks.io/makoney/', esc_html__( 'Import Theme Demo Content', 'makoney' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'makoney' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'makoney' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your demo import is ready. You are all done.', 'makoney' ),
		'ready-action-link'        => esc_html__( 'Helpful resources', 'makoney' ),
		'ready-big-button'         => esc_html__( 'View your website', 'makoney' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.ainoblocks.io/', esc_html__( 'Documentation', 'makoney' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://ainoblocks.io/', esc_html__( 'Get Theme Support', 'makoney' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'site-editor.php' ), esc_html__( 'Start Customizing', 'makoney' ) ),
);

$wizard = new Merlin( $config, $strings );

