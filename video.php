<?php get_header(); ?>
<h2><?php get_sidebar('Sidebar-1'); ?></h2>
<hr>
<div id="content">



<body <?php body_class(); ?>>
    
<section class="content">

    <?php the_content(); ?>
            <p><video controls> <source src='<?php echo wp_get_attachment_url(); ?>' type='video/mp4'>Your browser does not support the video/audio tag.</video></p>
            
            <?php
$uploaded = esc_attr(get_the_time());
$date3 = get_the_date();
$url3 = esc_url(wp_get_attachment_url());
$post_url = esc_url(get_permalink($post->post_parent));
$post_title = get_the_title($post->post_parent);
?>
           
          <?php
$uploaded = esc_attr(get_the_time());
$date3 = get_the_date();
$url3 = esc_url(wp_get_attachment_url());
$post_url = esc_url(get_permalink($post->post_parent));
$post_title = get_the_title($post->post_parent);
?>
            <h2>Metadata:</h2>
            <?php
            $metadata = wp_get_attachment_metadata();
            $fsize = $metadata['filesize'];
            $length = $metadata['length_formatted'];
            $width = $metadata['width'];
            $height = $metadata['height'];
            $fformat = $metadata['fileformat'];
            $dformat = $metadata['dataformat'];
            $audio_codec = $metadata['audio']['codec'];
            $sample_rate = $metadata['audio']['sample_rate'];
            $channels = $metadata['audio']['channels'];
            $bits_per_sample = $metadata['audio']['bits_per_sample'];
            $lossless = $metadata['audio']['lossless'];
            $channelmode = $metadata['audio']['channelmode'];
            ?>
            Uploaded: <?php echo $date3; ?> <?php echo $uploaded; ?> <br>
            File Url: <?php echo $url3; ?> <br>
            Mime type: <?php echo get_post_mime_type(); ?> <br><br>
            
            Dimensions: <?php echo $width; ?>x<?php echo $height; ?> <br>
            Length: <?php echo $length; ?> <br>
            Format: <?php echo $fformat; ?> <br>
            Data Format: <?php echo $dformat; ?> <br>
            Audio codec: <?php echo $audio_codec; ?> <br>
            Channels: <?php echo $channels; ?> <br>
            Bits per sample: <?php echo $bits_per_sample; ?> <br>
            Channel mode: <?php echo $channelmode; ?> <br>

</section>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>