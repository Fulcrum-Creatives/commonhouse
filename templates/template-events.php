<?php
/*
Template Name: Events
*/
get_header();
?>
<div class="content__wrapper inner">
  <?php
  $today = current_time('Ymd');
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $query = new WP_Query(array(
    'post_type' => 'events',
    'paged'     => $paged,
    'meta_query' => array(
      'relation' => 'OR',
      array(
        'key'     => 'ch_event_date',
        'value'   => $today,
        'compare' => '>=',
        'type'    => 'DATE'
      ),
      array(
        'key'     => 'ch_event_end',
        'value'   => $today,
        'compare' => '>=',
        'type'    => 'DATE'
      )
    ),
    'meta_key' => 'ch_event_date',
    'orderby' => 'meta_value_num',
    'order'   => 'ASC',
  ));
  if (have_posts()) : 
    while ($query->have_posts()) : 
      $query->the_post();
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
          <div class="entry__thumbnail col__1-2">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="entry__thumbnail rect">
                <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
            <?php endif ?>
          </div>
          <div class="entry__content col__1-2">
            <?php dfw_entry_title( array( 'heading_tag' => 'h2', 'heading_class' => 'entry__heading tidesans__600' ) ); ?>
            <h3 class="entry_subtitle tidesans__400">
              <?php echo $dates . ' at ' . $ch_events_location; ?>
            </h3>
            <?php dfw_custom_excerpt(); ?>
          </div>
        </article>
      </div>
    <?php
    endwhile;
  endif; 
  wp_reset_postdata();
  ?>
</div>
<?php get_footer(); ?>