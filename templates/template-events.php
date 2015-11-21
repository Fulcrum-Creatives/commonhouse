<?php
/*
Template Name: Events
*/
get_header();
?>
<div class="content__wrapper inner">
  <?php
  $events_query = new WP_Query(array(
    'post_type' => 'events',
    'paged'     => $paged,
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key'     => 'ch_event_date',
        'value'   => current_time('Ymd'),
        'compare' => '>=',
        'type'    => 'DATE'
      ),
      array(
        'key'     => 'ch_event_end',
        'value'   => current_time('Ymd'),
        'compare' => '>=',
        'type'    => 'DATE'
      )
    ),
    'meta_key' => 'ch_event_date',
    'orderby' => 'meta_value_num',
    'order'   => 'ASC',
  ));
  $paged     = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $tmp_query = $wp_query;
  $wp_query  = null;
  $wp_query  = $events_query;
  if (have_posts()) : 
    while ($events_query->have_posts()) : 
      $events_query->the_post();
      $ch_event_type = dfw_get_field( 'ch_event_type' );
      $ch_event_date = dfw_get_field( 'ch_event_date' );
      $ch_event_end = dfw_get_field( 'ch_event_end' );
      $ch_events_location = dfw_get_field( 'ch_events_location' );
      if( $ch_event_type == 'multi' ) :
        $dates = $ch_event_date . ' - ' . $ch_event_end;
      else :
        $dates = $ch_event_date;
      endif;
      ?>
      <div class="row">
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry listing events-page'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
          <div class="col__1-2">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="entry__thumbnail rect box__hover--shadow">
                <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            <?php endif ?>
          </div>
          <div class="entry__content col__1-2">
            <?php dfw_entry_title( array( 'heading_tag' => 'h2', 'heading_class' => 'entry__heading tidesans__600 link__hover--shadow' ) ); ?>
            <h3 class="entry_subtitle tidesans__400">
              <?php echo $dates . ' at ' . $ch_events_location; ?>
            </h3>
            <?php dfw_custom_excerpt(); ?>
          </div>
        </article>
      </div>
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