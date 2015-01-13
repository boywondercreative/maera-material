<?php

class Maera_MD_Color_Metabox {

	function __construct() {

		add_action( 'add_meta_boxes', array( $this, 'metabox' ) );
		add_action( 'save_post', array( $this, 'save_metabox' ) );

	}

	function colors() {

		return array(
			'default'     => __( 'default', 'maera_md' ),
			'red'         => __( 'red', 'maera_md' ),
			'pink'        => __( 'pink', 'maera_md' ),
			'purple'      => __( 'purple', 'maera_md' ),
			'deep-purple' => __( 'deep-purple', 'maera_md' ),
			'indigo'      => __( 'indigo', 'maera_md' ),
			'blue'        => __( 'blue', 'maera_md' ),
			'light-blue'  => __( 'light-blue', 'maera_md' ),
			'cyan'        => __( 'cyan', 'maera_md' ),
			'teal'        => __( 'teal', 'maera_md' ),
			'green'       => __( 'green', 'maera_md' ),
			'light-green' => __( 'light-green', 'maera_md' ),
			'lime'        => __( 'lime', 'maera_md' ),
			'yellow'      => __( 'yellow', 'maera_md' ),
			'amber'       => __( 'amber', 'maera_md' ),
			'orange'      => __( 'orange', 'maera_md' ),
			'deep-orange' => __( 'deep-orange', 'maera_md' ),
			'brown'       => __( 'brown', 'maera_md' ),
			'grey'        => __( 'grey', 'maera_md' ),
			'blue-grey'   => __( 'blue-grey', 'maera_md' ),
		);

	}

	function metabox( $post ) {

		global $post;
	    add_meta_box( 'maera_md_metabox', 'Material Design Color', array( $this, 'metabox_form' ), $post->post_type, 'side' , 'high' );

	}

	function save_metabox() {

	    global $post;

	    if ( isset( $_POST['maera_md_color'] ) ) {
	        $maera_md_color = $_POST['maera_md_color'];
	        update_post_meta( $post->ID, 'maera_md_color', $maera_md_color );
	    }

	}

	function metabox_form( $post ) {

		$colors = $this->colors();
	    $maera_md_color = get_post_meta( $post->ID, 'maera_md_color', true ); ?>

	    <label><?php _e( 'You can select a different color to be used on this post. You can see the full palette we\'re using <a href="http://www.google.com/design/spec/style/color.html#color-color-palette" target="_blank">here</a>', 'maera_md' ); ?></label>
		<div style="clear: both; margin-bottom: 10px;"></div>

	    <select name="maera_md_color" id="maera_md_color">
			<?php foreach ( $colors as $color => $label ) : ?>
				<option value="<?php echo $color; ?>" <?php selected( $maera_md_color, $color ); ?>><?php echo $label; ?></option>
			<?php endforeach; ?>
		</select>
	    <?php
	}
}
