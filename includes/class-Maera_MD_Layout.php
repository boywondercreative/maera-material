<?php

class Maera_MD_Layout {

	function __construct() {

		if ( 0 != self::get_layout() ) {
			add_filter( 'maera/section_class/content', array( $this, 'content_class' ) );
			add_filter( 'maera/section_class/primary', array( $this, 'sidebar_class' ) );
		}

	}

	/**
	 * Filter the classes of the main content area
	 */
	function content_class( $class ) {

		$width = 12 - get_theme_mod( 'sidebar_width', 4 );
		$alignment = ( 2 == self::get_layout() ) ? ' right-align' : '';
		return $class . ' col s12 m' . $width . $alignment;

	}

	/**
	 * Filter the classes of the sidebar
	 */
	function sidebar_class( $class ) {

		return $class . ' col s12 m' . get_theme_mod( 'sidebar_width', 4 );

	}

	/**
	 * Get the layout
	 */
	public static function get_layout() {

		global $post;
		$custom_layout = false;

		if ( is_singular() ) {
			$layout = get_post_meta( $post->ID, 'maera_md_layout', true );
			$custom_layout = ( 'default' != $layout ) ? true : false;
		}

		$layout = $custom_layout ? $layout : get_theme_mod( 'layout', 1 );

		return $layout;

	}

}
