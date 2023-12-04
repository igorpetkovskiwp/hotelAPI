<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Hotel_Api
 * @subpackage Hotel_Api/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Hotel_Api
 * @subpackage Hotel_Api/includes
 * @author     Your Name <email@example.com>
 */
class Hotel_Api_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	public static function activate() {
		flush_rewrite_rules();

		echo "IGOR";

	}


	public static function check_plugin(){

		if(!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
			return false;
		}

	}

}
