<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

  <section class="full-width banner">
    <div class="banner-image" style="background-image: url('/wp-content/themes/cdpe/images/home-banner.png');"></div>
    <div class="banner-cta">
      <div id="banner-top" class="highlight-headline" style="background-image: url('/wp-content/themes/cdpe/images/home-banner.png');">
        <h2>Canada is experiencing a growing opioid crisis with devastating effects</h2>
      </div>
      <div id="banner-bottom" class="highlight-bottom">
        <div class="copy-block highlight-copy">
          <p>In response to the high incidence of overdose deaths caused by the contamination of street drugs, the CDPE is leading a multi-site street drug checking project in Toronto, Ontario.</p>
        </div>
        <a href="/">PROJECT OVERVIEW</a>
      </div>       
    </div>
  </section>

  <section class="projects one-col alternating">
    <div class="l-container">
      <div class="odd project">
        <div class="image col-match">
          <img src="/wp-content/themes/cdpe/images/blue-pills.png" />
        </div>
        <div class="text col-match">
          <div class="text-container">
            <div class="highlight-headline">
              <h3>Prescription drug use can increase the morbidity and mortality of people who use drugs</h2>
            </div>
            <div class="highlight-bottom">
              <div class="highlight-copy">
                <p>Supervised injection services (SIS) are a potential strategy that can reduce exposure to some of the adverse effects of injection drug use by providing individuals with resources to allow for safe injections while simultaneously providing access to supportive resources.</p>
              </div>
              <a href="/">PROJECT OVERVIEW</a>
            </div>       
          </div>
        </div>
      </div>
      <div class="even project">
        <div class="text col-match">
          <div class="text-container">
            <div class="highlight-headline">
              <h3>It’s time to reprioritize the indicators used to evaluate illicit drug policy</h2>
            </div>
            <div class="highlight-bottom">
              <div class="highlight-copy">
                <p>An international cross comparison of illegal drug policies to identify the various indicators that different countries utilize to assess their effectiveness in combatting the adverse effects of illegal drugs on the community.</p>
              </div>
              <a href="/">OUR PROPOSAL</a>
            </div>       
          </div>
        </div>
        <div class="image col-match">
          <img src="/wp-content/themes/cdpe/images/pillars.png" />
        </div>        
      </div>
    </div>
  </section>
  
  
<?php get_footer();
