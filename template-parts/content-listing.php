<article id="post-<?php the_ID(); ?>" <?php post_class('entry content__wrapper'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
    <div class="listings__image">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry__thumbnail">
          <a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark">
            <?php the_post_thumbnail();?>
          </a>
        </div>
      <?php endif ?>
    </div>
    <div class="entry__content">
      <?php the_excerpt(); ?>
    </div>
  </section>
</article>