<?php

class Maera_MD_Colors {

	public static function widget_colors() {

		$main_colors = array(
			'red'         => 'Red',
			'pink'        => 'Pink',
			'purple'      => 'Purple',
			'deep-purple' => 'Deep Purple',
			'indigo'      => 'Indigo',
			'blue'        => 'Blue',
			'light-blue'  => 'Light Blue',
			'cyan'        => 'Cyan',
			'teal'        => 'Teal',
			'green'       => 'Green',
			'light-green' => 'Light Green',
			'lime'        => 'Lime',
			'yellow'      => 'Yellow',
			'amber'       => 'Amber',
			'orange'      => 'Orange',
			'deep-orange' => 'Deep Orange',
			'brown'       => 'Brown',
			'grey'        => 'Gray',
			'blue-grey'   => 'Blue-Grey',
		);

		return $main_colors;

	}

	public static function widget_shades() {

		$shades = array(
			'lighten-5' => 'Lighten 5',
			'lighten-4' => 'Lighten 4',
			'lighten-3' => 'Lighten 3',
			'lighten-2' => 'Lighten 2',
			'lighten-1' => 'Lighten 1',
			'default'   => 'Default',
			'darken-1'  => 'Darken 1',
			'darken-2'  => 'Darken 2',
			'darken-3'  => 'Darken 3',
			'darken-4'  => 'Darken 4',
			'accent-1'  => 'Accent 1',
			'accent-2'  => 'Accent 2',
			'accent-3'  => 'Accent 3',
			'accent-4'  => 'Accent 4',
		);

		return $shades;

	}

	public static function widget_depths() {

		$depths = array(
		'z-depth-1' => 1,
		'z-depth-2' => 2,
		'z-depth-3' => 3,
		'z-depth-4' => 4,
		'z-depth-5' => 5,
		);

		return $depths;

	}

}
