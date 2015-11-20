<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  $ch_ales_section_header_full = dfw_get_field( 'ch_ales_section_header_full' );
  $ch_ales_section_header_mobile = dfw_get_field( 'ch_ales_section_header_mobile' );
  $ch_ales_section_page_link = dfw_get_field( 'ch_ales_section_page_link' );
endwhile; endif; wp_reset_postdata();
?>
<section class="hp_sections hp_ales bg_dots">
  <div class="content__wrapper">
    <header class="hp_sections__header header__full">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_ales_section_page_link; ?>">
          <?php echo $ch_ales_section_header_full; ?>
        </a>
      </h2>
    </header>
    <header class="hp_sections__header header__mobile">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_ales_section_page_link; ?>">
          <?php echo $ch_ales_section_header_mobile; ?>
        </a>
      </h2>
    </header>
    <div class="hp-section__full ales__full">
      <div class="row entry__circle-lrg">
        <?php
        $ale_lrg_query = new WP_Query( array(
            'post_type'      => 'ales',
            'posts_per_page' => '3',
            'no_found_rows'  => true
        ) );
        if( have_posts() ) : 
          while( $ale_lrg_query->have_posts() ) : 
            $ale_lrg_query->the_post();
            ?>
            <div class="col__1-3">
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
            </div>
            <?php
          endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
      </div>
      <div class="row entry__circle-sm">
        <?php
        $ale_sm_query = new WP_Query( array(
            'post_type'      => 'ales',
            'posts_per_page' => '4',
            'no_found_rows'  => true,
            'offset'         => 3
        ) );
        if( have_posts() ) : 
          while( $ale_sm_query->have_posts() ) : 
            $ale_sm_query->the_post();
            ?>
            <div class="col__1-4">
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
            </div>
            <?php
          endwhile; 
        endif; 
        wp_reset_postdata();
        ?>
      </div>
    </div>
    <div class="hp-section__mobile ales__mobile">
      <div class="row  entry__circle-lrg slick-slider">
        <?php
        $ale_mobile_query = new WP_Query( array(
            'post_type'      => 'ales',
            'posts_per_page' => '7',
            'no_found_rows'  => true,
        ) );
        if( have_posts() ) : 
          while( $ale_mobile_query->have_posts() ) : 
            $ale_mobile_query->the_post();
            ?>
            <div class="col__1-3">
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