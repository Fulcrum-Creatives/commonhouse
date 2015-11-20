<?php get_header();
/*
Template Name: Contact
*/
?>
<div class="hp_ales bg_dots">
<?php 
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    ?>
    <div class="content__wrapper inner">
      <?php the_content(); ?>
    </div>
    <?php
  endwhile; 
else:
  get_template_part( 'template-parts/content', 'none' );
endif; 
wp_reset_postdata();
?>
</div>
<?php get_footer(); ?>