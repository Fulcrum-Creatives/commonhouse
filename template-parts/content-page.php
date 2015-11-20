<div class="content__wrapper inner">
  <article id="post-<?php the_ID(); ?>" <?php post_class('entry default page'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="entry__thumbnail col__1-2">
          <?php the_post_thumbnail();?>
        </div>
      <?php endif ?>
      <div class="entry__content col__1-2">
        <?php the_content(); ?>
      </div>
    </section>
  </article>
</div>