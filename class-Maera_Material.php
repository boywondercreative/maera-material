<?php

if ( ! class_exists( 'Maera_Material' ) ) {

	/**
	* The Material Design Shell module
	*/
	class Maera_Material {

		private static $instance;

		/**
		 * Class constructor
		 */
		public function __construct() {

			if ( ! defined( 'MAERA_SHELL_PATH' ) ) {
				define( 'MAERA_SHELL_PATH', dirname( __FILE__ ) );
			}

			require_once( __DIR__ . '/includes/variables.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Timber.php');
			require_once( __DIR__ . '/includes/class-Maera_Widget_Dropdown.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Widgets.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Customizer.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Layout.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Typo.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Styles.php');

			// Enqueue the scripts
			add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );
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
		 * Register all scripts and additional stylesheets (if necessary)
		 */
		function scripts() {

			wp_register_script( 'materialize-js', MAERA_MATERIAL_SHELL_URL . '/assets/js/materialize.js', false, null, true  );
			wp_enqueue_script( 'materialize-js' );

			wp_enqueue_style( 'maera-materialize', MAERA_MATERIAL_SHELL_URL . '/assets/css/maera-materialize.css', false, null, 'all' );

			wp_enqueue_style( 'dashicons' );

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
				'header-text'            => true,
				'default-text-color'     => '#333333',
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			) );

			add_theme_support( 'infinite-scroll', array(
				'type'           => 'click',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => false,
			) );

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
