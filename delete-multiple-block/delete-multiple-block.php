<?php
/**
 * Plugin Name:       Delete Multiple Block
 * Description:       Example block scaffolded with Create Block tool.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       delete-multiple-block
 *
 * @package CreateBlock
 */



if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function create_block_deleteMultiple_block() {

	$manifest_path = __DIR__ . '/build/blocks-manifest.php';

	if ( file_exists( $manifest_path ) ) {

		wp_register_block_metadata_collection(
			__DIR__ . '/build',
			$manifest_path
		);

		wp_register_block_types_from_metadata_collection(
			__DIR__ . '/build',
			$manifest_path
		);
	}
}

add_action( 'init', 'create_block_deleteMultiple_block' );