<?php get_template_part( 'template-parts/head' ); ?>
<?php 
if ( have_posts() ) : while ( have_posts() ) :  the_post();
  $ch_header_color         = dfw_get_field( 'ch_header_color' );
  $ch_tag_line             = dfw_get_field( 'ch_tag_line' );
  $ch_header_text_line_one = dfw_get_field( 'ch_header_text_line_one' );
  $ch_header_text_line_two = dfw_get_field( 'ch_header_text_line_two' );
  $ch_sub_tag_line         = dfw_get_field( 'ch_sub_tag_line' );
  $ch_header_image         = dfw_get_field( 'ch_header_image' );
  $ch_header_image_retina  = dfw_get_field( 'ch_header_image_retina' );
  $page_id                 = get_the_ID();
endwhile; endif; wp_reset_postdata();
?>
<style>
  .header__banner-image {
    background-image: url(<?php echo $ch_header_image['url']; ?>);
  }
  @media (-webkit-min-device-pixel-ratio: 1.5) { 
    .header__banner-image {
      background-image: url(<?php echo $ch_header_image_retina['url']; ?>);
    }
  }
</style>
<header class="header bg_lines" role="banner" style="background-color:<?php echo $ch_header_color; ?>">
	<div class="content__wrapper">
    <div class="header__logo">
      <div class="banner__left"></div>
      <?php get_template_part( 'template-parts/logo' ); ?>
      <div class="banner__right"></div>
    </div>
		<?php get_template_part( 'template-parts/menu', 'primary' ); ?>
    <div class="header__banner page-<?php echo $page_id; ?>">
      <div class="header__banner-text">
        <?php if( isset( $ch_tag_line ) ) : ?>
          <p class="banner-text__tagline tidesans__500">
            <?php echo $ch_tag_line; ?>
          </p>
        <?php endif;  if( isset( $ch_header_text_line_one ) ) : ?>
          <p class="banner-text__line-one tidesans__700">
            <?php echo $ch_header_text_line_one; ?>
          </p>
        <?php endif;  if( isset( $ch_header_text_line_two ) ) : ?>
          <p class="banner-text__line-two tidesans__700">
            <?php echo $ch_header_text_line_two; ?>
          </p>
        <?php endif;  if( isset( $ch_sub_tag_line ) ) : ?>
          <p class="banner-text__sub-tagline tidesans__500">
            <?php echo $ch_sub_tag_line; ?>
          </p>
        <?php endif; ?>
      </div>
      <?php if( isset( $ch_header_image ) ) : ?>
        <div class="header__banner-image"></div>
      <?php endif; ?>
    </div>
  </div>
</header>

<main id="main" class="main" role="main">