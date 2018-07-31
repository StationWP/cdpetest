<?php
//Template Name: Contact Template

?>

<?php get_header(); ?>
<div class="contact-wrap">
  
  <section class="contact-header">
    <div class="l-container">
      <div class="title">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
  
  <section class="contact-intro">
    <div class="l-container">
      <h3><?php the_field('headline'); ?></h3>
      <div class="address">
        <?php the_field('contact_detail_section_1'); ?>
      </div>
      <div class="phone-email">
        <?php the_field('contact_detail_section_2'); ?>
      </div>
    </div>
  </section>
  
  <section class="contact-form">
    <div class="l-container">
      <?php the_field('form_headline'); ?>
      <?php gravity_form(1, false, false, false, '', true, 12); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>