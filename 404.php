<?php get_header(); ?>
<div class="content__wrapper inner">
  <article id="post-<?php the_ID(); ?>" <?php post_class('entry single'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
      <div class="entry__image col__1-2">
        <img src="<?php echo FCWP_URI; ?>/images/404-pint.png" />
      </div>
      <div class="entry__content col__1-2">
      <p>
        <?php echo _e( 'Rather tipsy, Lenny stumbled around the corner—into a plate glass door. When he came to, he saw his uncommon reflection and strange surroundings.', 'fcwp' ); ?>
      </p>
      <p>
        <?php echo _e( 'Want to go <a href="' . home_url() . '"><strong>home</strong></a>?', 'fcwp' ); ?>
      </p>
      </div>
    </section>
  </article>
</div>
<?php get_footer(); ?>