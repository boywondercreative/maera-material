<?php

class Maera_MD_Styles {

	function __construct() {
		$this->colors = maera_md_colors();
		add_filter( 'maera/styles', array( $this, 'color_mods' ) );
	}

	function color_mods( $styles ) {

		$colors = maera_md_colors();

		foreach ( $colors as $color => $classes ) {

			$bg_obj  = new Jetpack_Color( '#' . $color );
			$classes = '.' . str_replace( ' ', '.', $classes );

			$bg    = '#' . str_replace( '#', '', $bg_obj->toHex() );
			$color = $bg_obj->getReadableContrastingColor( $bg_obj, 2 )->toHex();

			$link_color = ( '000000' == $color ) ? 'rgba(0,0,0,.75)' : 'rgba(255,255,255,.75)';

			$styles .= $classes . '{background:#' . $bg . ';color:#' . $color . ';}';
			$styles .= $classes . ' a{color:' . $link_color . ';}';

		}

		return $styles;

	}

}
$styles = new Maera_MD_Styles();
