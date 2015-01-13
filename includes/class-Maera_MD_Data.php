<?php

class Maera_MD_Data {

	public static function colors() {

		$colors = array(
			0        => array( 'label' => 'none', 'classes' => 'transparent' ),
			'ffebee' => array( 'label' => 'red 50', 'classes' => 'red lighten-5' ),
			'ffcdd2' => array( 'label' => 'red 100', 'classes' => 'red lighten-4' ),
			'ef9a9a' => array( 'label' => 'red 200', 'classes' => 'red lighten-2' ),
			'e57373' => array( 'label' => 'red 300', 'classes' => 'red lighten-3' ),
			'ef5350' => array( 'label' => 'red 400', 'classes' => 'red lighten-1' ),
			'f44336' => array( 'label' => 'red 500', 'classes' => 'red white-text' ),
			'e53935' => array( 'label' => 'red 600', 'classes' => 'red darken-1 white-text' ),
			'd32f2f' => array( 'label' => 'red 700', 'classes' => 'red darken-2 white-text' ),
			'c62828' => array( 'label' => 'red 800', 'classes' => 'red darken-3 white-text' ),
			'b71c1c' => array( 'label' => 'red 900', 'classes' => 'red darken-4 white-text' ),
			'ff8a80' => array( 'label' => 'red A100', 'classes' => 'red accent-1' ),
			'ff5252' => array( 'label' => 'red A200', 'classes' => 'red accent-2' ),
			'ff1744' => array( 'label' => 'red A400', 'classes' => 'red accent-3 white-text' ),
			'd50000' => array( 'label' => 'red A700', 'classes' => 'red accent-4 white-text' ),
			'fce4ec' => array( 'label' => 'pink 50', 'classes' => 'pink lighten-5' ),
			'f8bbd0' => array( 'label' => 'pink 100', 'classes' => 'pink lighten-4' ),
			'f48fb1' => array( 'label' => 'pink 200', 'classes' => 'pink lighten-2' ),
			'f06292' => array( 'label' => 'pink 300', 'classes' => 'pink lighten-3' ),
			'ec407a' => array( 'label' => 'pink 400', 'classes' => 'pink lighten-1' ),
			'e91e63' => array( 'label' => 'pink 500', 'classes' => 'pink white-text' ),
			'd81b60' => array( 'label' => 'pink 600', 'classes' => 'pink darken-1 white-text' ),
			'c2185b' => array( 'label' => 'pink 700', 'classes' => 'pink darken-2 white-text' ),
			'ad1457' => array( 'label' => 'pink 800', 'classes' => 'pink darken-3 white-text' ),
			'880e4f' => array( 'label' => 'pink 900', 'classes' => 'pink darken-4 white-text' ),
			'ff80ab' => array( 'label' => 'pink A100', 'classes' => 'pink accent-1' ),
			'ff4081' => array( 'label' => 'pink A200', 'classes' => 'pink accent-2' ),
			'f50057' => array( 'label' => 'pink A400', 'classes' => 'pink accent-3 white-text' ),
			'c51162' => array( 'label' => 'pink A700', 'classes' => 'pink accent-4 white-text' ),
			'f3e5f5' => array( 'label' => 'purple 50', 'classes' => 'purple lighten-5' ),
			'e1bee7' => array( 'label' => 'purple 100', 'classes' => 'purple lighten-4' ),
			'ce93d8' => array( 'label' => 'purple 200', 'classes' => 'purple lighten-2' ),
			'ba68c8' => array( 'label' => 'purple 300', 'classes' => 'purple lighten-3' ),
			'ab47bc' => array( 'label' => 'purple 400', 'classes' => 'purple lighten-1' ),
			'9c27b0' => array( 'label' => 'purple 500', 'classes' => 'purple white-text' ),
			'8e24aa' => array( 'label' => 'purple 600', 'classes' => 'purple darken-1 white-text' ),
			'7b1fa2' => array( 'label' => 'purple 700', 'classes' => 'purple darken-2 white-text' ),
			'6a1b9a' => array( 'label' => 'purple 800', 'classes' => 'purple darken-3 white-text' ),
			'4a148c' => array( 'label' => 'purple 900', 'classes' => 'purple darken-4 white-text' ),
			'ea80fc' => array( 'label' => 'purple A100', 'classes' => 'purple accent-1' ),
			'e040fb' => array( 'label' => 'purple A200', 'classes' => 'purple accent-2' ),
			'd500f9' => array( 'label' => 'purple A400', 'classes' => 'purple accent-3 white-text' ),
			'aa00ff' => array( 'label' => 'purple A700', 'classes' => 'purple accent-4 white-text' ),
			'ede7f6' => array( 'label' => 'deep-purple 50', 'classes' => 'deep-purple lighten-5' ),
			'd1c4e9' => array( 'label' => 'deep-purple 100', 'classes' => 'deep-purple lighten-4' ),
			'b39ddb' => array( 'label' => 'deep-purple 200', 'classes' => 'deep-purple lighten-2' ),
			'9575cd' => array( 'label' => 'deep-purple 300', 'classes' => 'deep-purple lighten-3' ),
			'7e57c2' => array( 'label' => 'deep-purple 400', 'classes' => 'deep-purple lighten-1' ),
			'673ab7' => array( 'label' => 'deep-purple 500', 'classes' => 'deep-purple white-text' ),
			'5e35b1' => array( 'label' => 'deep-purple 600', 'classes' => 'deep-purple darken-1 white-text' ),
			'512da8' => array( 'label' => 'deep-purple 700', 'classes' => 'deep-purple darken-2 white-text' ),
			'4527a0' => array( 'label' => 'deep-purple 800', 'classes' => 'deep-purple darken-3 white-text' ),
			'311b92' => array( 'label' => 'deep-purple 900', 'classes' => 'deep-purple darken-4 white-text' ),
			'b388ff' => array( 'label' => 'deep-purple A100', 'classes' => 'deep-purple accent-1' ),
			'7c4dff' => array( 'label' => 'deep-purple A200', 'classes' => 'deep-purple accent-2 white-text' ),
			'651fff' => array( 'label' => 'deep-purple A400', 'classes' => 'deep-purple accent-3 white-text' ),
			'6200ea' => array( 'label' => 'deep-purple A700', 'classes' => 'deep-purple accent-4 white-text' ),
			'e8eaf6' => array( 'label' => 'indigo 50', 'classes' => 'indigo lighten-5' ),
			'c5cae9' => array( 'label' => 'indigo 100', 'classes' => 'indigo lighten-4' ),
			'9fa8da' => array( 'label' => 'indigo 200', 'classes' => 'indigo lighten-2' ),
			'7986cb' => array( 'label' => 'indigo 300', 'classes' => 'indigo lighten-3' ),
			'5c6bc0' => array( 'label' => 'indigo 400', 'classes' => 'indigo lighten-1' ),
			'3f51b5' => array( 'label' => 'indigo 500', 'classes' => 'indigo white-text' ),
			'3949ab' => array( 'label' => 'indigo 600', 'classes' => 'indigo darken-1 white-text' ),
			'303f9f' => array( 'label' => 'indigo 700', 'classes' => 'indigo darken-2 white-text' ),
			'283593' => array( 'label' => 'indigo 800', 'classes' => 'indigo darken-3 white-text' ),
			'1a237e' => array( 'label' => 'indigo 900', 'classes' => 'indigo darken-4 white-text' ),
			'8c9eff' => array( 'label' => 'indigo A100', 'classes' => 'indigo accent-1' ),
			'536dfe' => array( 'label' => 'indigo A200', 'classes' => 'indigo accent-2' ),
			'3d5afe' => array( 'label' => 'indigo A400', 'classes' => 'indigo accent-3 white-text' ),
			'304ffe' => array( 'label' => 'indigo A700', 'classes' => 'indigo accent-4 white-text' ),
			'e3f2fd' => array( 'label' => 'blue 50', 'classes' => 'blue lighten-5' ),
			'bbdefb' => array( 'label' => 'blue 100', 'classes' => 'blue lighten-4' ),
			'90caf9' => array( 'label' => 'blue 200', 'classes' => 'blue lighten-2' ),
			'64b5f6' => array( 'label' => 'blue 300', 'classes' => 'blue lighten-3' ),
			'42a5f5' => array( 'label' => 'blue 400', 'classes' => 'blue lighten-1' ),
			'2196f3' => array( 'label' => 'blue 500', 'classes' => 'blue' ),
			'1e88e5' => array( 'label' => 'blue 600', 'classes' => 'blue darken-1 white-text' ),
			'1976d2' => array( 'label' => 'blue 700', 'classes' => 'blue darken-2 white-text' ),
			'1565c0' => array( 'label' => 'blue 800', 'classes' => 'blue darken-3 white-text' ),
			'0d47a1' => array( 'label' => 'blue 900', 'classes' => 'blue darken-4 white-text' ),
			'82b1ff' => array( 'label' => 'blue A100', 'classes' => 'blue accent-1' ),
			'448aff' => array( 'label' => 'blue A200', 'classes' => 'blue accent-2' ),
			'2979ff' => array( 'label' => 'blue A400', 'classes' => 'blue accent-3' ),
			'2962ff' => array( 'label' => 'blue A700', 'classes' => 'blue accent-4 white-text' ),
			'e1f5fe' => array( 'label' => 'light-blue 50', 'classes' => 'light-blue lighten-5' ),
			'b3e5fc' => array( 'label' => 'light-blue 100', 'classes' => 'light-blue lighten-4' ),
			'81d4fa' => array( 'label' => 'light-blue 200', 'classes' => 'light-blue lighten-2' ),
			'4fc3f7' => array( 'label' => 'light-blue 300', 'classes' => 'light-blue lighten-3' ),
			'29b6f6' => array( 'label' => 'light-blue 400', 'classes' => 'light-blue lighten-1' ),
			'03a9f4' => array( 'label' => 'light-blue 500', 'classes' => 'light-blue' ),
			'039be5' => array( 'label' => 'light-blue 600', 'classes' => 'light-blue darken-1 white-text' ),
			'0288d1' => array( 'label' => 'light-blue 700', 'classes' => 'light-blue darken-2 white-text' ),
			'0277bd' => array( 'label' => 'light-blue 800', 'classes' => 'light-blue darken-3 white-text' ),
			'01579b' => array( 'label' => 'light-blue 900', 'classes' => 'light-blue darken-4 white-text' ),
			'80d8ff' => array( 'label' => 'light-blue A100', 'classes' => 'light-blue accent-1' ),
			'40c4ff' => array( 'label' => 'light-blue A200', 'classes' => 'light-blue accent-2' ),
			'00b0ff' => array( 'label' => 'light-blue A400', 'classes' => 'light-blue accent-3' ),
			'0091ea' => array( 'label' => 'light-blue A700', 'classes' => 'light-blue accent-4 white-text' ),
			'e0f7fa' => array( 'label' => 'cyan 50', 'classes' => 'cyan lighten-5' ),
			'b2ebf2' => array( 'label' => 'cyan 100', 'classes' => 'cyan lighten-4' ),
			'80deea' => array( 'label' => 'cyan 200', 'classes' => 'cyan lighten-2' ),
			'4dd0e1' => array( 'label' => 'cyan 300', 'classes' => 'cyan lighten-3' ),
			'26c6da' => array( 'label' => 'cyan 400', 'classes' => 'cyan lighten-1' ),
			'00bcd4' => array( 'label' => 'cyan 500', 'classes' => 'cyan' ),
			'00acc1' => array( 'label' => 'cyan 600', 'classes' => 'cyan darken-1 white-text' ),
			'0097a7' => array( 'label' => 'cyan 700', 'classes' => 'cyan darken-2 white-text' ),
			'00838f' => array( 'label' => 'cyan 800', 'classes' => 'cyan darken-3 white-text' ),
			'006064' => array( 'label' => 'cyan 900', 'classes' => 'cyan darken-4 white-text' ),
			'84ffff' => array( 'label' => 'cyan A100', 'classes' => 'cyan accent-1' ),
			'18ffff' => array( 'label' => 'cyan A200', 'classes' => 'cyan accent-2' ),
			'00e5ff' => array( 'label' => 'cyan A400', 'classes' => 'cyan accent-3' ),
			'00b8d4' => array( 'label' => 'cyan A700', 'classes' => 'cyan accent-4' ),
			'e0f2f1' => array( 'label' => 'teal 50', 'classes' => 'teal lighten-5' ),
			'b2dfdb' => array( 'label' => 'teal 100', 'classes' => 'teal lighten-4' ),
			'80cbc4' => array( 'label' => 'teal 200', 'classes' => 'teal lighten-2' ),
			'4db6ac' => array( 'label' => 'teal 300', 'classes' => 'teal lighten-3' ),
			'26a69a' => array( 'label' => 'teal 400', 'classes' => 'teal lighten-1' ),
			'009688' => array( 'label' => 'teal 500', 'classes' => 'teal' ),
			'00897b' => array( 'label' => 'teal 600', 'classes' => 'teal darken-1 white-text' ),
			'00796b' => array( 'label' => 'teal 700', 'classes' => 'teal darken-2 white-text' ),
			'00695c' => array( 'label' => 'teal 800', 'classes' => 'teal darken-3 white-text' ),
			'004d40' => array( 'label' => 'teal 900', 'classes' => 'teal darken-4 white-text' ),
			'a7ffeb' => array( 'label' => 'teal A100', 'classes' => 'teal accent-1' ),
			'64ffda' => array( 'label' => 'teal A200', 'classes' => 'teal accent-2' ),
			'1de9b6' => array( 'label' => 'teal A400', 'classes' => 'teal accent-3' ),
			'00bfa5' => array( 'label' => 'teal A700', 'classes' => 'teal accent-4' ),
			'e8f5e9' => array( 'label' => 'green 50', 'classes' => 'green lighten-5' ),
			'c8e6c9' => array( 'label' => 'green 100', 'classes' => 'green lighten-4' ),
			'a5d6a7' => array( 'label' => 'green 200', 'classes' => 'green lighten-2' ),
			'81c784' => array( 'label' => 'green 300', 'classes' => 'green lighten-3' ),
			'66bb6a' => array( 'label' => 'green 400', 'classes' => 'green lighten-1' ),
			'4caf50' => array( 'label' => 'green 500', 'classes' => 'green' ),
			'43a047' => array( 'label' => 'green 600', 'classes' => 'green darken-1 white-text' ),
			'388e3c' => array( 'label' => 'green 700', 'classes' => 'green darken-2 white-text' ),
			'2e7d32' => array( 'label' => 'green 800', 'classes' => 'green darken-3 white-text' ),
			'1b5e20' => array( 'label' => 'green 900', 'classes' => 'green darken-4 white-text' ),
			'b9f6ca' => array( 'label' => 'green A100', 'classes' => 'green accent-1' ),
			'69f0ae' => array( 'label' => 'green A200', 'classes' => 'green accent-2' ),
			'00e676' => array( 'label' => 'green A400', 'classes' => 'green accent-3' ),
			'00c853' => array( 'label' => 'green A700', 'classes' => 'green accent-4' ),
			'f1f8e9' => array( 'label' => 'light-green 50', 'classes' => 'light-green lighten-5' ),
			'dcedc8' => array( 'label' => 'light-green 100', 'classes' => 'light-green lighten-4' ),
			'c5e1a5' => array( 'label' => 'light-green 200', 'classes' => 'light-green lighten-2' ),
			'aed581' => array( 'label' => 'light-green 300', 'classes' => 'light-green lighten-3' ),
			'9ccc65' => array( 'label' => 'light-green 400', 'classes' => 'light-green lighten-1' ),
			'8bc34a' => array( 'label' => 'light-green 500', 'classes' => 'light-green' ),
			'7cb342' => array( 'label' => 'light-green 600', 'classes' => 'light-green darken-1' ),
			'689f38' => array( 'label' => 'light-green 700', 'classes' => 'light-green darken-2 white-text' ),
			'558b2f' => array( 'label' => 'light-green 800', 'classes' => 'light-green darken-3 white-text' ),
			'33691e' => array( 'label' => 'light-green 900', 'classes' => 'light-green darken-4 white-text' ),
			'ccff90' => array( 'label' => 'light-green A100', 'classes' => 'light-green accent-1' ),
			'b2ff59' => array( 'label' => 'light-green A200', 'classes' => 'light-green accent-2' ),
			'76ff03' => array( 'label' => 'light-green A400', 'classes' => 'light-green accent-3' ),
			'64dd17' => array( 'label' => 'light-green A700', 'classes' => 'light-green accent-4' ),
			'f9fbe7' => array( 'label' => 'lime 50', 'classes' => 'lime lighten-5' ),
			'f0f4c3' => array( 'label' => 'lime 100', 'classes' => 'lime lighten-4' ),
			'e6ee9c' => array( 'label' => 'lime 200', 'classes' => 'lime lighten-2' ),
			'dce775' => array( 'label' => 'lime 300', 'classes' => 'lime lighten-3' ),
			'd4e157' => array( 'label' => 'lime 400', 'classes' => 'lime lighten-1' ),
			'cddc39' => array( 'label' => 'lime 500', 'classes' => 'lime' ),
			'c0ca33' => array( 'label' => 'lime 600', 'classes' => 'lime darken-1' ),
			'afb42b' => array( 'label' => 'lime 700', 'classes' => 'lime darken-2' ),
			'9e9d24' => array( 'label' => 'lime 800', 'classes' => 'lime darken-3 white-text' ),
			'827717' => array( 'label' => 'lime 900', 'classes' => 'lime darken-4 white-text' ),
			'f4ff81' => array( 'label' => 'lime A100', 'classes' => 'lime accent-1' ),
			'eeff41' => array( 'label' => 'lime A200', 'classes' => 'lime accent-2' ),
			'c6ff00' => array( 'label' => 'lime A400', 'classes' => 'lime accent-3' ),
			'aeea00' => array( 'label' => 'lime A700', 'classes' => 'lime accent-4' ),
			'fffde7' => array( 'label' => 'yellow 50', 'classes' => 'yellow lighten-5' ),
			'fff9c4' => array( 'label' => 'yellow 100', 'classes' => 'yellow lighten-4' ),
			'fff59d' => array( 'label' => 'yellow 200', 'classes' => 'yellow lighten-2' ),
			'fff176' => array( 'label' => 'yellow 300', 'classes' => 'yellow lighten-3' ),
			'ffee58' => array( 'label' => 'yellow 400', 'classes' => 'yellow lighten-1' ),
			'ffeb3b' => array( 'label' => 'yellow 500', 'classes' => 'yellow' ),
			'fdd835' => array( 'label' => 'yellow 600', 'classes' => 'yellow darken-1' ),
			'fbc02d' => array( 'label' => 'yellow 700', 'classes' => 'yellow darken-2' ),
			'f9a825' => array( 'label' => 'yellow 800', 'classes' => 'yellow darken-3' ),
			'f57f17' => array( 'label' => 'yellow 900', 'classes' => 'yellow darken-4 white-text' ),
			'ffff8d' => array( 'label' => 'yellow A100', 'classes' => 'yellow accent-1' ),
			'ffff00' => array( 'label' => 'yellow A200', 'classes' => 'yellow accent-2' ),
			'ffea00' => array( 'label' => 'yellow A400', 'classes' => 'yellow accent-3' ),
			'ffd600' => array( 'label' => 'yellow A700', 'classes' => 'yellow accent-4' ),
			'fff8e1' => array( 'label' => 'amber 50', 'classes' => 'amber lighten-5' ),
			'ffecb3' => array( 'label' => 'amber 100', 'classes' => 'amber lighten-4' ),
			'ffe082' => array( 'label' => 'amber 200', 'classes' => 'amber lighten-2' ),
			'ffd54f' => array( 'label' => 'amber 300', 'classes' => 'amber lighten-3' ),
			'ffca28' => array( 'label' => 'amber 400', 'classes' => 'amber lighten-1' ),
			'ffc107' => array( 'label' => 'amber 500', 'classes' => 'amber' ),
			'ffb300' => array( 'label' => 'amber 600', 'classes' => 'amber darken-1' ),
			'ffa000' => array( 'label' => 'amber 700', 'classes' => 'amber darken-2' ),
			'ff8f00' => array( 'label' => 'amber 800', 'classes' => 'amber darken-3' ),
			'ff6f00' => array( 'label' => 'amber 900', 'classes' => 'amber darken-4 white-text' ),
			'ffe57f' => array( 'label' => 'amber A100', 'classes' => 'amber accent-1' ),
			'ffd740' => array( 'label' => 'amber A200', 'classes' => 'amber accent-2' ),
			'ffc400' => array( 'label' => 'amber A400', 'classes' => 'amber accent-3' ),
			'ffab00' => array( 'label' => 'amber A700', 'classes' => 'amber accent-4' ),
			'fff3e0' => array( 'label' => 'orange 50', 'classes' => 'orange lighten-5' ),
			'ffe0b2' => array( 'label' => 'orange 100', 'classes' => 'orange lighten-4' ),
			'ffcc80' => array( 'label' => 'orange 200', 'classes' => 'orange lighten-2' ),
			'ffb74d' => array( 'label' => 'orange 300', 'classes' => 'orange lighten-3' ),
			'ffa726' => array( 'label' => 'orange 400', 'classes' => 'orange lighten-1' ),
			'ff9800' => array( 'label' => 'orange 500', 'classes' => 'orange' ),
			'fb8c00' => array( 'label' => 'orange 600', 'classes' => 'orange darken-1' ),
			'f57c00' => array( 'label' => 'orange 700', 'classes' => 'orange darken-2' ),
			'ef6c00' => array( 'label' => 'orange 800', 'classes' => 'orange darken-3' ),
			'e65100' => array( 'label' => 'orange 900', 'classes' => 'orange darken-4 white-text' ),
			'ffd180' => array( 'label' => 'orange A100', 'classes' => 'orange accent-1' ),
			'ffab40' => array( 'label' => 'orange A200', 'classes' => 'orange accent-2' ),
			'ff9100' => array( 'label' => 'orange A400', 'classes' => 'orange accent-3' ),
			'ff6d00' => array( 'label' => 'orange A700', 'classes' => 'orange accent-4' ),
			'fbe9e7' => array( 'label' => 'deep-orange 50', 'classes' => 'deep-orange lighten-5' ),
			'ffccbc' => array( 'label' => 'deep-orange 100', 'classes' => 'deep-orange lighten-4' ),
			'ffab91' => array( 'label' => 'deep-orange 200', 'classes' => 'deep-orange lighten-2' ),
			'ff8a65' => array( 'label' => 'deep-orange 300', 'classes' => 'deep-orange lighten-3' ),
			'ff7043' => array( 'label' => 'deep-orange 400', 'classes' => 'deep-orange lighten-1' ),
			'ff5722' => array( 'label' => 'deep-orange', 'classes' => 'deep-orange' ),
			'f4511e' => array( 'label' => 'deep-orange 600', 'classes' => 'deep-orange darken-1 white-text' ),
			'e64a19' => array( 'label' => 'deep-orange 700', 'classes' => 'deep-orange darken-2 white-text' ),
			'd84315' => array( 'label' => 'deep-orange 800', 'classes' => 'deep-orange darken-3 white-text' ),
			'bf360c' => array( 'label' => 'deep-orange 900', 'classes' => 'deep-orange darken-4 white-text' ),
			'ff9e80' => array( 'label' => 'deep-orange A100', 'classes' => 'deep-orange accent-1' ),
			'ff6e40' => array( 'label' => 'deep-orange A200', 'classes' => 'deep-orange accent-2' ),
			'ff3d00' => array( 'label' => 'deep-orange A400', 'classes' => 'deep-orange accent-3 white-text' ),
			'dd2c00' => array( 'label' => 'deep-orange A700', 'classes' => 'deep-orange accent-4 white-text' ),
			'efebe9' => array( 'label' => 'brown 50', 'classes' => 'brown lighten-5' ),
			'd7ccc8' => array( 'label' => 'brown 100', 'classes' => 'brown lighten-4' ),
			'bcaaa4' => array( 'label' => 'brown 200', 'classes' => 'brown lighten-2' ),
			'a1887f' => array( 'label' => 'brown 300', 'classes' => 'brown lighten-3' ),
			'8d6e63' => array( 'label' => 'brown 400', 'classes' => 'brown lighten-1' ),
			'795548' => array( 'label' => 'brown 500', 'classes' => 'brown white-text' ),
			'6d4c41' => array( 'label' => 'brown 600', 'classes' => 'brown darken-1 white-text' ),
			'5d4037' => array( 'label' => 'brown 700', 'classes' => 'brown darken-2 white-text' ),
			'4e342e' => array( 'label' => 'brown 800', 'classes' => 'brown darken-3 white-text' ),
			'3e2723' => array( 'label' => 'brown 900', 'classes' => 'brown darken-4 white-text' ),
			'fafafa' => array( 'label' => 'grey 50', 'classes' => 'grey lighten-5' ),
			'f5f5f5' => array( 'label' => 'grey 100', 'classes' => 'grey lighten-4' ),
			'eeeeee' => array( 'label' => 'grey 200', 'classes' => 'grey lighten-2' ),
			'e0e0e0' => array( 'label' => 'grey 300', 'classes' => 'grey lighten-3' ),
			'bdbdbd' => array( 'label' => 'grey 400', 'classes' => 'grey lighten-1' ),
			'9e9e9e' => array( 'label' => 'grey 500', 'classes' => 'grey' ),
			'757575' => array( 'label' => 'grey 600', 'classes' => 'grey darken-1 white-text' ),
			'616161' => array( 'label' => 'grey 700', 'classes' => 'grey darken-2 white-text' ),
			'424242' => array( 'label' => 'grey 800', 'classes' => 'grey darken-3 white-text' ),
			'212121' => array( 'label' => 'grey 900', 'classes' => 'grey darken-4 white-text' ),
			'eceff1' => array( 'label' => 'blue-grey 50', 'classes' => 'blue-grey lighten-5' ),
			'cfd8dc' => array( 'label' => 'blue-grey 100', 'classes' => 'blue-grey lighten-4' ),
			'b0bec5' => array( 'label' => 'blue-grey 200', 'classes' => 'blue-grey lighten-2' ),
			'90a4ae' => array( 'label' => 'blue-grey 300', 'classes' => 'blue-grey lighten-3' ),
			'78909c' => array( 'label' => 'blue-grey 400', 'classes' => 'blue-grey lighten-1' ),
			'607d8b' => array( 'label' => 'blue-grey 500', 'classes' => 'blue-grey white-text' ),
			'546e7a' => array( 'label' => 'blue-grey 600', 'classes' => 'blue-grey darken-1 white-text' ),
			'455a64' => array( 'label' => 'blue-grey 700', 'classes' => 'blue-grey darken-2 white-text' ),
			'37474f' => array( 'label' => 'blue-grey 800', 'classes' => 'blue-grey darken-3 white-text' ),
			'263238' => array( 'label' => 'blue-grey 900', 'classes' => 'blue-grey darken-4 white-text' ),
		);

		return $colors;

	}

