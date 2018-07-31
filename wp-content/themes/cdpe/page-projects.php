<?php
//Template Name: Projects Template

?>

<?php get_header(); ?>
<div class="projects-wrap list-wrap">
  
  <?php get_template_part( 'template-parts/page/media-landing', 'meta' ); ?>

  

  <?php 

      $args = array(
              'post_type' => 'project',
              'posts_per_page' => 10,
              'paged' => $paged 
            );

          $the_query = new WP_Query( $args );  

          if ( $the_query->have_posts() ) : ?><?php $projrep = 1; ?> 

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $max = $the_query->max_num_pages; $prevpage = $paged; $prevpage--; $nextpage=$paged; $nextpage++; $postslug = $post->post_name; ?>

            <?php if ($max == 1) { ?>
              <style>
              .two-col:last-child {
                border-bottom: 0 !important;
              }
              </style>
            <?php } ?>

            <section class="projects-list list <?php if ($max == 1) { ?>only-one-page<?php } ?>">

              <div class="l-container">

                <div>

                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php if ($projrep == 1) { ?><div class="two-col"><?php } ?>

                      <div class="project list-item">
                        <a href="<?php the_permalink(); ?>"><div style="width: 100%; padding-top: 60%; margin-bottom: 20px; background: url('<?php the_field('tile_image'); ?>'); background-size: cover; background-color: #f3f3f3; background-position: center;"></div></a>
                        <img style="display: none;" src="<?php the_field('tile_image'); ?>" />
                        <div class="highlight-headline">
                          <h3><a href="<?php the_permalink(); ?>"><?php the_field('hero_headline'); ?></a></h3>
                        </div>
                        <p>
                          <?php the_field('hero_sub_headline'); ?>            
                        </p>
                        <a class="content-link" href="<?php the_permalink(); ?>"><?php if (get_field('cta_text_override')) { the_field('cta_text_override'); } else { ?>View project<?php } ?></a>
                      </div>

                    <?php if (($projrep == 2) || ($the_query->current_post +1) == ($the_query->post_count) ) { ?></div><?php } ?>

                  <?php $projrep++; $projct++; if($projrep == 3) { $projrep = 1; } ?>

                  <?php endwhile; ?>

                </div>

                <?php wp_reset_postdata(); ?>

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $max = $the_query->max_num_pages; $prevpage = $paged; $prevpage--; $nextpage=$paged; $nextpage++; $postslug = $post->post_name; ?>

                <div class="pager <?php if($paged!=1) print 'show-prev'; ?> <?php if($paged==$max) print 'hide-next'; ?>">
                  <?php if($paged!=1) { ?><a href="/<?php echo $postslug; ?>/page/<?php echo $prevpage; ?>" class="prev"><span class="arrow"></span><span>Back</span></a><?php } ?>
                  <?php if ($max != 1) { ?><div class="page-count">Page <?php echo $paged; ?> of <?php echo $max; ?></div><?php } ?>
                  <?php if($paged!=$max) { ?><a class="next" href="/<?php echo $postslug; ?>/page/<?php echo $nextpage; ?>/"><span>More</span><span class="arrow"></span></a><?php } ?>
                </div>

              </div>

            </section>

          <?php endif; ?>
  

</div>
<?php get_footer(); ?>