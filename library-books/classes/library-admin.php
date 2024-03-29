<?php
/**
 *
 * Admin panel
 */
class Library_Admin {
	public function __construct() {
		// Settings menu
		add_action( 'admin_menu', array( $this, 'library_create_menu' ) );
	}
	// Menu
	public function library_create_menu() {
		add_menu_page(
			__( 'Library', 'library-txt' ),
			__( 'Library Data', 'library-txt' ),
			'administrator',
			'library-settings',
			array( $this, 'library_settings_page' ), // Admin settings page
			'dashicons-book',
			6
		);
	}
	// Menu page
	public function library_settings_page() {
		include_once( plugin_dir_path( __FILE__ ) . '../view/library-settings-page.php' );
	}

}