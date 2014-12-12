<?php

/**
 * Add & apply Widget customizations.
 */
class Maera_MD_Widgets {

	function __construct() {

		$widget_colors = new Maera_MD_Widget_Dropdown( 'maera_md_color', 'Color', maera_md_colors() );
		$widget_depths = new Maera_MD_Widget_Dropdown( 'material_depth', 'Depth', maera_md_depths() );

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
			'id'            => 'header',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title"',
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
$widget_costomizations = new Maera_MD_Widgets();
