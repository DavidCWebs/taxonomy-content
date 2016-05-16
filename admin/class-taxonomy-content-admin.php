<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Taxonomy_Content
 * @subpackage Taxonomy_Content/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Taxonomy_Content
 * @subpackage Taxonomy_Content/admin
 * @author     Your Name <email@example.com>
 */
class Taxonomy_Content_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $taxonomy_content    The ID of this plugin.
	 */
	private $taxonomy_content;

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
	 * @param      string    $taxonomy_content       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $taxonomy_content, $version ) {

		$this->taxonomy_content = $taxonomy_content;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Taxonomy_Content_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Taxonomy_Content_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->taxonomy_content, plugin_dir_url( __FILE__ ) . 'css/taxonomy-content-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Taxonomy_Content_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Taxonomy_Content_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->taxonomy_content, plugin_dir_url( __FILE__ ) . 'js/taxonomy-content-admin.js', array( 'jquery' ), $this->version, false );

	}

}
