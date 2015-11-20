<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  $ch_events_section_header_full = dfw_get_field( 'ch_events_section_header_full' );
  $ch_events_section_header_mobile = dfw_get_field( 'ch_events_section_header_mobile' );
  $ch_events_section_page_link = dfw_get_field( 'ch_events_section_page_link' );
endwhile; endif; wp_reset_postdata();
?>
<section class="hp_sections hp_events bg_dots">
  <div class="content__wrapper">
    <header class="hp_sections__header header__full">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_events_section_page_link; ?>">
          <?php echo $ch_events_section_header_full; ?>
        </a>
      </h2>
    </header>
    <header class="hp_sections__header header__mobile">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_events_section_page_link; ?>">
          <?php echo $ch_events_section_header_mobile; ?>
        </a>
      </h2>
    </header>
    <div class="hp-section__full events__full">
      <div class="row entry__rect">
        <?php
        $today = current_time('Ymd');
        $query_full_small = new WP_Query( array(
            'post_type'      => 'events',
            'posts_per_page' => '2',
            'no_found_rows'  => true,
            'meta_key'       => 'ch_event_date',
            'orderby'        => 'meta_value_num',
            'order'          => 'ASC',
            'meta_query'     => array(
              'relation'  => 'OR',
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
            )
        ) );
        if( have_posts() ) : 
          while( $query_full_small->have_posts() ) : 
            $query_full_small->the_post();
            $ch_event_type      = dfw_get_field( 'ch_event_type' );
            $ch_event_date      = dfw_get_field( 'ch_event_date' );
            $ch_event_end       = dfw_get_field( 'ch_event_end' );
            $ch_events_location = dfw_get_field( 'ch_events_location' );
            ?>
            <div class="col__1-2">
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry__thumbnail">
                  <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail();?>
                  </a>
                </div>
              <?php endif ?>
                <h3 class="entry__header lulocleanone__bold">
                  <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="event__date tidesans__400">
                  <?php
                  if( $ch_event_type == 'multi' ) {
                    echo $ch_event_date . ' - ' . $ch_event_end;
                  } elseif( $ch_event_type == 'single' ) {
                    echo $ch_event_date;
                  } else {
                    echo _e( 'Dates to be announced ', 'fcwp' );
                  }
                  ?>
                </div>
                <div class="event__location tidesans__400">
                  <?php
                  if( $ch_events_location ) {
                    echo $ch_events_location;
                  } else {
                    echo _e( 'Location to be announced', 'fcwp' );
                  }
                  ?>
                </div>
              </a>
            </div>
            <?php
          endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="hp-section__mobile events__mobile">
      <div class="row entry__rect">
        <?php
        $query_full_small = new WP_Query( array(
            'post_type'         => 'events',
            'posts_per_page'    => '1',
            'no_found_rows'     => true
        ) );
        if( have_posts() ) : 
          while( $query_full_small->have_posts() ) : 
            $query_full_small->the_post();
            ?>
            <div class="col__full">
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry__thumbnail">
                  <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail();?>
                  </a>
                </div>
              <?php endif ?>
                <h3 class="entry__header lulocleanone__bold">
                  <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <div class="event__date">
                  <?php
                  if( $ch_event_type == 'multi' ) {
                    echo $ch_event_date . ' - ' . $ch_event_end;
                  } elseif( $ch_event_type == 'single' ) {
                    echo $ch_event_date;
                  } else {
                    echo _e( 'Dates to be announced ', 'fcwp' );
                  }
                  ?>
                </div>
                <div class="event__location">
                  <?php
                  if( $ch_events_location ) {
                    echo $ch_events_location;
                  } else {
                    echo _e( 'Location to be announced', 'fcwp' );
                  }
                  ?>
                </div>
            </div>
            <?php
          endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>