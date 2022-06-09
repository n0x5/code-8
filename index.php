<?php get_header(); ?>

<h2><?php get_sidebar('Sidebar-1'); ?></h2>
<hr>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h3 style="display:inline;"><?php the_date(); ?> - </h3><h2 style="display:inline;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<div id="nav"><?php next_posts_link(__('&laquo; Older Posts', 'code8')) ?> | <?php previous_posts_link(__('Newer Posts &raquo;','code8')); ?></div>
<?php get_footer(); ?>
