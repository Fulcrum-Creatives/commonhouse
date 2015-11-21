<?php
/*
Template Name: News
*/
get_header();
?>
<div class="content__wrapper inner">
  <?php
  $news_query = new WP_Query( array(
    'post_type' => 'post',
    'paged'     => $paged
  ) );
  $paged     = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $tmp_query = $wp_query;
  $wp_query  = null;
  $wp_query  = $news_query;
  if (have_posts()) : 
    while ($news_query->have_posts()) : 
      $news_query->the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('entry listing news-page'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="entry__thumbnail rect">
            <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
              <?php the_post_thumbnail();?>
            </a>
          </div>
        <?php endif ?>
        <div class="entry__content col__2-3">
          <?php dfw_entry_title( array( 'heading_tag' => 'h2', 'heading_class' => 'entry__heading tidesans__600 link__hover--shadow' ) ); ?>
          <?php dfw_custom_excerpt(); ?>
        </div>
      </article>
    <?php
    endwhile;
    dfw_pagination();
  endif; 
  wp_reset_postdata();
  $wp_query = null;
  $wp_query = $tmp_query;
  ?>
</div>
<?php get_footer(); ?>