	public static function main_colors() {

		$colors = array(
			'f44336' => array( 'label' => 'red', 'classes' => 'red' ),
			'e91e63' => array( 'label' => 'pink', 'classes' => 'pink' ),
			'9c27b0' => array( 'label' => 'purple', 'classes' => 'purple' ),
			'673ab7' => array( 'label' => 'deep-purple', 'classes' => 'deep-purple' ),
			'3f51b5' => array( 'label' => 'indigo', 'classes' => 'indigo' ),
			'2196f3' => array( 'label' => 'blue', 'classes' => 'blue' ),
			'03a9f4' => array( 'label' => 'light-blue', 'classes' => 'light-blue' ),
			'00bcd4' => array( 'label' => 'cyan', 'classes' => 'cyan' ),
			'009688' => array( 'label' => 'teal', 'classes' => 'teal' ),
			'4caf50' => array( 'label' => 'green', 'classes' => 'green' ),
			'8bc34a' => array( 'label' => 'light-green', 'classes' => 'light-green' ),
			'cddc39' => array( 'label' => 'lime', 'classes' => 'lime' ),
			'ffeb3b' => array( 'label' => 'yellow', 'classes' => 'yellow' ),
			'ffc107' => array( 'label' => 'amber', 'classes' => 'amber' ),
			'ff9800' => array( 'label' => 'orange', 'classes' => 'orange' ),
			'ff5722' => array( 'label' => 'deep-orange', 'classes' => 'deep-orange' ),
			'795548' => array( 'label' => 'brown', 'classes' => 'brown' ),
			'9e9e9e' => array( 'label' => 'grey', 'classes' => 'grey' ),
			'607d8b' => array( 'label' => 'blue-grey', 'classes' => 'blue-grey' ),
		);

		return $colors;

	}

