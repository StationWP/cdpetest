<?php
//Template Name: News List Template

?>

<?php get_header(); ?>
<div class="news-wrap list-wrap">
  
  <?php get_template_part( 'template-parts/page/media-landing', 'meta' ); ?>



  <?php 

  $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'paged' => $paged 
        );

      $the_query = new WP_Query( $args );  

      if ( $the_query->have_posts() ) : ?><?php $pstct = 1; ?>

        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php if(($paged==1) && ($pstct == 1)) { ?>

            <section class="recent-article">
              <div class="l-container">
                <div class="text col-match">
                  <div class="text-container">
                    <div class="highlight-headline">
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="publication-details">
                      <?php if (get_field('category')) { ?>Category: <?php the_field('category'); ?><br><?php } ?>
                      Posted: <?php echo get_the_date( 'F j Y' ); ?><br>
                      <?php if (get_field('author')) { ?>Author: <?php the_field('author'); ?><br><?php } ?>
                    </div>
                    <div class="highlight-bottom">
                      <div class="highlight-copy">
                        <p>
                          <?php the_field('excerpt'); ?>
                        </p>
                      </div>
                      <a href="<?php the_permalink(); ?>">Continue Reading</a>   
                    </div>
                  </div>
                </div>
                <div class="image col-match">
                  <a href="<?php the_permalink(); ?>"><img src="<?php the_field('tile_image'); ?>" /></a>
                </div>
              </div>
            </section>

          <?php } else { ?>

          <?php if((($paged==1) && ($pstct == 2)) || (($paged>1) && ($pstct == 1))) { ?>

            <section class="news-list list">
              <div class="l-container">

              <?php } ?>

                <?php if(($paged==1) && ($pstct == 2)) { ?>

                <div class="three-col">

                <?php } ?>

                <?php if((($paged==1) && ($pstct == 5)) || (($paged>1) && ($pstct == 1))) { ?>

                <div class="one-col">

                <?php } ?>

                  <?php if(($paged==1) && (($pstct == 2) || ($pstct == 3) || ($pstct == 4))) { ?>

                  <div class="article list-item">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_field('tile_image'); ?>" /></a>
                    <div class="highlight-headline">
                      <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>       
                      </h3>
                    </div>
                    <div class="publication-details">
                      <?php if (get_field('category')) { ?>Category: <?php the_field('category'); ?><br><?php } ?>
                      Posted: <?php echo get_the_date( 'F j Y' ); ?><br>
                      <?php if (get_field('author')) { ?>Author: <?php the_field('author'); ?><br><?php } ?>
                    </div>
                    <p>
                      <?php the_field('excerpt'); ?>           
                    </p>
                    <a class="news-link" href="<?php the_permalink(); ?>">Continue Reading</a>
                  </div>

                  <?php } else { ?>

                    <div class="article list-item">
                      <div class="highlight-headline">
                        <h3>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>         
                        </h3>
                      </div>
                      <div class="publication-details">
                        <?php if (get_field('category')) { ?>Category: <?php the_field('category'); ?><br><?php } ?>
                        Posted: <?php echo get_the_date( 'F j Y' ); ?><br>
                        <?php if (get_field('author')) { ?>Author: <?php the_field('author'); ?><br><?php } ?>
                      </div>
                      <p>
                        <?php the_field('excerpt'); ?>            
                      </p>
                      <a class="news-link" href="<?php the_permalink(); ?>">Continue Reading</a>
                    </div>

                  <?php } ?>

                <?php if ((($paged==1) && (($pstct == 4) || ($pstct == 10))) || (($paged>1) && ($pstct == 10))) { ?>

                </div>

                <?php } ?>

                <?php if (($the_query->current_post +1) == ($the_query->post_count)) { ?>

                <?php wp_reset_postdata(); ?>

                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $max = $the_query->max_num_pages; $prevpage = $paged; $prevpage--; $nextpage=$paged; $nextpage++; $postslug = $post->post_name; ?>

                <div class="pager <?php if($paged!=1) print 'show-prev'; ?> <?php if($paged==$max) print 'hide-next'; ?>">
                  <?php if($paged!=1) { ?><a href="/<?php echo $postslug; ?>/page/<?php echo $prevpage; ?>" class="prev"><span class="arrow"></span><span>Back</span></a><?php } ?>
                  <div class="page-count">Page <?php echo $paged; ?> of <?php echo $max; ?></div>
                  <?php if($paged!=$max) { ?><a class="next" href="/<?php echo $postslug; ?>/page/<?php echo $nextpage; ?>/"><span>More</span><span class="arrow"></span></a><?php } ?>
                </div>

              </div>
            </section>

            <?php } ?>

          <?php } ?>

          <?php $pstct++; ?>

        <?php endwhile; ?>

        

      <?php endif; ?>

  
  
</div>
<?php get_footer(); ?>