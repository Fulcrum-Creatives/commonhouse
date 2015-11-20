<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  $ch_people_section_header_full = dfw_get_field( 'ch_people_section_header_full' );
  $ch_people_section_header_mobile = dfw_get_field( 'ch_people_section_header_mobile' );
  $ch_people_section_page_link = dfw_get_field( 'ch_people_section_page_link' );
endwhile; endif; wp_reset_postdata();
?>
<section class="hp_sections hp_people bg_lines">
  <div class="content__wrapper">
    <header class="hp_sections__header header__full">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_people_section_page_link; ?>">
          <?php echo $ch_people_section_header_full; ?>
        </a>
      </h2>
    </header>
    <header class="hp_sections__header header__mobile">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_people_section_page_link; ?>">
          <?php echo $ch_people_section_header_mobile; ?>
        </a>
      </h2>
    </header>
    <div class="hp-section__full people__full">
      <div class="row entry__circle-sm">
        <?php
        $people_query = new WP_Query( array(
            'post_type'         => 'people',
            'posts_per_page'    => '4',
            'no_found_rows'     => true
        ) );
        if( have_posts() ) : 
          while( $people_query->have_posts() ) : 
            $people_query->the_post();
            ?>
            <div class="col__1-4">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="entry__thumbnail">
                <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                  <?php the_post_thumbnail();?>
                </a>
              </div>
              <?php endif ?>
              <h3 class="entry__header lulocleanone">
                <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                  <?php echo '<span class="lulocleanone__bold">' . preg_replace('/ /', '</span><br/>', get_the_title(), 1);   ?>
                </a> 
              </h3>
            </div>
            <?php
          endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="hp-section__mobile people__mobile">
      <div class="row slick-slider entry__circle-sm">
        <?php
        $people_mobile_query = new WP_Query( array(
            'post_type'         => 'people',
            'posts_per_page'    => '4',
            'no_found_rows'     => true
        ) );
        if( have_posts() ) : 
          while( $people_mobile_query->have_posts() ) : 
            $people_mobile_query->the_post();
            ?>
            <div class="col__1-4">
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry__thumbnail">
                  <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                    <?php the_post_thumbnail();?>
                  </a>
                </div>
              <?php endif ?>
              <h3 class="entry__header lulocleanone">
                <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
                  <?php echo '<span class="lulocleanone__bold">' . preg_replace('/ /', '</span><br/>', get_the_title(), 1);   ?>
                </a>
              </h3>
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