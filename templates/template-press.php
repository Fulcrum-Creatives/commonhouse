<?php
/*
Template Name: Press
*/
get_header();
?>
<div class="content__wrapper inner">
  <div class="col__1-3 news__aside">
    <div class="cust-border__top"></div>
      <div class="button_one lulocleanone__bold">
        <a href="<?php echo home_url(); ?>/commonhouse-news" class="link__hover--shadow-small">
          <?php echo _e( 'News Releases', 'fcwp' ); ?>
        </a>
      </div>
    <div class="cust-border__bottom"></div>
  </div>
  <div class="col__2-3">
    <?php
    if ( have_posts() ) : 
      while ( have_posts() ) : 
        the_post();
      ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry listing news-page' ); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <div class="entry__content ">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
    endif; 
    wp_reset_postdata();
    ?>
  </div>
</div>
<?php get_footer(); ?>