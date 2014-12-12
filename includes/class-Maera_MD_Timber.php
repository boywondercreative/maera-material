<?php

class Maera_MD_Timber {

	function __construct() {
		add_filter( 'timber_context', array( $this, 'timber_global_context' ) );
	}

	/**
	* Modify Timber global context
	*/
	function timber_global_context( $data ) {

		$data['header_img'] = Maera_Material::custom_header_url();
		return $data;

	}

}
$maera_md_timber = new Maera_MD_Timber();
