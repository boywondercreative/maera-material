<?php

class Maera_MD_Styles {

	function __construct() {
		$this->colors = Maera_MD_Data::simple_colors();
		add_filter( 'maera/styles', array( $this, 'color_mods' ) );
		add_filter( 'maera/styles', array( $this, 'custom_header_css' ) );
		add_filter( 'maera/styles', array( $this, 'featured_image_height' ) );
		add_filter( 'body_class', array( $this, 'body_classes' ) );

		$this->color = get_theme_mod( 'accent_color', '' );
		add_filter( 'maera/nav/class', array( $this, 'color' ) );
	}

	function color_mods( $css ) {

		$styles = get_transient( 'Maera_MD_Data::colors' );

		if ( false === ( $styles ) ) {

			$styles = '';

			foreach ( $this->colors as $color => $classes ) {
				$bg_obj  = new Jetpack_Color( '#' . $color );
				$classes = '.' . str_replace( ' ', '.', $classes );

				$bg         = '#' . str_replace( '#', '', $bg_obj->toHex() );
				$color      = '#' . $bg_obj->getReadableContrastingColor( $bg_obj, 2 )->toHex();
				$link_color = ( '000000' == $color ) ? 'rgba(0,0,0,.75)' : 'rgba(255,255,255,.75)';

				$styles .= $classes . ',' . $classes . ' p{background:' . $bg . ';color:' . $color . ';}' . $classes . ' a{color:' . $link_color . ';}';
				$styles .= $classes . ' input#searchform{border-bottom: 1px solid ' . $color . ';box-shadow: 0px 1px 0px 0px ' . $color . ';}';
				$styles .= $classes . ' .input-field label, .input-field input[type=text]:focus + label, .input-field input[type=password]:focus + label, .input-field input[type=email]:focus + label, .input-field input[type=date]:focus + label, .input-field textarea:focus + label { color: ' . $link_color . ';}';
			}

			set_transient( 'Maera_MD_Data::colors', $styles, 60 * 60 );

		}

		return $css . $styles;

	}

	function color( $class ) {
		return $class . ' ' . get_theme_mod( 'accent_color', 'red' );
	}

	/**
	 * Add background color classes to the body
	 */
	function body_classes( $classes ) {

		$background_mode = get_theme_mod( 'background_mode', 'light' );

		if ( 'dark' == $background_mode ) {
			$classes[] = 'blue-grey';
			$classes[] = 'darken-4';
		}

		$classes[] = 'accent-' . get_theme_mod( 'accent_color', 'red' );

		return $classes;

	}

	function custom_header_css( $styles ) {

		$custom_header = get_header_image();

		if ( $custom_header ) {
			$styles .= '.header.hero .parallax-layer-back{background-image:url("' . $custom_header . '");}';
		}
		$styles .= '.header.hero{color:#' . get_theme_mod( 'header_textcolor', '333333' ) . '}';

		return $styles;

	}

	function featured_image_height( $styles ) {
		return $styles . '.parallax-container.featured-image{height:' . get_theme_mod( 'feat_img_height', 60 ) . 'vh;}';
	}

}
