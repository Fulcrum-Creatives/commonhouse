<?php
  $ch_smokehouse_text    = dfw_get_field( 'ch_smokehouse_text', true );
  $ch_smokehouse_subtext = dfw_get_field( 'ch_smokehouse_subtext', true );
  $ch_smokehouse_link    = dfw_get_field( 'ch_smokehouse_link', true );
  $ch_facebook_url       = dfw_get_field( 'ch_facebook_url', true );
  $ch_twitter_url        = dfw_get_field( 'ch_twitter_url', true );
  $ch_instagram_url      = dfw_get_field( 'ch_instagram_url', true );
?>
</main>
<footer class="footer" role="contentinfo">
  <?php if( !is_page( 'contact' ) ) : ?>
    <div class="footer__contact">
      <div class="contact__link lulocleanone__bold">
        <a href="<?php echo home_url(); ?>/contact" class="link__hover--shadow-small"><?php _e('Contact Us', 'fcwp' ); ?></a>
      </div>
    </div>
  <?php endif; ?>
  <div class="content__wrapper">
    <?php get_template_part( 'template-parts/menu', 'footer' ); ?>
    <p class="tidesans__600 link__hover--shadow footer__text">
      <a href="<?php echo $ch_smokehouse_link; ?>" rel="nofollow">
        <img src="<?php echo FCWP_URI; ?>/images/smokehouselogo.png" class="smokehouse__logo" alt="Smokehouse Brewing Co.">
        <?php echo $ch_smokehouse_text; ?>
      </a>
    </p>
    <p class="tidesans__400 link__hover--shadow footer__subtext">
      <a href="<?php echo $ch_smokehouse_link; ?>" rel="nofollow">
        <?php echo $ch_smokehouse_subtext; ?></p>
      </a>
    <ul class="social-icons">
      <li>
        <a href="<?php echo $ch_facebook_url; ?>" class="link__hover--shadow" >
          <i class="fa fa-facebook-square"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo $ch_twitter_url; ?>" class="link__hover--shadow" >
          <i class="fa fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo $ch_instagram_url; ?>" class="link__hover--shadow" >
          <i class="fa fa-instagram"></i>
        </a>
      </li>
    </ul>
    <p class="copyright tidesans__400">&copy; <?php _e( 'Commonhouse Ales', 'fcwp'); ?> <?php echo date('Y'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>