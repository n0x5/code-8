<?php
/*
Plugin Name: Nox Custom Widget
Version: 0.3
Plugin URI:
Description: Plugin to add custom widgets
Author: Nox
Author URI:
*/

// Creating the widget 
class n0x5_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'n0x5_widget', 
  
// Widget name will appear in UI
__('n0x5 Girls Widget', 'n0x5_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Love girls', 'n0x5_widget_domain' ), ) 
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
?>

<h2><a href="/girls-index">Latest girls</a></h2>
<?php
$args3 = array(
'posts_per_page' => 5,
'post_type' => 'page',
'post_status' => 'publish',
'meta_key'     => 'girls',
'orderby' => array('date' => 'desc'),
);
$the_query = new WP_Query( $args3 );
if ( $the_query->have_posts()):
while ( $the_query->have_posts() ) : $the_query->the_post();
?>


<p style="margin-bottom: 3px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( ) ); ?></a><br>
    <?php the_modified_time('F jS, Y') ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php
endwhile;
wp_reset_postdata();
else:
echo 'Sorry, no posts matched your criteria.';
endif;

echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'n0x5_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class n0x5_widget ends here
} 
 
 
// Register and load the widget
function n0x5_load_widget() {
    register_widget( 'n0x5_widget' );
}
add_action( 'widgets_init', 'n0x5_load_widget' );



// Creating the widget 
class n0x6_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'n0x6_widget', 
  
// Widget name will appear in UI
__('n0x6 Movies Widget', 'n0x6_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Love girls', 'n0x6_widget_domain' ), ) 
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
?>

<h2><a href="/gallery">Latest galleries</a></h2>
<?php
$args3 = array(
'post_parent' => '36666',
'post_type' => 'page',
'orderby' => array('date' => 'desc'),
'posts_per_page' => 5,
'meta_key' => '_thumbnail_id',
);
$the_query = new WP_Query( $args3 );
if ( $the_query->have_posts()):
while ( $the_query->have_posts() ) : $the_query->the_post();
?>


<p style="margin-bottom: 3px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( ) ); ?></a><br>
    <?php the_modified_time('F jS, Y') ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php
endwhile;
wp_reset_postdata();
else:
echo 'Sorry, no posts matched your criteria.';
endif;

echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'n0x6_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class n0x6_widget ends here
} 
 
 
// Register and load the widget
function n0x6_load_widget() {
    register_widget( 'n0x6_widget' );
}
add_action( 'widgets_init', 'n0x6_load_widget' );



// Creating the widget 
class n0x7_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'n0x7_widget', 
  
// Widget name will appear in UI
__('n0x7 Images Widget', 'n0x7_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Love girls', 'n0x7_widget_domain' ), ) 
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
?>

<h2><a href="/attach">Latest images</a></h2>
<?php
$args3 = array(
'post_type' => 'attachment',
'post_status' => 'any',
'post_mime_type' => 'image',
'orderby' => array('modified' => 'desc'),
);

$the_query = new WP_Query( $args3 );
if ( $the_query->have_posts()):
while ( $the_query->have_posts() ) : $the_query->the_post();
?>


<p style="margin-bottom: 3px;"><a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( get_the_ID(), array('200', '200'), "", 'thumbnail' );  ?></a><br>
    <?php the_modified_time('F jS, Y') ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php
endwhile;
wp_reset_postdata();
else:
echo 'Sorry, no posts matched your criteria.';
endif;

echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'n0x7_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class n0x7_widget ends here
} 
 
 
// Register and load the widget
function n0x7_load_widget() {
    register_widget( 'n0x7_widget' );
}
add_action( 'widgets_init', 'n0x7_load_widget' );


// Creating the widget 
class n0x8_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'n0x8_widget', 
  
// Widget name will appear in UI
__('n0x8 Instagram Widget', 'n0x8_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Love girls', 'n0x8_widget_domain' ), ) 
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
?>

<h2><a href="/ig">Latest IG girls</a></h2>
<?php
$args3 = array(
'post_parent' => '44818',
'post_type' => 'page',
'orderby' => array('modified' => 'desc'),
'meta_key' => '_thumbnail_id',
);
$the_query = new WP_Query( $args3 );
if ( $the_query->have_posts()):
while ( $the_query->have_posts() ) : $the_query->the_post();
?>


<p style="margin-bottom: 3px;"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( ) ); ?></a><br>
    <?php the_modified_time('F jS, Y') ?> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<?php
endwhile;
wp_reset_postdata();
else:
echo 'Sorry, no posts matched your criteria.';
endif;

echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'n0x8_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class n0x8_widget ends here
} 
 
 
// Register and load the widget
function n0x8_load_widget() {
    register_widget( 'n0x8_widget' );
}
add_action( 'widgets_init', 'n0x8_load_widget' );
