<?php
$ch_logo        = dfw_get_field( 'ch_logo', true );
$ch_logo_retina = dfw_get_field( 'ch_logo_retina', true );
$ch_logo_svg    = dfw_get_field( 'ch_logo_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $logo_paths = array(
        'image'  => $ch_logo['url'],
        'retina' => $ch_logo_retina['url'],
        'svg'    => $ch_logo_svg['url']
      ); 
      dfw_svg_fallback( $logo_paths, $ch_logo['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>