<?php
/*
Plugin Name:         Maera Material Shell
Plugin URI:
Description:         Material Design shell
Version:             0.1-dev
Author:              Aristeides Stathopoulos
Author URI:          http://press.codes
*/

define( 'MAERA_MATERIAL_SHELL_URL', plugins_url( '', __FILE__ ) );
define( 'MAERA_MATERIAL_SHELL_PATH', dirname( __FILE__ ) );

// Include the compiler class
require_once MAERA_MATERIAL_SHELL_PATH . '/class-Maera_Material.php';

/**
 * Include the shell
 */
function maera_shell_material_include( $shells ) {

	// Add our shell to the array of available shells
	$shells[] = array(
		'value' => 'material',
		'label' => 'Material',
		'class' => 'Maera_Material',
	);

	return $shells;

}
add_filter( 'maera/shells/available', 'maera_shell_material_include' );
