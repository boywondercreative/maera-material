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
			require_once( __DIR__ . '/includes/class-Maera_MD_Widget_Dropdown.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Widgets.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Customizer.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Layout.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Typo.php');
			require_once( __DIR__ . '/includes/class-Maera_MD_Nav.php');

			// Enqueue the scripts
			add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

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

			wp_enqueue_style( 'materialize', MAERA_MATERIAL_SHELL_URL . '/assets/css/materialize.css', false, null, 'all' );
			wp_enqueue_style( 'maera-materialize', MAERA_MATERIAL_SHELL_URL . '/assets/css/style.css', false, null, 'all' );

			// wp_enqueue_style( 'dashicons' );

		}

	}

}
