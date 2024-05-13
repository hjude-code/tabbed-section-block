<?php
/**
 * Plugin Name:       Tabbed-section
 * Description:       Simple block grouping that has a tabbed header
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.1
 * Author:            hjude
 * Text Domain:       tabbed-section
 *
 * @package TabbedSection
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function tabbed_section_tabbed_section_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'tabbed_section_tabbed_section_block_init' );
