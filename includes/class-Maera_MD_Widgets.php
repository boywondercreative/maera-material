<?php

/**
 * Add & apply Widget customizations.
 */
class Maera_MD_Widgets {

	function __construct() {

		$widget_colors = new Maera_Widget_Dropdown(
			array(
				'id'      => 'maera_md_color',
				'label'   => __( 'Color', 'maera_md' ),
				'choices' => maera_md_colors(),
				'default' => 0,
			)
		);

		$widget_depths = new Maera_Widget_Dropdown(
			array(
				'id'      => 'maera_md_depth',
				'label'   => __( 'Depth', 'maera_md' ),
				'choices' => maera_md_depths(),
				'default' => 1,
			)
		);

		$widget_widths = new Maera_Widget_Dropdown(
			array(
				'id'      => 'maera_md_width',
				'label'   => __( 'Width', 'maera_md' ),
				'choices' => maera_md_widths(),
				'default' => 12,
			)
		);

		add_filter( 'maera/widgets/class', array( $this, 'widget_class' ) );
		add_filter( 'maera/widgets/title/before', array( $this, 'widget_title_before' ) );
		add_filter( 'maera/widgets/title/after', array( $this, 'widget_title_after' ) );
		add_filter( 'maera/widgets/before', array( $this, 'widget_before' ) );
		add_filter( 'maera/widgets/after', array( $this, 'widget_after' ) );
		add_action( 'widgets_init', array( $this, 'widgets_init' ) );

	}

	/**
	 * Register sidebars
	 */
	function widgets_init() {

		$class        = apply_filters( 'maera/widgets/class', '' );
		$before_title = apply_filters( 'maera/widgets/title/before', '<h3 class="widget-title">' );
		$after_title  = apply_filters( 'maera/widgets/title/after', '</h3>' );

		register_sidebar( array(
			'name'          => __( 'Header', 'maera_md' ),
			'id'            => 'sidebar_header',
			'before_widget' => '<section id="%1$s" class="card widget %2$s"><div class="card-content">',
			'after_widget'  => '<div></section>',
			'before_title'  => '<h3 class="widget-title card-title"',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer', 'maera_md' ),
			'id'            => 'sidebar_footer',
			'before_widget' => '<section id="%1$s" class="card widget %2$s"><div class="card-content">',
			'after_widget'  => '<div></section>',
			'before_title'  => '<h3 class="widget-title card-title"',
			'after_title'   => '</h3>',
		) );

		}

	function widget_class() {
		return 'card';
	}

	function widget_title_before() {
		return '<span class="widget-title card-title">';
	}

	function widget_title_after() {
		return '</span>';
	}

	function widget_before( $content ) {
		return $content . '<div class="card-content">';
	}

	function widget_after() {
		return '</div></section>';
	}

}
