<?php get_header(); ?>
<?php 
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    get_template_part( 'template-parts/content', 'single' );
  endwhile; 
else:
  get_template_part( 'template-parts/content', 'none' );
endif; 
wp_reset_postdata();
?>
<?php get_footer(); ?>