<?php if (get_field('related_content_section_title')) { ?>

<section id="waypoint-<?php echo $wyptct; ?>" class="related-content">
  <div class="l-container block-waypoint" id="related">
    <div class="nav-margin">
      <h3 id="Related-Content">
        <?php the_field('related_content_section_title'); ?>
      </h3>

      <?php if( have_rows('related_content_blocks') ): ?>

        <?php while ( have_rows('related_content_blocks') ) : the_row(); ?>

          <?php if( get_row_layout() == 'general_copy' ): ?>

            <?php if (get_sub_field('block_title')) { ?><h4><?php the_sub_field('block_title'); ?></h4><?php } ?>

            <?php if (get_sub_field('block_copy')) { the_sub_field('block_copy'); } ?>

          <?php elseif( get_row_layout() == 'three_buckets' ): ?>

            <?php $imgset = get_sub_field('image_setting'); ?>

            <?php $posts = get_sub_field('block_related_content_buckets'); if( $posts ): ?>

            <div class="related-items three-col">

              <?php foreach( $posts as $post): ?><?php setup_postdata($post); ?>

                <div class="related-item">
                  <?php if (($imgset != 'none') && ('publication' == get_post_type())) { ?><img src="<?php the_field('publication_cover_image'); ?>" /><?php } else if (($imgset != 'none') && (get_field('tile_image'))) { ?><img src="<?php the_field('tile_image'); ?>" /><?php } ?>
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <p><?php the_field('excerpt'); ?><?php the_field('hero_sub_headline'); ?></p>
                  <a class="cta" href="<?php the_permalink(); ?>">View</a>
                </div>

              <?php endforeach; ?>

            </div>

            <?php wp_reset_postdata(); ?>

            <?php endif; ?>

          <?php elseif( get_row_layout() == 'link_list' ): ?>

            <div class="related-links">
              <?php if (get_sub_field('block_title')) { ?><h4><?php the_sub_field('block_title'); ?></h4><?php } ?>

              <?php if( have_rows('links') ): ?>

              <ul>

                <?php while ( have_rows('links') ) : the_row(); ?>

                <?php if (get_sub_field('link_type') == 'custom') { ?>

                <?php $link = get_sub_field('custom_link'); ?>

                <li>
                  <a target="<?php echo $link['target']; ?>" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                </li>

                <?php } else { ?>

                <?php $post_id = get_sub_field('page_link', false, false); ?>

                <li>
                  <a href="<?php echo get_the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a>
                </li>

                <?php } ?>


                <?php endwhile; ?>

              </ul>

              <?php endif; ?>

            </div>

          <?php endif; ?>

        <?php endwhile; ?>

      <?php endif; ?>
          
          

        
    </div>
    <script>
      (function($) {
        $(document).ready(function() {

          var waypoint<?php echo $wyptct; ?> = new Waypoint({
            element: $('#waypoint-<?php echo $wyptct; ?>'),
            handler: function(direction) {
              if ($(window).width() > 768) {
                $('.section-header').removeClass('active');
                $('#section-header-5').toggleClass('active');
                $('#section-header-5').next().show();
              }
            },
            offset: 204
          })
        });
      
      })(jQuery);                    
    </script>
  </div>
</section>

<?php } ?>