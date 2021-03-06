<?php

class Maera_MD_Timber extends Maera_Material {

	function __construct() {
		add_filter( 'maera/timber/context', array( $this, 'timber_global_context' ) );
	}

	/**
	 * Modify Timber global context
	 */
	function timber_global_context( $data ) {

		$data['header_img'] = Maera_Material::custom_header_url();
		$data['sidebar']['header'] = Timber::get_widgets( 'sidebar_header' );
		$data['sidebar']['footer'] = Timber::get_widgets( 'sidebar_footer' );
		$data['layout'] = Maera()->shell->instance->layout;

		return $data;

	}

}
