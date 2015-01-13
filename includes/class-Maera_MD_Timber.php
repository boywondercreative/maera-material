<?php

class Maera_MD_Timber {

	function __construct() {
		add_filter( 'maera/timber/context', array( $this, 'timber_global_context' ) );
	}

	/**
	 * Modify Timber global context
	 */
	function timber_global_context( $data ) {

		global $post;

		$data['header_img'] = Maera_Material::custom_header_url();
		$data['sidebar']['header'] = Timber::get_widgets( 'sidebar_header' );
		$data['sidebar']['footer'] = Timber::get_widgets( 'sidebar_footer' );

		if ( is_singular() ) {
			$layout = get_post_meta( $post->ID, 'maera_md_layout', true );
		}
		$custom_layout = ( isset( $layout ) && ! empty( $layout ) && 'default' != $layout ) ? true : false;
		$data['layout'] = $custom_layout ? $layout : get_theme_mod( 'layout', 1 );

		return $data;

	}

}
