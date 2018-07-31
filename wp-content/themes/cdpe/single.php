<?php get_header(); ?>
<div class="single-publication-wrap news">

  <section class="publication-intro">
    <div class="l-container">
      <div class="text col-match">
        <div class="text-container">
          <div class="publication-details">
            <?php if (get_field('category')) { ?>Category: <?php the_field('category'); ?><br><?php } ?>
            Posted: <?php echo get_the_date( 'F j Y' ); ?><br>
            <?php if (get_field('author')) { ?>Author: <?php the_field('author'); ?><br><?php } ?>
          </div>
          <div class="highlight-headline">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="publication-links">
            <a class="twitter" href="/">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 18.69"><defs></defs><title>twitter-nobg</title><g id="layer1"><path id="path3611" d="M7.23,18.69A13.34,13.34,0,0,0,20.66,5.27c0-.21,0-.41,0-.61A9.61,9.61,0,0,0,23,2.21,9.56,9.56,0,0,1,20.29,3,4.82,4.82,0,0,0,22.37.35a9.56,9.56,0,0,1-3,1.14,4.72,4.72,0,0,0-8,4.3A13.37,13.37,0,0,1,1.6.86,4.78,4.78,0,0,0,1,3.24a4.7,4.7,0,0,0,2.1,3.92A4.6,4.6,0,0,1,.92,6.57v.06a4.72,4.72,0,0,0,3.79,4.63,4.64,4.64,0,0,1-1.24.17,4.33,4.33,0,0,1-.89-.09A4.72,4.72,0,0,0,7,14.62a9.51,9.51,0,0,1-5.86,2A8.47,8.47,0,0,1,0,16.57a13.35,13.35,0,0,0,7.23,2.12"/></g></svg>
              <span>Share on Twitter</span>
            </a>
            <a class="facebook" href="/">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 25.91"><defs></defs><title>fb-nobg</title><path id="f" d="M8.73,25.91V14.09h4l.59-4.6H8.73V6.54C8.73,5.21,9.1,4.3,11,4.3h2.44V.18A34.72,34.72,0,0,0,9.9,0C6.38,0,4,2.15,4,6.09v3.4H0v4.6H4V25.91Z"/></svg>              
              <span>Share on Facebook</span>
            </a>
            <?php if (get_field('pdf_file')) { ?><a download class="pdf" href="<?php the_field('pdf_file'); ?>">
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.87 22.88"><defs></defs><title>doc-icon</title><path d="M17.69.38H7.35A.68.68,0,0,0,7,.46l0,0a1.09,1.09,0,0,0-.17.13L.61,6.75a1.09,1.09,0,0,0-.13.17l0,0a.73.73,0,0,0-.07.19.86.86,0,0,0,0,.16V21.71a.79.79,0,0,0,.79.8H17.69a.8.8,0,0,0,.8-.8V1.17A.79.79,0,0,0,17.69.38ZM3.11,6.52,6.56,3.09V6.52ZM16.9,2V20.91H2V8.12H7.35a.8.8,0,0,0,.8-.8V2Z"/></svg>
              <span>Download file (pdf)</span>
            </a><?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'content', 'builder' ); ?>

  <?php get_template_part ('related', 'builder'); ?>
   
</div>
<?php get_footer(); ?>
