<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://paulmiller3000.com
 * @since      1.0.0
 *
 * @package    P3k_Galactica
 * @subpackage P3k_Galactica/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    P3k_Galactica
 * @subpackage P3k_Galactica/includes
 * @author     Paul Miller <hello@paulmiller3000.com>
 */
class P3k_Galactica_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'p3k-galactica',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