	public static function depths() {

		$depths = array(
			0 => array( 'label' => 'none', 'classes' => 'no-depth' ),
			1 => array( 'label' => 'z-depth-1', 'classes' => 'z-depth-1' ),
			2 => array( 'label' => 'z-depth-2', 'classes' => 'z-depth-2' ),
			3 => array( 'label' => 'z-depth-3', 'classes' => 'z-depth-3' ),
			4 => array( 'label' => 'z-depth-4', 'classes' => 'z-depth-4' ),
			5 => array( 'label' => 'z-depth-5', 'classes' => 'z-depth-5' ),
		);

		return $depths;

	}

	public static function widths() {

		$depths = array(
			12 => array( 'label' => 'Full', 'classes' => 'col s12' ),
			1  => array( 'label' => '1/12', 'classes' => 'col s12 m12 l1' ),
			2  => array( 'label' => '2/12', 'classes' => 'col s12 m12 l2' ),
			3  => array( 'label' => '3/12', 'classes' => 'col s12 m12 l3' ),
			4  => array( 'label' => '4/12', 'classes' => 'col s12 m12 l4' ),
			5  => array( 'label' => '5/12', 'classes' => 'col s12 m12 l5' ),
			6  => array( 'label' => '6/12', 'classes' => 'col s12 m12 l6' ),
			7  => array( 'label' => '7/12', 'classes' => 'col s12 m12 l7' ),
			8  => array( 'label' => '8/12', 'classes' => 'col s12 m12 l8' ),
			9  => array( 'label' => '9/12', 'classes' => 'col s12 m12 l9' ),
			10 => array( 'label' => '10/12', 'classes' => 'col s12 m12 l10' ),
			11 => array( 'label' => '11/12', 'classes' => 'col s12 m12 l11' ),
		);

		return $depths;

	}

	public static function simple_colors() {

		$colors = Maera_MD_Data::colors();
		$simple_colors = array();

		foreach ( $colors as $color => $values ) {
			$simple_colors[$color] = $values['classes'];
		}

		return $simple_colors;

	}

	public static function simple_main_colors( $only_labels = false ) {

		$colors = Maera_MD_Data::main_colors();
		$simple_colors = array();

		foreach ( $colors as $color => $values ) {
			if ( $only_labels ) {
				$simple_colors[$values['label']] = $values['label'];
			} else {
				$simple_colors[$color] = $values['label'];
			}
		}

		return $simple_colors;

	}

}
