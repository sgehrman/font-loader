<?php
/*
Plugin Name: Font Loader
Version: v1.0
Plugin URI: http://www.visionarycongress.org/
Author: Steve Gehrman
Author URI: http://www.visionarycongress.org/
Description: Loads fonts.
 */

// see https://codex.wordpress.org/Writing_a_Plugin
defined( 'ABSPATH' ) or exit( 'No script kiddies please!' );

class FontLoader {
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_fonts_folder' ), 1000);
	}

	function enqueue_fonts_folder() {
		$fontPath = plugin_dir_url( __FILE__ ) . 'css/fonts.css';

		wp_enqueue_style( 'font-css', $fontPath );

		wp_dequeue_style('divi-fonts');
		wp_dequeue_style('et-gf-lato');
		wp_dequeue_style('tt-easy-google-fonts');

	}
}

// instantiate the plugin
new FontLoader();