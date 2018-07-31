
<section class="full-width banner">
  <div class="banner-image" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
  <div class="banner-cta">

    <?php $link = get_field('hero_cta_link'); ?>

    <div <?php if ( !is_page_template( 'page-about.php' ) ) { ?>id="banner-top"<?php } else { ?>id="banner-headline"<?php } ?> class="highlight-headline">
      <h2><?php if ( is_page_template( 'page-home.php' ) && ($link) ) { ?><a href="<?php echo $link['url']; ?>"><?php } ?><?php the_field('hero_headline'); ?><?php if ( is_page_template( 'page-home.php' ) && ($link) ) { ?></a><?php } ?></h2>
    </div>
    <div id="banner-bottom" class="highlight-bottom">
      <div class="copy-block highlight-copy">
        <?php if (get_field('hero_sub_headline')) { ?><p><?php the_field('hero_sub_headline'); ?></p><?php } ?>
      </div>
      
      <?php if (get_field('status_text')) { ?><div class="project-status"><?php the_field('status_text'); ?></div><?php } ?>

      <?php  if( $link ): ?>
        
        <a class="cta" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

      <?php endif; ?>

    </div>       
  </div>
</section>