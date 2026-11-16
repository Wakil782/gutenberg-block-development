<?php
/**
 * Plugin Name:       Kapoor Khan Block
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       kapoor-khan-block
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) { // ekhane ) add korlam
	exit;
}

/**
 * Registers the block(s) metadata from the `blocks-manifest.php` 
 * This is the new and correct way for WP 6.7+
 */
function create_block_kapoor_khan_block_init() {
	$manifest_path = __DIR__ . '/build/blocks-manifest.php';
	
	if ( file_exists( $manifest_path ) ) {
	// This one line will register BOTH parent and child from build/blocks-manifest.php
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', $manifest_path );
	}
}

add_action( 'init', 'create_block_kapoor_khan_block_init' );