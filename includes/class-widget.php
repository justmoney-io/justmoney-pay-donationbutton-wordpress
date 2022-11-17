<?php
// Creating the widget
class WDS_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'WDS_widget', 
 
// Widget name will appear in UI
__('JustMoney Pay', 'WDS_widget'), 
 
// Widget description
array( 'description' => __( 'JustMoney Pay - Crypto Donations Button', 'WDS_widget' ), )
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
echo $GLOBALS['WDS']->show_donation_button();
echo $args['after_widget'];
}
 
// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'WDS_widget' );
}
// Widget admin form
?>
<?php
}
 
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class WDS_widget ends here
} 
 
// Register and load the widget
function wpb_load_widget() {
    register_widget( 'WDS_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );