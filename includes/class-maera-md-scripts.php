<?php

class Maera_MD_Scripts {

	function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );
		add_action( 'wp_footer', array( $this, 'custom_js' ) );

	}

	/**
	 * Register stylesheets
	 */
	function styles() {
		wp_enqueue_style( 'maera-materialize', MAERA_MATERIAL_SHELL_URL . '/assets/css/maera-materialize.css', false, null, 'all' );
		wp_enqueue_style( 'dashicons' );
	}

	/**
	 * Register all scripts
	 */
	function scripts() {

		wp_register_script( 'materialize-js', MAERA_MATERIAL_SHELL_URL . '/assets/js/materialize.min.js', false, null, true  );
		wp_enqueue_script( 'materialize-js' );

	}

	/**
	 * Get the value of the 'js' theme mod.
	 * If not empty, echo it in the theme footer.
	 */
	function custom_js() {

		$js = get_theme_mod( 'js', '' );

		if ( ! empty( $js ) ) {
			echo '<script>' . $js . '</script>';
		}

	}

}
