<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Hotel_Api
 * @subpackage Hotel_Api/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hotel_Api
 * @subpackage Hotel_Api/public
 * @author     Your Name <email@example.com>
 */
class Hotel_Api_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Hotel_Api    The ID of this plugin.
	 */
	private $Hotel_Api;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Hotel_Api       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Hotel_Api, $version ) {

		$this->Hotel_Api = $Hotel_Api;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hotel_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hotel_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->Hotel_Api, plugin_dir_url( __FILE__ ) . 'css/hotel-api-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hotel_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hotel_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->Hotel_Api, plugin_dir_url( __FILE__ ) . 'js/hotel-api-public.js', array( 'jquery' ), $this->version, false );

	}

}
