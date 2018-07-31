<?php
//Template Name: Single Project Template

?>

<?php get_header(); ?>
<div class="single-project-wrap">
  <div id="top-waypoint"></div>
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
        <div class="project-status">PROJECT STATUS: FUNDED</div>
      </div>       
    </div>
  </section>

  <section class="article-builder with-side-menu">
    <div class="l-container">
      <div id="side-menu">
        <h4>Project Contents</h4>
        <div id="side-menu-items" style="">
          <a data-scroll="" id="section-header-1" href="#Overview" class="section-header Overview"><span>Overview</span></a>
          <a data-scroll="" id="section-header-2" href="#Financial" class="section-header Financial"><span>Financial</span></a>
          <a data-scroll="" id="section-header-3" href="#Partners" class="section-header Partners"><span>Partners</span></a>
          <a data-scroll="" id="section-header-4" href="#Project-Contact" class="section-header Project-Contact"><span>Project Contact</span></a>                            
          <a data-scroll="" id="section-header-5" href="#More-On-This" class="section-header More-On-This"><span>More On This</span></a>                            
        </div>
      </div>
      <div id="content-blocks">
        <div id="side-menu-waypoint"></div>       
        <div id="waypoint-1" class="content-block text block-waypoint">
          <h3 id="Overview">Overview</h3>
          <p class="intro">
            In response to the high incidence of overdose deaths caused by the contamination of street drugs, the CDPE, with financial support of the Substance Use and Addictions Program of Health Canada and the St. Michael’s Hospital Foundation and in-kind support from project partners, is leading a multi-site street drug checking project in Toronto, Ontario.
          </p>
          <script>
            (function($) {
              $(document).ready(function() {
  
                var waypoint1 = new Waypoint({
                  element: $('#waypoint-1'),
                  handler: function(direction) {
                    if ($(window).width() > 768) {
                      $('.section-header').removeClass('active');
                      $('#section-header-1').toggleClass('active');
                      $('#section-header-1').next().show();
                    }
                  },
                  offset: 204
                })
              });
            
            })(jQuery);                    
          </script>
        </div>
        <div id="waypoint-2" class="content-block text block-waypoint">
          <p id="Financial">
            Drug checking services (DCS) provide people who use drugs with information on the composition and potency of their street drugs to allow for more educated choices about their drug use and increase their capacity to avoid toxic substances. Preliminary evidence has established that DCS can influence an individual’s overdose-related risk behaviours and enhance their capacity to mitigate these risks. Information revealed through testing can help to protect individuals by motivating them to exercise safer decisions through for example choosing not to consume substances found to contain highly-potent opioids or employing harm reduction strategies (e.g., not using alone, starting with a smaller dose).
          </p>
          <p>
            DCS launched by the CDPE will be provided at 3 partnering frontline harm reduction agencies – including Parkdale Queen West Community Health Centre, South Riverdale Community Health Centre, and The Works. Laboratory services to facilitate drug sample analysis will be provided by 3 partnering hospitals – including the Centre for Addiction and Mental Health, St. Michael’s Hospital, and SickKids. As a component of the Toronto Overdose Action Plan, Toronto Public Health will assist in the design, implementation, and evaluation of the project. Toronto Paramedic Services and the Chief Coroner of Ontario will share data to support the evaluation of DCS. Public Health Ontario, Drug Analysis Services, Street Health, and Toronto Harm Reduction Alliance will play an advisory role in the execution of this pilot study. 
          </p>
          <script>
            (function($) {
              $(document).ready(function() {
  
                var waypoint1 = new Waypoint({
                  element: $('#waypoint-2'),
                  handler: function(direction) {
                    if ($(window).width() > 768) {
                      $('.section-header').removeClass('active');
                      $('#section-header-2').toggleClass('active');
                      $('#section-header-2').next().show();
                    }
                  },
                  offset: 204
                })
              });
            
            })(jQuery);                    
          </script>
        </div>
        <div class="image-video full-width content-block">
          <img src="/wp-content/themes/cdpe/images/accident.png" />
          <div class="caption">An image or video caption can go here if desired</div>
        </div>
        <div class="content-block text">
          <p>
            DCS are also being launched in Ottawa and Vancouver under the management of the Sandy Hill Community Health Centre (Ottawa) and the British Columbia Centre on Substance Use respectively. All three sites will maintain ongoing collaborations to maximize the impact of study findings. 
          </p>
        </div>
        <blockquote class="blockquote content-block full-width">
          <div class="quote-container">
            <div class="quotation-mark">“</div>
            <p>Preliminary evidence has established that DCS can influence an individual’s overdose-related risk behaviours and enhance their capacity to mitigate these risks.</p>
            <div class="attribution">- Person X, Manager, Company ABC</div>
          </div>
        </blockquote>    
  
        <div id="waypoint-3" class="content-block text block-waypoint full-width">
          <h3 id="Partners">Partners</h3>
          <p>
            British Columbia Centre on Substance Use | Centre for Addiction and Mental Health | Hospital for Sick Children | <b>Office of the Chief Coroner of Ontario</b> | Ontario HIV & Substance Use Training Program | Public Health Ontario | Parkdale Queen West Community Health Centre | <b>Sandy Hill Community Health Centre</b> | South Riverdale Community Health Centre | St. Michael’s Hospital | Street Health | The Works | Toronto Harm Reduction Alliance | Toronto Paramedic Services | Toronto Public Health | Trip! Project
          </p>
          <script>
            (function($) {
              $(document).ready(function() {
  
                var waypoint1 = new Waypoint({
                  element: $('#waypoint-3'),
                  handler: function(direction) {
                    if ($(window).width() > 768) {
                      $('.section-header').removeClass('active');
                      $('#section-header-3').toggleClass('active');
                      $('#section-header-3').next().show();
                    }
                  },
                  offset: 204
                })
              });
            
            })(jQuery);                    
          </script>
        </div>
        <div id="waypoint-4" class="content-block text block-waypoint">
          <h3 id="Project-Contact">Project Contact</h3>
          <p>
            Karen McDonald<br>
            Operations Manager<br> 
            Centre on Drug Policy Evaluation<br>
            <a href="mailto:karen@cdpe.org">karen@cdpe.org</a>
          </p>
          <script>
            (function($) {
              $(document).ready(function() {
  
                var waypoint1 = new Waypoint({
                  element: $('#waypoint-4'),
                  handler: function(direction) {
                    if ($(window).width() > 768) {
                      $('.section-header').removeClass('active');
                      $('#section-header-4').toggleClass('active');
                      $('#section-header-4').next().show();
                    }
                  },
                  offset: 204
                })
              });
            
            })(jQuery);                    
          </script>
        </div>
      </div>
    </div>
    <div id="copy-nav-waypoint"></div>
  </section>
  
  <section id="waypoint-5" class="related-content">
    <div class="l-container block-waypoint" id="More-On-This">
      <div class="nav-margin">
        <h3 id="Related-Content">
          Related Content
        </h3>
        <h4>Publications</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
        </p>
        
        <div class="related-items three-col">
          <div class="related-item">
            <img src="/wp-content/themes/cdpe/images/publication-thumb.png" />
            <h5>High impact headline for your other featured pubs</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis</p>
            <a href="/">View Publication</a>
          </div>
          <div class="related-item">
            <img src="/wp-content/themes/cdpe/images/publication-thumb-2.png" />
            <h5>High impact headline for your other featured pubs</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis</p> 
            <a href="/">View Publication</a>
          </div>
          <div class="related-item">
            <img src="/wp-content/themes/cdpe/images/publication-thumb.png" />
            <h5>High impact headline for your other featured pubs</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis</p> 
            <a href="/">View Publication</a>
          </div>
        </div>
  
        <div class="related-links">
          <h4>Related Links</h4>
          <ul>
            <li>
              <a href="/">Related link title number one</a>
            </li>
            <li>
              <a href="/">Related link title number two</a>
            </li>
            <li>
              <a href="/">Related link title number three</a>
            </li>
          </ul>
        </div>  
      </div>
      <script>
        (function($) {
          $(document).ready(function() {
  
            var waypoint1 = new Waypoint({
              element: $('#waypoint-5'),
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
</div>
<?php get_footer(); ?>