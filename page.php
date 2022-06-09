<?php get_header(); ?>

<h2><?php get_sidebar('Sidebar-1'); ?></h2>
<hr>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<br><br>
<div class="footer"><?php get_footer(); ?></div>
