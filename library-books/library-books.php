<?php
// disallow direct file access when core isn't loaded
defined( 'ABSPATH' ) OR exit;
/*
Plugin Name: Library of books
Description: Plugin for store library of books
Version: 1.0
Author: dmitriy_a
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: chatbot-chisw
*/
if ( ! defined( 'BOOKS_TABLE_NAME' ) ) {
	define( 'BOOKS_TABLE_NAME', 'library_books' );
}
if ( ! defined( 'AUTHORS_TABLE_NAME' ) ) {
	define( 'AUTHORS_TABLE_NAME', 'library_authors' );
}
if ( ! defined( 'RELATIONS_TABLE_NAME' ) ) {
	define( 'RELATIONS_TABLE_NAME', 'library_relations' );
}

if ( ! defined( 'LIBRARY_PATH' ) ) {
	define( 'LIBRARY_PATH', plugin_dir_path( __FILE__ ) );
}
include_once LIBRARY_PATH . 'classes/library-hooks.php';
register_activation_hook( __FILE__, array( 'Library_Hooks', 'on_activation' ) );
register_deactivation_hook( __FILE__, array( 'Library_Hooks', 'on_deactivation' ) );
register_uninstall_hook( __FILE__, array( 'Library_Hooks', 'on_uninstall' ) );
include_once LIBRARY_PATH . 'classes/library-admin.php';
new Library_Admin();
include_once LIBRARY_PATH . 'classes/library-init.php';
new Library_Init();