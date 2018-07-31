<section class="list-header">
  <div class="l-container">
    <div class="title">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="intro-text">
      <?php if(get_field('page_description')) { ?><p>
        <?php the_field('page_description'); ?>
      </p><?php } ?>
    </div>
  </div>
</section>