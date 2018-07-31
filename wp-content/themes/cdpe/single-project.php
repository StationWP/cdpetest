<?php get_header(); ?>
<div class="single-project-wrap">
  <div id="top-waypoint"></div>

  <?php get_template_part( 'hero', 'area' ); ?>

  <?php get_template_part( 'content', 'builder' ); ?>

  <?php get_template_part ('related', 'builder'); ?>
  
</div>
<?php get_footer(); ?>