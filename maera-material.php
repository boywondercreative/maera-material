<?php
/*
Plugin Name:         Maera Material Design Shell
Plugin URI:          https://press.codes
Description:         Material Design shell
Version:             0.95.1
Author:              Aristeides Stathopoulos
Author URI:          https://press.codes
Text Domain:         maera_md
*/

define( 'MAERA_MD_VER', '0.95.1' );
define( 'MAERA_MATERIAL_SHELL_URL', plugins_url( '', __FILE__ ) );
define( 'MAERA_MATERIAL_SHELL_PATH', dirname( __FILE__ ) );

/**
 * Include the shell
 */
function maera_shell_material_include( $shells ) {

	// Add our shell to the array of available shells
	$shells[] = array(
		'value' => 'material',
		'label' => 'Material',
		'class' => 'Maera_Material',
	);

	return $shells;

}
add_filter( 'maera/shells/available', 'maera_shell_material_include' );

if ( ! class_exists( 'Maera_Material' ) ) {

	/**
	* The Material Design Shell module
	*/
	class Maera_Material {

		private static $instance;
		public $timber;
		public $widgets;
		public $customizer;
		public $layouts;
		public $styles;
		public $scripts;
		public $metabox;

		/**
		* Class constructor
		*/
		public function __construct() {

			if ( ! defined( 'MAERA_SHELL_PATH' ) ) {
				define( 'MAERA_SHELL_PATH', dirname( __FILE__ ) );
			}

			$this->requires();
			$this->required_plugins();

			$this->timber     = new Maera_MD_Timber();
			$this->widgets    = new Maera_MD_Widgets();
			$this->customizer = new Maera_MD_Customizer();
			$this->styles     = new Maera_MD_Styles();
			$this->scripts    = new Maera_MD_Scripts();
			$this->metabox    = new Maera_MD_Post_Metabox();
			$this->layout     = get_theme_mod( 'layout', 1 );

			// Layout modifier
			global $post;
			if ( is_singular() ) {
				$custom_layout = get_post_meta( $post->ID, 'maera_md_layout', true );
				if ( 'default' != $custom_layout ) {
					$this->layout = $custom_layout;
				}
			}

			// Add theme supports
			add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );

		}

		/**
		 * Singleton
		 */
		public static function get_instance() {

			if ( null == self::$instance ) {
				self::$instance = new self;
			}

			return self::$instance;

		}

		/**
		 * Include required files
		 */
		function requires() {

			require_once( __DIR__ . '/includes/class-Maera_MD_Data.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Timber.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Widgets.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Customizer.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Typo.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Scripts.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Styles.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Post_Metabox.php' );

		}

		/**
		* Build the array of required plugins.
		* You can use the 'maera/required_plugins' filter to add or remove plugins.
		*/
		function required_plugins( $plugins = array() ) {

			if ( ! $plugins || empty( $plugins ) ) {
				$plugins = array();
			}

			$plugins[] = array(
				'name' => 'jQuery Updater',
				'file' => 'jquery-updater.php',
				'slug' => 'jquery-updater',
			);

			$plugins = new Maera_Required_Plugins( $plugins );

		}

		/**
		* Add theme supports
		*/
		function theme_supports() {

			// Add theme support for Custom Header
			add_theme_support( 'custom-header', array(
			'default-image'          => '',
			'width'                  => 0,
			'height'                 => 0,
			'flex-width'             => true,
			'flex-height'            => true,
			'uploads'                => true,
			'random-default'         => true,
			'header-text'            => false,
			'default-text-color'     => '#333333',
			'wp-head-callback'       => '',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
			) );

			// add_theme_support( 'infinite-scroll', array(
			// 	'type'           => 'click',
			// 	'footer_widgets' => false,
			// 	'container'      => 'content',
			// 	'wrapper'        => false,
			// 	'render'         => false,
			// 	'posts_per_page' => false,
			// ) );

			add_theme_support( 'site-logo' );

		}

		public static function custom_header_url() {

			$image_url = get_header_image();
			if ( is_singular() && has_post_thumbnail() ) {
				$image_array = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
				$image_url = $image_array[0];
			}

			if ( empty( $image_url ) ) {
				return false;
			} else {
				return $image_url;
			}

		}

	}

}

/**
 * Licensing handler
 */
function maera_md_licensing() {

	if ( is_admin() && class_exists( 'Maera_Updater' ) ) {
		$maera_md_license = new Maera_Updater( 'plugin', __FILE__, 'Maera Material Design Shell', MAERA_MD_VER, '@aristath, @fovoc' );
	}

}
add_action( 'init', 'maera_md_licensing' );
