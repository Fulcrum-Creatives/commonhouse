<?php
  $ch_smokehouse_text = dfw_get_field( 'ch_smokehouse_text', true );
  $ch_smokehouse_link = dfw_get_field( 'ch_smokehouse_link', true );
?>
</main>
<footer class="footer" role="contentinfo">
  <?php if( !is_page( 'contact' ) ) : ?>
    <div class="footer__contact">
      <div class="contact__link lulocleanone__bold">
        <a href="<?php echo home_url(); ?>/contact"><?php _e('Contact Us', 'fcwp' ); ?></a>
      </div>
    </div>
  <?php endif; ?>
  <div class="content__wrapper">
    <?php get_template_part( 'template-parts/menu', 'footer' ); ?>
    <p class="tidesans__600"><a href="<?php echo $ch_smokehouse_link; ?>" rel="nofollow"><?php echo $ch_smokehouse_text; ?></a></p>
    <p class="copyright tidesans__400">&copy; <?php _e( 'Commonhouse Ales', 'fcwp'); ?> <?php echo date('Y'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>