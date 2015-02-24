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
			'advanced'     => array( 'title' => __( 'Advanced', 'maera_md' ), 'priority' => 200 ),
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

		$colors = Maera_MD_Data::colors();
		$colors_array = array();
		foreach ( $colors as $color => $definitions ) {
			$colors_array[$color] = $definitions['label'];
		}

		$controls[] = array(
			'type'     => 'textarea',
			'setting'  => 'header_content',
			'label'    => __( 'Header Content', 'textdomain' ),
			'section'  => 'header_image',
			'default'  => '',
			'priority' => 30,
		);

		$controls[] = array(
			'type'     => 'select',
			'setting'  => 'header_color',
			'label'    => __( 'Header background shade', 'maera_md' ),
			'section'  => 'header_image',
			'default'  => 'darken-2',
			'priority' => 20,
			'choices'  => $colors_array,
		);

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'header_height',
			'label'    => __( 'Header height (percentage of screen height)', 'maera_md' ),
			'section'  => 'header_image',
			'priority' => 30,
			'default'  => 60,
			'choices'  => array(
				'min'  => 0,
				'max'  => 100,
				'step' => 1,
			),
			'output'   => array(
				'element'  => '.header.hero',
				'property' => 'height',
				'units'    => 'vh',
			)
		);

		$controls[] = array(
			'type'     => 'checkbox',
			'setting'  => 'header_front',
			'label'    => __( 'Show only on homepage', 'maera_md' ),
			'section'  => 'header_image',
			'default'  => 1,
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
				'0' => get_template_directory_uri() . '/assets/images/1c.png',
				'1' => get_template_directory_uri() . '/assets/images/2cr.png',
				'2' => get_template_directory_uri() . '/assets/images/2cl.png',
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

		$controls[] = array(
			'type'     => 'select',
			'setting'  => 'blog_mode',
			'label'    => __( 'Archive display mode', 'maera_md' ),
			'section'  => 'blog',
			'default'  => 'excerpt',
			'priority' => 6,
			'choices'  => array(
				'excerpt' => __( 'Excerpt', 'maera_md' ),
				'full'    => __( 'Full Content', 'maera_md' ),
			),
		);

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'excerpt_length',
			'label'    => __( 'Excerpt Length', 'maera_md' ),
			'subtitle' => __( 'Set to 0 if you want to completely disable featured images on archives', 'maera_md' ),
			'section'  => 'blog',
			'priority' => 8,
			'default'  => 40,
			'choices'  => array(
				'min'  => 0,
				'max'  => 200,
				'step' => 1,
			),
		);

		$controls[] = array(
			'type'     => 'text',
			'setting'  => 'read_more',
			'label'    => __( 'Read More label', 'maera_md' ),
			'section'  => 'blog',
			'priority' => 10,
			'default'  => __( 'Read More', 'maera_md' ),
		);

		$controls[] = array(
			'type'     => 'textarea',
			'setting'  => 'css',
			'label'    => __( 'Custom CSS', 'maera_md' ),
			'subtitle' => __( 'You can write your custom CSS here. This code will appear in a style tag appended in the header section of the page.', 'maera_md' ),
			'section'  => 'advanced',
			'priority' => 4,
			'default'  => '',
		);

		$controls[] = array(
			'type'     => 'textarea',
			'setting'  => 'js',
			'label'    => __( 'Custom JS', 'maera_md' ),
			'subtitle' => __( 'You can write your custom JavaScript/jQuery here. The code will be included in a script tag appended to the bottom of the page.', 'maera_md' ),
			'section'  => 'advanced',
			'priority' => 6,
			'default'  => '',
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
            'setting'  => 'font_base_family',
            'label'    => __( 'Base font', 'maera_md' ),
            'section'  => 'typography',
            'default'  => '"Roboto"',
            'priority' => 5,
            'choices'  => Kirki_Fonts::get_font_choices(),
            'output' => array(
                'element'  => 'html',
                'property' => 'font-family',
            ),
        );

		$controls[] = array(
            'type'     => 'select',
            'setting'  => 'font_headers_family',
            'label'    => __( 'Headers font', 'maera_md' ),
            'section'  => 'typography',
            'default'  => "Roboto Slab",
            'priority' => 10,
            'choices'  => Kirki_Fonts::get_font_choices(),
            'output' => array(
                'element'  => 'h1, h2, h3, h4, h5, h6',
                'property' => 'font-family',
            ),
        );

		$controls[] = array(
            'type'     => 'multicheck',
            'setting'  => 'font_subsets',
            'label'    => __( 'Google-Font subsets', 'maera_md' ),
            'description' => __( 'The subsets used from Google\'s API.', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 'all',
            'priority' => 15,
            'choices'  => Kirki_Fonts::get_google_font_subsets(),
            'output' => array(
                'element'  => 'body',
                'property' => 'font-subset',
            ),
        );

		$controls[] = array(
			'type'     => 'slider',
			'setting'  => 'base_font_size',
			'label'    => __( 'Base font-size', 'maera_md' ),
			'section'  => 'typography',
			'priority' => 20,
			'default'  => 14,
			'choices'  => array(
				'min'  => 4,
				'max'  => 32,
				'step' => 1,
			),
			'output'   => array(
				'property' => 'font-size',
				'units'    => 'px',
				'element'  => 'html',
			)
		);

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_base_weight',
            'label'    => __( 'Base Font Weight', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 300,
            'priority' => 25,
            'choices'  => array(
                'min'  => 100,
                'max'  => 900,
                'step' => 100,
            ),
            'output' => array(
                'element'  => 'html, body, .flow-text',
                'property' => 'font-weight',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_base_height',
            'label'    => __( 'Base Line Height', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 1.43,
            'priority' => 30,
            'choices'  => array(
                'min'  => 0,
                'max'  => 3,
                'step' => 0.01,
            ),
            'output' => array(
                'element'  => 'body',
                'property' => 'line-height',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_headers_weight_h1',
            'label'    => __( 'H1 Font Weight', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 900,
            'priority' => 35,
            'choices'  => array(
                'min'  => 100,
                'max'  => 900,
                'step' => 100,
            ),
            'output' => array(
                'element'  => 'h1',
                'property' => 'font-weight',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_headers_weight_h2',
            'label'    => __( 'H2 Font Weight', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 800,
            'priority' => 40,
            'choices'  => array(
                'min'  => 100,
                'max'  => 900,
                'step' => 100,
            ),
            'output' => array(
                'element'  => 'h2',
                'property' => 'font-weight',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_headers_weight_h3',
            'label'    => __( 'H2 Font Weight', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 600,
            'priority' => 45,
            'choices'  => array(
                'min'  => 100,
                'max'  => 900,
                'step' => 100,
            ),
            'output' => array(
                'element'  => 'h3',
                'property' => 'font-weight',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_headers_weight_h4',
            'label'    => __( 'H4 Font Weight', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 400,
            'priority' => 50,
            'choices'  => array(
                'min'  => 100,
                'max'  => 900,
                'step' => 100,
            ),
            'output' => array(
                'element'  => 'h4',
                'property' => 'font-weight',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_h1_size',
            'label'    => __( 'H1 Font Size', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 52,
            'priority' => 55,
            'choices'  => array(
                'min'  => 7,
                'max'  => 72,
                'step' => 1,
            ),
            'output' => array(
                'element'  => 'h1',
                'property' => 'font-size',
                'units'    => 'px',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_h2_size',
            'label'    => __( 'H2 Font Size', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 36,
            'priority' => 60,
            'choices'  => array(
                'min'  => 7,
                'max'  => 72,
                'step' => 1,
            ),
            'output' => array(
                'element'  => 'h2',
                'property' => 'font-size',
                'units'    => 'px',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_h3_size',
            'label'    => __( 'H3 Font Size', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 24,
            'priority' => 65,
            'choices'  => array(
                'min'  => 7,
                'max'  => 72,
                'step' => 1,
            ),
            'output' => array(
                'element'  => 'h3',
                'property' => 'font-size',
                'units'    => 'px',
            ),
        );

        $controls[] = array(
            'type'     => 'slider',
            'setting'  => 'font_h4_size',
            'label'    => __( 'H4 Font Size', 'maera_md' ),
            'section'  => 'typography',
            'default'  => 18,
            'priority' => 70,
            'choices'  => array(
                'min'  => 7,
                'max'  => 72,
                'step' => 1,
            ),
            'output' => array(
                'element'  => 'h4',
                'property' => 'font-size',
                'units'    => 'px',
            ),
        );

		return $controls;

	}

}
