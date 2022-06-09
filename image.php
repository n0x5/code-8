<?php get_header(); ?>
<h2><?php get_sidebar('Sidebar-1'); ?></h2>
<hr>
<div id="content">



<body <?php body_class(); ?>>
	
<section class="content">

<?php
$uploaded = esc_attr(get_the_time());
$date3 = get_the_date();
$url3 = esc_url(wp_get_attachment_url());
$post_url = esc_url(get_permalink($post->post_parent));
$post_title = get_the_title($post->post_parent);
?>

<?php
    $attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
    foreach ( $attachments as $k => $attachment ) {
        if ( $attachment->ID == $post->ID )
            break;
    }
    $k++;
    if ( count( $attachments ) > 1 ) {
        if ( isset( $attachments[ $k ] ) )
            $next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
        else
            $next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
    } else {
        $next_attachment_url = wp_get_attachment_url();
    }
?>
<?php $metadata2 = wp_get_attachment_metadata(); ?>
<?php
$width2 = $metadata2['width'];
$height2 = $metadata2['height'];
                                
?>


<h3><a href="<?php echo $url3 ?>">Full size: <?php echo $width2 ?>x<?php echo $height2 ?></a></h3>

                                    <a href="<?php echo esc_url( $next_attachment_url ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
                                    $attachment_size = apply_filters( 'twentyeleven_attachment_size', 600 );
                                    echo wp_get_attachment_image( $post->ID, array( $attachment_size, '600' ) ); 
                                    ?></a>

                                    <?php if ( ! empty( $post->post_excerpt ) ) : ?>
                                    <div class="entry-caption">
                                        <?php // the_excerpt(); ?>
                                    </div>


                                    <?php endif; ?>


                          
                                <?php  the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'code-2' ) . '</span>', 'after' => '</div>' ) ); ?>


         <?php // the_ID(); ?>

<?php
$metadata = wp_get_attachment_metadata();
$width = $metadata['width'];
$height = $metadata['height'];
$caption = $metadata['image_meta']['caption'];
$camera = $metadata['image_meta']['camera'];
$copyright = $metadata['image_meta']['copyright'];
$aperture = $metadata['image_meta']['aperture'];
$timestamp = $metadata['image_meta']['created_timestamp'];
$credit = $metadata['image_meta']['credit'];
$title = $metadata['image_meta']['title'];
$focal_length = $metadata['image_meta']['focal_length'];
$iso = $metadata['image_meta']['iso'];
$shutter_speed = $metadata['image_meta']['shutter_speed'];
$orientation = $metadata['image_meta']['orientation'];
$keywords1 = $metadata['image_meta']['keywords'][0];
$keywords2 = $metadata['image_meta']['keywords'];
$mimetype = $metadata['sizes']['large']['mime-type'];
?>

<h2>Metadata:</h2>

Uploaded: <?php echo $date3; ?> <?php echo $uploaded; ?> <br>
File Url: <?php echo $url3; ?> <br>
Mime type: <?php echo get_post_mime_type(); ?> <br><br>


Dimensions: <?php echo $width; ?>x<?php echo $height; ?> <br>
Camera: <?php echo $camera; ?> <br>
Date taken: <?php echo gmdate("Y-m-d H:i:s", $timestamp); ?> <br>
Caption: <?php echo $caption; ?> <br>
Copyright: <?php echo $copyright; ?> <br>
Credit: <?php echo $credit; ?> <br>
Title: <?php echo $title; ?> <br>
Aperture: <?php echo $aperture; ?> <br>
Focal length: <?php echo $focal_length; ?> <br>
ISO: <?php echo $iso; ?> <br>
Shutter speed: <?php echo $shutter_speed; ?> <br>
Orientation: <?php echo $orientation; ?> <br>
Keywords: <br> <?php foreach ($keywords2 as $value){echo $value . '<br>';} ?>

                
</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>