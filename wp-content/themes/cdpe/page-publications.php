<?php
//Template Name: Publications Template

?>

<?php get_header(); ?>
<div class="publications-wrap list-wrap">
  
  <?php get_template_part( 'template-parts/page/media-landing', 'meta' ); ?>
  
  <?php 

  $args = array(
          'post_type' => 'publication',
          'posts_per_page' => 10,
          'paged' => $paged 
        );

      $the_query = new WP_Query( $args );  

      if ( $the_query->have_posts() ) : ?>

        <section class="publications-list list">
          <div class="l-container">

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="publication list-item">
                <div class="left">
                  <div class="highlight-headline">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_field('hero_headline'); ?></a></h3>
                  </div>
                  <p class="publication-info">
                    <?php if (get_field('status_text')) { the_field('status_text'); } ?> <?php $posts = get_field('associated_project'); if( $posts ): ?><?php foreach( $posts as $p): ?>as part of <a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a><?php endforeach; ?><?php endif; ?>
                  </p>
                  <p>
                    <?php the_field('excerpt'); ?>           
                  </p>
                  <a class="content-link" href="<?php the_permalink(); ?>"><?php if (get_field('cta_text_override')) { the_field('cta_text_override'); } else { ?>View publication<?php } ?></a>
                </div>
                <div class="image-container"><?php if (get_field('publication_cover_image')) { ?><a href="<?php the_permalink(); ?>"><img style="height: auto;" src="<?php the_field('publication_cover_image'); ?>" /></a><?php } ?></div>
              </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; $max = $the_query->max_num_pages; $prevpage = $paged; $prevpage--; $nextpage=$paged; $nextpage++; $postslug = $post->post_name; ?>

              <div class="pager <?php if($paged!=1) print 'show-prev'; ?> <?php if($paged==$max) print 'hide-next'; ?>">
                <?php if($paged!=1) { ?><a href="/<?php echo $postslug; ?>/page/<?php echo $prevpage; ?>" class="prev"><span class="arrow"></span><span>Back</span></a><?php } ?>
                <div class="page-count">Page <?php echo $paged; ?> of <?php echo $max; ?></div>
                <?php if($paged!=$max) { ?><a class="next" href="/<?php echo $postslug; ?>/page/<?php echo $nextpage; ?>/"><span>More</span><span class="arrow"></span></a><?php } ?>
              </div>


          </div>    
        </section>

      <?php endif; ?>

</div>

<?php get_footer(); ?>