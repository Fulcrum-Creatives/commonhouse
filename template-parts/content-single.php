<?php
$ch_ales_style            = dfw_get_field( 'ch_ales_style' );
$ch_ales_srm_color        = dfw_get_field( 'ch_ales_srm_color' );
$ch_ale_image             = dfw_get_field( 'ch_ale_image' );
$ch_ales_subtitle         = dfw_get_field( 'ch_ales_subtitle' );
$ch_people_nickname       = dfw_get_field( 'ch_people_nickname' );
$ch_event_type            = dfw_get_field( 'ch_event_type' );
$ch_event_date            = dfw_get_field( 'ch_event_date' );
$ch_event_end             = dfw_get_field( 'ch_event_end' );
$ch_events_location       = dfw_get_field( 'ch_events_location' );
$ch_ales_background_color = dfw_get_field( 'ch_ales_background_color', false, 'transparent' );
if( $ch_event_type == 'multi' ) :
  $dates = $ch_event_date . ' - ' . $ch_event_end;
else :
  $dates = $ch_event_date;
endif;
?>
<div class="content__wrapper inner">
  <article id="post-<?php the_ID(); ?>" <?php post_class('entry single'); ?> aria-labelledby="section-heading-<?php the_ID(); ?>" role="article">
      
      <div class="entry__content col__1-2">
      	<?php if( is_singular( 'events' ) || is_singular( 'people' ) ) : ?>
      		<?php dfw_entry_title( array( 'heading_tag' => 'h2', 'heading_class' => 'entry__heading tidesans__600 ', 'has_link' => false ) ); ?>
        <?php elseif( is_singular( 'ales' ) ) : ?>
	        <?php 
      		dfw_entry_title( array( 
      											'heading_tag' => 'h2', 
      											'heading_class' => 'entry__heading tidesans__600 ',
      											'heading_attr' => 'style="color: ' . $ch_ales_srm_color . '"',
      											'has_link' => false
      											 ) ); 
      		?>
      	<?php endif; ?>
        <h3 class="entry_subtitle tidesans__400">
          <?php 
          if( is_singular( 'ales' ) ) :
          	echo '<span style="color: ' . $ch_ales_srm_color . '">' . $ch_ales_style . '</span>'; 
        	elseif( is_singular( 'people' ) ) :
        		echo _e( 'A.K.A', 'fcwp' ) . ' ' . $ch_people_nickname;
        	elseif( is_singular( 'events' ) ) :
        		echo $dates . ' at ' . $ch_events_location;
        	endif;
          ?>
        </h3>
        <?php if( is_singular( 'ales' ) ) : ?>
          <h4 class="entry_subtitle tidesans__300">
            <?php echo '<span style="color: ' . $ch_ales_srm_color . '">' . $ch_ales_subtitle . '</span>'; ?>
          </h4>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>

      <div class="entry__image col__1-2">
        <?php if( is_singular( 'events' ) ) : ?>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="entry__thumbnail rect">
               <?php the_post_thumbnail();?>
             </div>
          <?php endif; ?>
       
        <?php elseif( is_singular( 'people' ) ) : ?>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="entry__thumbnail">
               <?php the_post_thumbnail();?>
            </div>
          <?php endif; ?>

        <?php elseif( is_singular( 'ales' ) ) : ?>
          <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail();?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </section>
  </article>
</div>
<div class="ales__bg" style="background-color: <?php echo $ch_ales_background_color; ?>"></div>