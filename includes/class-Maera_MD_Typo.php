<?php

class Maera_MD_Typo {

	function __construct() {

		add_filter( 'maera/section_class/content', array( $this, 'main_content_class' ) );

	}

	function main_content_class( $class ) {

		if ( 1 == get_theme_mod( 'flow_text', 1 ) ) {
			$class .= ' flow-text';
		}

		return $class;
	}

}
