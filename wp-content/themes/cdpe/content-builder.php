<section class="article-builder <?php if ( 'project' == get_post_type()) { ?>with-side-menu<?php } ?>" <?php if ( 'publication' == get_post_type()) { ?>style="margin-top: -20px;"<?php } ?>>
  <div class="l-container">

    <?php if ( 'project' == get_post_type()) { ?>

      <?php if( have_rows('article_section') ): ?>

        <div id="side-menu" style="width: 165px;">

          <h4>Project Contents</h4>

          <div id="side-menu-items" style="">

            <?php $cntct = 1; ?>

            <?php while ( have_rows('article_section') ) : the_row(); ?>

              <?php if((get_row_layout() == 'normal_copy') || (get_row_layout() == 'link_list') || (get_row_layout() == 'accordion_items')): ?>

                <?php if (get_sub_field('anchor_setting') == 'yes') { ?>

                  <a data-scroll="" id="section-header-<?php echo $cntct; ?>" href="#<?php the_sub_field('unique_anchor'); ?>" class="section-header Overview"><span><?php the_sub_field('anchor_title')?></span></a>

                  <?php $cntct++; ?>

                <?php } ?>

              <?php endif; ?>

            <?php endwhile; ?>

            <?php if (get_field('related_content_section_title')) { ?>

              <a data-scroll="" id="section-header-<?php echo $cntct; ?>" href="#related" class="section-header"><span><?php the_field('include_in_contents'); ?></span></a>

            <?php } ?>

          </div>
        </div>

      <?php endif; ?>

    <?php } ?>

    <div id="content-blocks">

      <?php if ( 'project' == get_post_type()) { ?><div id="side-menu-waypoint"></div><?php } ?>

      <?php $blckct = 1; ?>

      <?php if( have_rows('article_section') ): ?>

      <?php $wyptct = 1; ?>

        <?php while ( have_rows('article_section') ) : the_row(); ?>

          <?php if(get_row_layout() == 'normal_copy'): ?>

            <?php $anch = get_sub_field('anchor_setting'); ?>

            <div <?php if ($anch == 'yes') { ?>id="waypoint-<?php echo $wyptct; ?>"<?php } ?> class="content-block text block-waypoint <?php if (('publication' == get_post_type()) && ($blckct == 1)) { ?>highlight-bottom<?php } ?>">

              <div class="anchor-point <?php if (('publication' == get_post_type()) && ($blckct == 1)) { ?>highlight-copy<?php } ?>" <?php if ($anch == 'yes') { ?>id="<?php the_sub_field('unique_anchor'); ?><?php } ?>">

              <?php the_sub_field('section_copy') ?>

              </div><!-- .anchor-point -->

            </div>

            <?php if ($anch == 'yes') { ?>

              <script>
                (function($) {
                  $(document).ready(function() {

                    var waypoint<?php echo $wyptct; ?> = new Waypoint({
                      element: $('#waypoint-<?php echo $wyptct; ?>'),
                      handler: function(direction) {
                        if ($(window).width() > 768) {
                          $('.section-header').removeClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').toggleClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').next().show();
                        }
                      },
                      offset: 204
                    })
                  });
                
                })(jQuery);                    
              </script>

              <?php $wyptct++; ?>

            <?php } ?>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'highlighted_paragraph'): ?>

            <div class="content-block highlight-block text block-waypoint highlight-bottom">

              <div class="anchor-point highlight-copy">

              <?php the_sub_field('paragraph_copy') ?>

              </div><!-- .anchor-point -->

            </div>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'accordion_items'): ?>

            <?php $anch = get_sub_field('anchor_setting'); ?>

            <div <?php if ($anch == 'yes') { ?>id="waypoint-<?php echo $wyptct; ?>"<?php } ?> class="content-block toggle-info-block block-waypoint">

              <div class="anchor-point" <?php if ($anch == 'yes') { ?>id="<?php the_sub_field('unique_anchor'); ?><?php } ?>">

              <?php if (get_sub_field('headline')) { ?><h3><?php the_sub_field('headline'); ?></h3><?php } ?>

                <?php if( have_rows('items') ): ?>

                  <?php while ( have_rows('items') ) : the_row(); ?>

                  <div class="o-block-title toggle">
                    <?php if (get_sub_field('item_image')) : ?>
                      <div class="acc-img-wrap" style="background-image: url(<?php the_sub_field('item_image'); ?>);"></div>
                    <?php endif; ?>
                    <div class="details">
                      <b><?php the_sub_field('item_title'); ?></b><br>
                      <?php if (get_sub_field('item_subtitle')) { ?><?php the_sub_field('item_subtitle'); ?><br><?php } ?>
                      <?php if (get_sub_field('item_email')) { ?><a href="mailto:<?php the_sub_field('item_email'); ?>"><?php the_sub_field('item_email'); ?></a><?php } ?>
                    </div>
                  </div>
                  <div class="toggle-info-block__content">
                    <?php the_sub_field('item_accordion_copy'); ?>
                  </div>
                  <hr>

                  <?php endwhile; ?>

                <?php endif; ?>

              </div><!-- .anchor-point -->

            </div>

            <?php if ($anch == 'yes') { ?>

              <script>
                (function($) {
                  $(document).ready(function() {

                    var waypoint1 = new Waypoint({
                      element: $('#waypoint-<?php echo $wyptct; ?>'),
                      handler: function(direction) {
                        if ($(window).width() > 768) {
                          $('.section-header').removeClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').toggleClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').next().show();
                        }
                      },
                      offset: 204
                    })
                  });
                
                })(jQuery);                    
              </script>

              <?php $wyptct++; ?>

            <?php } ?>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'image'): ?>

            <div class="image-video <?php if (get_sub_field('image_width') == 'thirds') { ?>two-thirds<?php } else { ?>full-width<?php } ?> content-block">

              <?php 

              $image = get_sub_field('image');

              if( !empty($image) ): 

                // vars
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt']; ?>

              <img style="display: block;" src="<?php echo $url; ?>" />

                <?php if (get_sub_field('image_caption')) { ?><div class="caption" ><?php the_sub_field('image_caption'); ?></div><?php } ?>

              <?php endif; ?>

            </div>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'video'): ?>

            <div class="embed-container">
              <?php the_sub_field('video_url'); ?>

            </div>

            <?php if (get_sub_field('video_caption')) { ?><div class="caption" style="padding-top: 0; margin-top: -30px; margin-bottom: 40px; text-align: right; width: 100%; font-size: 14px;"><?php the_sub_field('video_caption'); ?></div><?php } ?>

            <style>
              .embed-container { 
                position: relative; 
                padding-bottom: 56.25%;
                overflow: hidden;
                max-width: 100%;
                height: auto;
                margin-bottom: 40px;
              } 

              .embed-container iframe,
              .embed-container object,
              .embed-container embed { 
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                margin-bottom: 
              }
            </style>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'quote_block'): ?>

            <blockquote class="blockquote content-block full-width">
              <div class="quote-container">
                <div class="quotation-mark">“</div>
                <p><?php the_sub_field('quote_copy'); ?></p>
                <?php if (get_sub_field('quote_attribution')) { ?><div class="attribution"><?php the_sub_field('quote_attribution'); ?></div><?php } ?>
              </div>
            </blockquote>

            <?php $blckct++; ?>

          <?php elseif (get_row_layout() == 'link_list'): ?>

            <?php $anch = get_sub_field('anchor_setting'); ?>

            <div <?php if ($anch == 'yes') { ?>id="waypoint-<?php echo $wyptct; ?>"<?php } ?> class="content-block text profiles block-waypoint">

              <div class="anchor-point" <?php if ($anch == 'yes') { ?>id="<?php the_sub_field('unique_anchor'); ?><?php } ?>">

              <?php the_sub_field('section_copy') ?>

              </div><!-- .anchor-point -->

            </div>

            <?php if ($anch == 'yes') { ?>

              <script>
                (function($) {
                  $(document).ready(function() {

                    var waypoint1 = new Waypoint({
                      element: $('#waypoint-<?php echo $wyptct; ?>'),
                      handler: function(direction) {
                        if ($(window).width() > 768) {
                          $('.section-header').removeClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').toggleClass('active');
                          $('#section-header-<?php echo $wyptct; ?>').next().show();
                        }
                      },
                      offset: 204
                    })
                  });
                
                })(jQuery);                    
              </script>

              <?php $wyptct++; ?>

            <?php } ?>

            <?php $blckct++; ?> 

          <?php endif; ?>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>
  <div id="copy-nav-waypoint"></div>
</section>