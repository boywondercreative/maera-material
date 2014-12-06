<?php
/**
 * Creates a dropdown in each widget and then adds the selected options as a CSS class
 */
class Maera_MD_Widget_Dropdown {

	private $id;
	private $label;
	private $options;

	function __construct( $id, $label, $options ) {

		$this->id = $id;
		$this->label = $label;
		$this->options = $options;

		add_action( 'in_widget_form', array( $this, 'in_widget_form' ), 10, 3 );
		add_filter( 'widget_update_callback', array( $this, 'widget_update_callback' ), 10, 2 );
		add_filter( 'dynamic_sidebar_params', array( $this, 'dynamic_sidebar_params' ) );

	}

	function dynamic_sidebar_params( $params ) {

		global $wp_registered_widgets;

		$widget_id  = $params[0]['widget_id'];
		$widget_obj = $wp_registered_widgets[$widget_id];
		$widget_opt = get_option( $widget_obj['callback'][0]->option_name );
		$widget_num = $widget_obj['params'][0]['number'];

		preg_match( '/(\<[a-zA-Z]+)(.*?)(\>)/', $params[0]['before_widget'], $mat );

		if ( isset( $widget_opt[$widget_num][$this->id] ) && ! empty( $widget_opt[$widget_num][$this->id] ) && $widget_opt[$widget_num][$this->id] != -1 ) {
			if ( preg_match( '/class="/', $params[0]['before_widget'] ) ) {
				$params[0]['before_widget'] =  preg_replace( '/class="/', "class=\"{$widget_opt[$widget_num][$this->id]} ", $params[0]['before_widget'], 1 );
			}else{
				$params[0]['before_widget'] = preg_replace( '/(\<[a-zA-Z]+)(.*?)(\>)/', "$1 $2  class=\"{$widget_opt[$widget_num][$this->id]}\" $3", $params[0]['before_widget'], 1 );
			}
		}

		return $params;

	}

	function widget_update_callback( $instance, $new_instance ) {

		$instance[$this->id] = $new_instance[$this->id];
		return $instance;

	}

	function in_widget_form( $widget, $return, $instance ) {

		$options = $this->options;

		$instance[$this->id] = ( ! isset( $instance[$this->id] ) ) ? null : $instance[$this->id];
		?>

		<div style="margin-top: 1em;">
			<label for="<?php echo $widget->get_field_id( $this->id ); ?>"><?php echo $this->label; ?></label>
			<select class="widefat" id="<?php echo $widget->get_field_id( $this->id ); ?>" name="<?php echo $widget->get_field_name( $this->id ); ?>">
				<option value="-1"><?php _e( '', 'maera_md' ); ?></option>
				<?php foreach ( $options as $option => $name ) : ?>
					<?php $selected = ( ( ( $option == $instance[$this->id] ) || empty( $instance[$this->id] ) ) ? ' selected="selected"' : '' ); ?>
					<option value="<?php echo $option; ?>"<?php echo $selected; ?>><?php echo $name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?php
	}
}
