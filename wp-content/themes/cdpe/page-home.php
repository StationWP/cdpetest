<?php
//Template Name: Home Template

?>

<?php get_header(); ?>

<?php get_template_part( 'hero', 'area' ); ?>

<?php 

$posts = get_field('featured_projects');

if( $posts ): ?><?php $ftct = 1; ?>

  <section class="projects one-col alternating">
    <div class="l-container">

      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>

      <?php if($ftct == 1) { ?>

        <div class="odd project">
          <div class="image col-match">
            <img src="<?php the_field('tile_image'); ?>" />
          </div>
          <div class="text col-match">
            <div class="text-container">
              <div class="highlight-headline" style="text-align: left;">
                <h3><a href="<?php the_permalink(); ?>"><?php the_field('hero_headline'); ?></a></h3>
              </div>
              <div class="highlight-bottom">
                <div class="highlight-copy" style="text-align: left;">
                  <p><?php the_field('hero_sub_headline'); ?><?php the_field('excerpt'); ?></p>
                </div>
                <a class="cta" href="<?php the_permalink(); ?>"><?php if (get_field('cta_text_override')) { the_field('cta_text_override'); } else { ?>View project<?php } ?></a>
              </div>       
            </div>
          </div>
        </div>

      <?php } else { ?>

        <div class="even project">
          <div class="text col-match">
            <div class="text-container">
              <div class="highlight-headline">
                <h3><a href="<?php the_permalink(); ?>"><?php the_field('hero_headline'); ?></a></h3>
              </div>
              <div class="highlight-bottom">
                <div class="highlight-copy">
                  <p><?php the_field('hero_sub_headline'); ?><?php the_field('excerpt'); ?></p>
                </div>
                <a class="cta" href="<?php the_permalink(); ?>"><?php if (get_field('cta_text_override')) { the_field('cta_text_override'); } else { ?>View project<?php } ?></a>
              </div>       
            </div>
          </div>
          <div class="image col-match">
            <img src="<?php the_field('tile_image'); ?>" />
          </div>        
        </div>

      <?php } ?>

      <?php $ftct++; ?>

      <?php if ($ftct == 3) { $ftct = 1; } ?>

      <?php endforeach; ?>

    </div>
  </section>

<?php wp_reset_postdata(); ?>
  
<?php endif; ?>
  
<?php get_footer(); ?>