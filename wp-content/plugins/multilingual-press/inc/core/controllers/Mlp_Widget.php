<?php
/**
 * Module Name:	Multilingual Press Widget
 * Description:	This Widget shows the flags
 * Author:		Inpsyde GmbH
 * Version:		0.3
 * Author URI:	http://inpsyde.com
 */
class Mlp_Widget extends WP_Widget {

	protected static $handle = 'mlp_widget';

	/**
	 * Registers the widget and set up the description
	 *
	 * @uses	Multilingual_Press, __
	 * @return	void
	 */
	public function mlp_widget() {

		$widget_ops = array(
			'classname'		=> self::$handle,
			'description'	=> __( 'Multilingual Press Translations', 'multilingualpress' )
		);

		add_filter( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		parent::__construct( 'Mlp_Widget', __( 'Language Switcher', 'multilingualpress' ), $widget_ops );
	}

	/**
	 * Load frontend CSS if the widget is active
	 *
	 * @return  void
	 */
	public function enqueue_styles() {

		if ( is_active_widget( FALSE, FALSE, self::$handle )
			//or 'off' !== $this->get_module_state( array( 'slug' => 'class-Multilingual_Press_Quicklink' ) )
		)
			wp_enqueue_style( 'mlp-frontend-css' );
	}

	/**
	 * Display widget admin form
	 *
	 * @param	array $instance | widget settings
	 * @return	void
	 */
	public function form( $instance ) {

		$title             = isset( $instance[ 'widget_title' ] )
			? esc_attr( $instance[ 'widget_title' ] ) : '';
		$sort_order        = isset( $instance[ 'widget_sort_order' ] )
			? strip_tags( $instance[ 'widget_sort_order' ] ) : 'name';
		$link_type         = isset( $instance[ 'widget_title' ] )
			? esc_attr( $instance[ 'widget_link_type' ] ) : '';
		$show_current_blog = isset( $instance[ 'widget_show_current_blog' ] )
			? strip_tags( $instance[ 'widget_show_current_blog' ] ) : '';
		?>
		<p>
			<?php
			$title_id = $this->get_field_id( 'mlp_widget_title' );
			?>
			<label for='<?php echo $title_id; ?>'><?php esc_html_e( 'Title', 'multilingualpress' ); ?></label><br />
			<input class="widefat" type ='text' id='<?php echo $title_id; ?>' name='<?php
				echo $this->get_field_name( 'mlp_widget_title' );
				?>' value='<?php
				echo $title;
				?>'>
		</p>
		<p>
			<?php
			esc_html_e( 'Sort by', 'multilingualpress' );
			print '&#160;';

			$sort_name    = $this->get_field_name( 'mlp_widget_sort_order' );
			$sort_options = array (
				'name'   => __( 'Name', 'multilingualpress' ),
				'blogid' => __( 'Site ID', 'multilingualpress' )
			);

			foreach ( $sort_options as $sort_id => $sort_label ) {
				printf(
					'&#160;<label for="%1$s"><input type="radio" name="%2$s" value="%3$s" id="%1$s" %4$s/>&nbsp;%5$s</label> ',
					$this->get_field_id( "mlp_widget_sort_order_$sort_id" ),
					$sort_name,
					$sort_id,
					checked( $sort_id, $sort_order, FALSE ),
					$sort_label
				);
			}
			?>
		</p>
		<p>
			<?php
			$type_id = $this->get_field_id( 'mlp_widget_link_type' );
			?>
			<label for='<?php echo $type_id; ?>'>
				<?php
				_e( 'Link text', 'multilingualpress' );
				?></label>
			<select class="widefat" id='<?php echo $type_id; ?>' name='<?php echo
				$this->get_field_name( 'mlp_widget_link_type' );
				?>'>
				<?php
				$options = array (
					'text'      => __( 'Text', 'multilingualpress' ),
					'flag'      => __( 'Flag', 'multilingualpress' ),
					'text_flag' => __( 'Text &amp; Flag', 'multilingualpress' ),
					'lang_code' => __( 'Language code', 'multilingualpress' )
				);

				foreach ( $options as $option => $text ) {
					printf(
						'<option value="%1$s" %2$s>%3$s</option>',
						$option,
						selected( $link_type, $option, FALSE ),
						$text
					);
				}
				?>
			</select>
		</p>
		<p>
			<?php
			$show_blog_id = $this->get_field_id( 'mlp_widget_show_current_blog' );
			?>
			<label for='<?php echo $show_blog_id; ?>'>
				<input <?php
					checked( $show_current_blog, 1 );
					?> type="checkbox" id="<?php
					echo $show_blog_id;
					?>" name="<?php
					echo $this->get_field_name( 'mlp_widget_show_current_blog' );
					?>" value="1" />
			<?php
				_e( 'Show current site', 'multilingualpress' );
			?></label>
		</p>
		<?php
	}

	/**
	 * Callback for widget update
	 *
	 * @param	array $new_instance | new widget settings
	 * @param	array $old_instance | widget settings
	 * @return	array $instance | new widget settings
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;
		$instance[ 'widget_title' ]             = esc_html__( $new_instance[ 'mlp_widget_title' ] );
		$instance[ 'widget_link_type' ]         = esc_attr( $new_instance[ 'mlp_widget_link_type' ] );
		$instance[ 'widget_sort_order' ]        = esc_attr( $new_instance[ 'mlp_widget_sort_order' ] );
		// check checkbox value for current blog
		$instance[ 'widget_show_current_blog' ] = 
			isset ( $new_instance[ 'mlp_widget_show_current_blog' ] ) &&
			$new_instance[ 'mlp_widget_show_current_blog' ] === '1' 
			? 1 : 0;

		return $instance;
	}

	/**
	 * Frontend display
	 *
	 * @param	array $args
	 * @param	array $instance | widget settings
	 * @return	void
	 */
	public function widget( $args, $instance ) {

		if ( ! isset( $instance[ 'widget_sort_order' ] ) )
			$instance[ 'widget_sort_order' ] = 'blogid';

		$output = mlp_show_linked_elements(
			array(
				'link_text' => $instance[ 'widget_link_type' ],
				'sort' => $instance[ 'widget_sort_order' ],
				'show_current_blog' => $instance[ 'widget_show_current_blog' ] == 1,
				'echo' => FALSE
			)
		);

		if ( '' == $output )
			return;

		echo $args['before_widget'];

		// Display Title (optional)
		if ( $instance[ 'widget_title' ] ) {
			echo $args['before_title']
				. apply_filters( 'widget_title', $instance[ 'widget_title' ] )
				. $args['after_title'];
		}

		echo $output . $args['after_widget'];
	}

	/**
	 * Registers the widget
	 *
	 * @return	void
	 */
	public static function widget_register() {
		register_widget( __CLASS__ );
	}
}