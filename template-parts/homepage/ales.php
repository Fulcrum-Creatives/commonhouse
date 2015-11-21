<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  $ch_ales_section_header_full   = dfw_get_field( 'ch_ales_section_header_full' );
  $ch_ales_section_header_mobile = dfw_get_field( 'ch_ales_section_header_mobile' );
  $ch_ales_section_page_link     = dfw_get_field( 'ch_ales_section_page_link' );
endwhile; endif; wp_reset_postdata();
?>
<section class="hp_sections hp_ales bg_dots">
  <div class="content__wrapper">
    <header class="hp_sections__header header__full">
      <h2 class="lulocleanone__bold">
        <a href="<?php echo $ch_ales_section_page_link; ?>" class="link__hover--shadow">
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
      <div class="row entry__fp">
        <?php
        $ale_lrg_query = new WP_Query( array(
            'post_type'      => 'ales',
            'posts_per_page' => '3',
            'no_found_rows'  => true
        ) );
        if( have_posts() ) : 
          while( $ale_lrg_query->have_posts() ) : 
            $ale_lrg_query->the_post();
            $ch_ale_image       = dfw_get_field( 'ch_ale_image' );
            $ch_ale_image_hover = dfw_get_field( 'ch_ale_image_hover' );
            ?>
            <div class="col__1-3">
              <?php if( $ch_ale_image != '' ) : ?>
                <div class="entry__thumbnail entry__circle-lrg box__hover--shadow">
                  <a href="<?php esc_url( the_permalink() ); ?>" class="entry__thumbnail--hover" rel="bookmark">
                    <img src="<?php echo $ch_ale_image_hover['url']; ?>" class="hover__bottom" alt="<?php echo $ch_ale_image_hover['alt']; ?>" />
                    <img src="<?php echo $ch_ale_image['url']; ?>" class="hover__top" alt="<?php echo $ch_ale_image['alt']; ?>" />
                  </a>
                </div>
              <?php endif ?>
              <h3 class="entry__header entry__header--small lulocleanone__bold">
                <a href="<?php esc_url( the_permalink() ); ?>" class="link__hover--shadow" rel="bookmark">
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
      <div class="row entry__fp entry__small">
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
            $ch_ale_image       = dfw_get_field( 'ch_ale_image' );
            $ch_ale_image_hover = dfw_get_field( 'ch_ale_image_hover' );
            ?>
            <div class="col__1-4">
              <?php if( $ch_ale_image != '' ) : ?>
                <div class="entry__thumbnail entry__header--small entry__circle-sm box__hover--shadow">
                  <a href="<?php esc_url( the_permalink() ); ?>" class="entry__thumbnail--hover" rel="bookmark">
                    <img src="<?php echo $ch_ale_image_hover['url']; ?>" class="hover__bottom" alt="<?php echo $ch_ale_image_hover['alt']; ?>" />
                    <img src="<?php echo $ch_ale_image['url']; ?>" class="hover__top" alt="<?php echo $ch_ale_image['alt']; ?>" />
                  </a>
                </div>
              <?php endif ?>
              <h3 class="entry__header lulocleanone__bold">
                <a href="<?php esc_url( the_permalink() ); ?>" class="link__hover--shadow" rel="bookmark">
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
      <div class="row entry__fp slick-slider">
        <?php
        $ale_mobile_query = new WP_Query( array(
            'post_type'      => 'ales',
            'posts_per_page' => '7',
            'no_found_rows'  => true,
        ) );
        if( have_posts() ) : 
          while( $ale_mobile_query->have_posts() ) : 
            $ale_mobile_query->the_post();
            $ch_ale_image       = dfw_get_field( 'ch_ale_image' );
            $ch_ale_image_hover = dfw_get_field( 'ch_ale_image_hover' );
            ?>
            <div class="col__1-3">
              <?php if( $ch_ale_image != '' ) : ?>
                <div class="entry__thumbnail entry__header--small entry__circle-lrg box__hover--shadow">
                  <a href="<?php esc_url( the_permalink() ); ?>" class="entry__thumbnail--hover" rel="bookmark">
                    <img src="<?php echo $ch_ale_image_hover['url']; ?>" class="hover__bottom" alt="<?php echo $ch_ale_image_hover['alt']; ?>" />
                    <img src="<?php echo $ch_ale_image['url']; ?>" class="hover__top" alt="<?php echo $ch_ale_image['alt']; ?>" />
                  </a>
                </div>
              <?php endif ?>
              <h3 class="entry__header lulocleanone__bold">
                <a href="<?php esc_url( the_permalink() ); ?>" class="link__hover--shadow" rel="bookmark">
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