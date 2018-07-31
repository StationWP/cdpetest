<?php
//Template Name: About Template

?>

<?php get_header(); ?>
<div class="single-about-wrap">
  <section class="full-width banner short" style="background-image: url('<?php the_field('hero_background_image'); ?>');">
    <div class="banner-cta">
      <div id="banner-headline" class="highlight-headline">
        <h2><?php the_field('hero_headline');?></h2>
      </div>
    </div>
  </section>

  <?php get_template_part( 'content', 'builder' ); ?>

</div>
<?php get_footer(); ?>