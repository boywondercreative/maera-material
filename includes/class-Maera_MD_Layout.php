<?php

class Maera_MD_Layout {

	public $layout = 1;
	private static $instance;

	function __construct() {

		if ( 0 != $this->layout ) {
			add_filter( 'maera/section_class/content', array( $this, 'content_class' ) );
			add_filter( 'maera/section_class/primary', array( $this, 'sidebar_class' ) );
		}

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
	 * Filter the classes of the main content area
	 */
	function content_class( $class ) {

		$width = 12 - get_theme_mod( 'sidebar_width', 4 );
		$alignment = ( 2 == $this->layout ) ? ' right' : '';
		return $class . ' col s12 m' . $width . $alignment;

	}

	/**
	 * Filter the classes of the sidebar
	 */
	function sidebar_class( $class ) {

		return $class . ' col s12 m' . get_theme_mod( 'sidebar_width', 4 );

	}

}
