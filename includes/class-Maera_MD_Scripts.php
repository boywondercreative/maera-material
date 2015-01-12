<?php

class Maera_MD_Scripts {

	function __construct() {

		// Early exit if Maera does not exist
		if ( ! class_exists( 'Maera' ) ) {
			return;
		}

		if ( Maera_Development::dev_mode() ) {
			// Enqueue dev-mode scripts scripts
			add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );
		} else {
			// Enqueue normal scripts
			add_action( 'wp_enqueue_scripts', array( $this, 'dev_scripts' ) );
		}
		// Enqueue the styles
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

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
	 * Register dev-mode scripts
	 */
	function dev_scripts() {

		$scripts = array(
			"jquery.easing.1.3.js",
			"velocity.min.js",
			"hammer.min.js",
			"jquery.hammer.js",
			"collapsible.js",
			"dropdown.js",
			"leanModal.js",
			"materialbox.js",
			"parallax.js",
			"tabs.js",
			"tooltip.js",
			"waves.js",
			"toasts.js",
			"sideNav.js",
			"scrollspy.js",
			"forms.js",
			"slider.js",
			"cards.js",
			"pushpin.js",
			"date_picker/picker.js",
			"date_picker/picker.date.js",
		);

		foreach ( $scripts as $script ) {
			$id = 'md_' . str_replace( array( '.', '/' ), '_', $script );
			wp_register_script( $id, MAERA_MATERIAL_SHELL_URL . '/assets/js/dev/script', false, null, true  );
			wp_enqueue_script( $id );
		}

	}

}
