<?php

class Maera_MD_Layout {

	private $container;
	private $layout;
	private $sidebar_width;

	function __construct() {

		$this->container     = get_theme_mod( 'container', 1 );
		$this->layout        = get_theme_mod( 'layout', 1 );
		$this->sidebar_width = get_theme_mod( 'sidebar_width', 4 );

		if ( $this->layout ) {
			add_filter( 'maera/container_class', array( $this, 'container_class' ) );
			add_filter( 'maera/section_class/wrapper', array( $this, 'wrapper_class' ) );
			add_filter( 'maera/section_class/content', array( $this, 'content_class' ) );
			add_filter( 'maera/section_class/primary', array( $this, 'sidebar_class' ) );
		}

	}

	function container_class( $classes ) {

		if ( 'off' == $this->container ) {
			$classes = '';
		}

		return $classes;

	}

	function wrapper_class( $class ) {

		return $class . ' row';

	}

	function content_class( $class ) {

		$width = 12 - $this->sidebar_width;
		return $class . ' col s12 m' . $width;

	}

	function sidebar_class( $class ) {

		return $class . ' col s12 m' . $this->sidebar_width;

	}

}
$layout = new Maera_MD_Layout();
