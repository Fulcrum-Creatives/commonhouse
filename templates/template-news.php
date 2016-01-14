<?php
/*
Template Name: News
*/
get_header();
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $ch_pp_logos        = dfw_get_field( 'ch_pp_logos' );
    $ch_pp_images       = dfw_get_field( 'ch_pp_images' );
    $ch_lennys_blog_url = dfw_get_field( 'ch_lennys_blog_url' );
  endwhile; 
else:
  get_template_part( 'template-parts/content', 'none' );
endif; 
wp_reset_postdata();
?>
<div class="content__wrapper inner">
  <div class="col__1-3 news__aside">
    <div class="cust-border__top"></div>
      <h2 class="news__aside-heading lulocleanone__bold">
        <?php echo _e( 'Press Kit', 'fcwp' ); ?>
      </h2>
      <div class="button_one lulocleanone__bold">
        <a href="<?php echo $ch_pp_logos['url']; ?>" class="link__hover--shadow-small">
          <?php echo _e( 'Logos', 'fcwp' ); ?>
        </a>
      </div>
      <div class="button_one lulocleanone__bold">
        <a href="<?php echo $ch_pp_images['url']; ?>" class="link__hover--shadow-small">
          <?php echo _e( 'Photos', 'fcwp' ); ?>
        </a>
      </div>
    <div class="cust-border__bottom"></div>
      <div class="button_one lulocleanone__bold">
        <a href="<?php echo $ch_lennys_blog_url; ?>" class="link__hover--shadow-small">
          <?php echo _e( 'Read Lenny\'s Blog', 'fcwp' ); ?>
        </a>
      </div>
  </div>
  <div class="col__2-3">
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
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry listing news-page' ); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <div class="entry__content ">
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
</div>
<?php get_footer(); ?>