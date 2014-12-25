<?php

class Maera_MD_Customizer {

	function __construct() {

		add_action( 'customize_register', array( $this, 'customizer_sections' ) );
		add_filter( 'kirki/controls', array( $this, 'settings' ) );

	}

	/*
	 * Create the sections
	 */
	function customizer_sections( $wp_customize ) {

		$sections = array(
			'layout'       => array( 'title' => __( 'Layout', 'maera_md' ), 'priority' => 20, ),
			'typography'   => array( 'title' => __( 'Typography', 'maera_md' ), 'priority' => 30, ),
			'colors'       => array( 'title' => __( 'Colors', 'maera_md' ), 'priority' => 40, ),
			'blog'         => array( 'title' => __( 'Blog', 'maera_md' ), 'priority' => 50, ),
			'header_image' => array( 'title' => __( 'Header', 'maera_md' ), 'priority' => 10 ),
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

		$controls[] = array(
			'type'     => 'textarea',
			'setting'  => 'header_content',
			'label'    => __( 'Header Content', 'textdomain' ),
			'section'  => 'header_image',
			'default'  => '',
			'priority' => 30,
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
			'choices'  => array(
				0 => get_template_directory_uri() . '/assets/images/1c.png',
				1 => get_template_directory_uri() . '/assets/images/2cr.png',
				2 => get_template_directory_uri() . '/assets/images/2cl.png',
			),
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
			'type'     => 'radio',
			'mode'     => 'buttonset',
			'setting'  => 'background_mode',
			'label'    => __( 'Background Mode', 'maera_md' ),
			'section'  => 'colors',
			'default'  => 'light',
			'priority' => 20,
			'choices'  => array(
				'light' => __( 'Light', 'maera_md' ),
				'dark'  => __( 'Dark', 'maera_md' ),
			),
		);

		$controls[] = array(
			'type'     => 'radio',
			'mode'     => 'image',
			'setting'  => 'accent_color',
			'subtitle' => __( 'Please select a color. This will change the color of the navbar, links and the footer.', 'maera_md' ),
			'label'    => __( 'Accent Color', 'maera_md' ),
			'section'  => 'colors',
			'default'  => '',
			'priority' => 30,
			'choices'  => array(
				'red'         => MAERA_MATERIAL_SHELL_URL . '/assets/img/red.png',
				'pink'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/pink.png',
				'purple'      => MAERA_MATERIAL_SHELL_URL . '/assets/img/purple.png',
				'deep-purple' => MAERA_MATERIAL_SHELL_URL . '/assets/img/deep-purple.png',
				'indigo'      => MAERA_MATERIAL_SHELL_URL . '/assets/img/indigo.png',
				'blue'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/blue.png',
				'light-blue'  => MAERA_MATERIAL_SHELL_URL . '/assets/img/light-blue.png',
				'cyan'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/cyan.png',
				'teal'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/teal.png',
				'green'       => MAERA_MATERIAL_SHELL_URL . '/assets/img/green.png',
				'light-green' => MAERA_MATERIAL_SHELL_URL . '/assets/img/light-green.png',
				'lime'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/lime.png',
				'yellow'      => MAERA_MATERIAL_SHELL_URL . '/assets/img/yellow.png',
				'amber'       => MAERA_MATERIAL_SHELL_URL . '/assets/img/amber.png',
				'orange'      => MAERA_MATERIAL_SHELL_URL . '/assets/img/orange.png',
				'deep-orange' => MAERA_MATERIAL_SHELL_URL . '/assets/img/deep-orange.png',
				'brown'       => MAERA_MATERIAL_SHELL_URL . '/assets/img/brown.png',
				'grey'        => MAERA_MATERIAL_SHELL_URL . '/assets/img/grey.png',
				'blue-grey'   => MAERA_MATERIAL_SHELL_URL . '/assets/img/blue-grey.png',
			),
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

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'feat_img_height',
			'label'    => __( 'Featured Image Height on Archives', 'maera_md' ),
			'subtitle' => __( 'Set to 0 if you want to completely disable featured images on archives', 'maera_md' ),
			'section'  => 'blog',
			'priority' => 4,
			'default'  => 60,
			'choices'  => array(
				'min'  => 0,
				'max'  => 100,
				'step' => 1,
			),
		);

		return $controls;

	}

}
