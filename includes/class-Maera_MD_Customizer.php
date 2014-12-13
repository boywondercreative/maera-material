<?php

class Maera_MD_Customizer {

	function __construct() {

		add_action( 'customize_register', array( $this, 'customizer_sections' ) );
		add_filter( 'kirki/controls', array( $this, 'settings' ) );

	}

	/**
	 * An array of the available layouts.
	 * This will be used in the controls later.
	 */
	function layouts() {

		$layouts = array(
			0 => get_template_directory_uri() . '/assets/images/1c.png',
			1 => get_template_directory_uri() . '/assets/images/2cr.png',
			2 => get_template_directory_uri() . '/assets/images/2cl.png',
		);

		return $layouts;

	}

	/*
	* Create the sections
	*/
	function customizer_sections( $wp_customize ) {

		$sections = array(
			'layout'     => array(
				'title'    => __( 'Layout', 'maera_md' ),
				'priority' => 20,
			),
			'typography' => array(
				'title'    => __( 'Typography', 'maera_md' ),
				'priority' => 30,
			),
			'Colors' => array(
				'title'    => __( 'Colors', 'maera_md' ),
				'priority' => 40,
			)
		);

		foreach ( $sections as $section => $args ) {

			$wp_customize->add_section( $section, array(
				'title'    => $args['title'],
				'priority' => $args['priority'],
				'panel'    => isset( $args['panel'] ) ? $args['panel'] : '',
			) );

		}

	}

	function settings( $controls ) {

		$colors = maera_md_colors();
		$simple_colors = array();

		foreach ( $colors as $color => $values ) {
			$simple_colors[$color] = $values['label'];
		}

		$controls[] = array(
			'type'     => 'radio',
			'mode'     => 'buttonset',
			'setting'  => 'container',
			'label'    => __( 'Container', 'maera_md' ),
			'section'  => 'layout',
			'priority' => 2,
			'default'  => 1,
			'choices'  => array(
				'off'  => __( 'Off', 'maera_md' ),
				'on'   => __( 'On', 'maera_md' ),
			),
		);

		$controls[] = array(
			'type'     => 'radio',
			'mode'     => 'image',
			'setting'  => 'layout',
			'label'    => __( 'Layout', 'maera_md' ),
			'subtitle' => __( 'Select your main layout. Please note that if no widgets are present in a sidebar then that sidebar will not be displayed. ', 'maera_md' ),
			'section'  => 'layout',
			'priority' => 3,
			'default'  => 1,
			'choices'  => $this->layouts(),
		);

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'sidebar_width',
			'label'    => __( 'Sidebar Width', 'maera_md' ),
			'description' => '',
			'section'  => 'layout',
			'priority' => 4,
			'default'  => 4,
			'choices'  => array(
				'min'  => 1,
				'max'  => 5,
				'step' => 1,
			),
		);

		$controls[] = array(
			'type'     => 'checkbox',
			'setting'  => 'flow_text',
			'label'    => __( 'Enable flow-text', 'maera_md' ),
			'section'  => 'typography',
			'default'  => 1,
			'priority' => 1,
		);

		$controls[] = array(
			'type'     => 'select',
			'setting'  => 'nav_color',
			'label'    => __( 'Navbar Color', 'maera_md' ),
			'section'  => 'nav',
			'default'  => '',
			'priority' => 20,
			'choices'  => $simple_colors,
		);

		$controls[] = array(
			'type'     => 'select',
			'setting'  => 'body_bg',
			'label'    => __( 'Background Color', 'maera_md' ),
			'section'  => 'colors',
			'default'  => '',
			'priority' => 20,
			'choices'  => $simple_colors,
		);

		$controls[] = array(
			'type'     => 'checkbox',
			'setting'  => 'navbar_disable',
			'label'    => __( 'Disable the Navbar', 'maera_md' ),
			'section'  => 'nav',
			'priority' => 30,
			'default'  => 0,
		);

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'logo_max_width',
			'label'    => __( 'Logo Maximum Width (1-12 columns)', 'maera_md' ),
			'section'  => 'title_tagline',
			'default'  => 3,
			'priority' => 50,
			'choices'  => array(
				'min'  => 1,
				'max'  => 12,
				'step' => 1,
			),
		);

		return $controls;

	}

}

$customizer = new Maera_MD_Customizer();
