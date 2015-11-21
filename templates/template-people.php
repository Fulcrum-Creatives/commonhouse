<?php
/*
Template Name: People
*/
get_header();
?>
<div class="content__wrapper inner">
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query(array(
    'post_type' => 'people',
    'paged'     => $paged
  ));
  if (have_posts()) : 
    while ($query->have_posts()) : 
      $query->the_post();
      $ch_people_nickname = dfw_get_field( 'ch_people_nickname' );
      ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('entry listing people-page'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
        <div class="col__1-3">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="entry__thumbnail entry__circle-lrg">
              <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                <?php the_post_thumbnail();?>
              </a>
            </div>
          <?php endif ?>
        </div>
        <div class="entry__content col__2-3">
          <?php dfw_entry_title( array( 'heading_tag' => 'h2', 'heading_class' => 'entry__heading tidesans__600' ) ); ?>
          <?php if ( $ch_people_nickname ) : ?>
            <h3 class="entry_subtitle tidesans__400">
              <?php echo _e( 'AKA', 'fcwp' ) . ' ' . $ch_people_nickname; ?>
            </h3>
          <?php endif; ?>
          <?php dfw_custom_excerpt(); ?>
        </div>
      </article>
    <?php
    endwhile;
    ?>
    <?php
  endif; 
  wp_reset_postdata();
  ?>
</div>
<?php get_footer(); ?>