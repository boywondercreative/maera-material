<?php

class Maera_MD_Nav {

	function __construct() {

		$this->color = get_theme_mod( 'nav_color', '' );

		add_filter( 'maera/nav/class', array( $this, 'color' ) );

	}

	function color( $class ) {
		return $class . ' ' . $this->color;
	}

}
$nav = new Maera_MD_Nav();
