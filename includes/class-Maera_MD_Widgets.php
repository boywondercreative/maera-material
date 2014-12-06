<?php

/**
 * Add & apply Widget customizations.
 */
class Maera_MD_Widgets {

	function __construct() {

		$widget_colors = new Maera_MD_Widget_Dropdown(
			'material_color',
			'Color',
			Maera_MD_Colors::widget_colors()
		);
		$widget_shades = new Maera_MD_Widget_Dropdown(
			'material_shades',
			'Shade',
			Maera_MD_Colors::widget_shades()
		);
		$widget_depths = new Maera_MD_Widget_Dropdown(
			'material_depth',
			'Depth',
			Maera_MD_Colors::widget_depths()
		);

		add_filter( 'maera/widgets/class', array( $this, 'widget_class' ) );
		add_filter( 'maera/widgets/title/before', array( $this, 'widget_title_before' ) );
		add_filter( 'maera/widgets/title/after', array( $this, 'widget_title_after' ) );
		add_filter( 'maera/widgets/before', array( $this, 'widget_before' ) );
		add_filter( 'maera/widgets/after', array( $this, 'widget_after' ) );

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
