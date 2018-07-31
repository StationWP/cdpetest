<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'cdpe' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo cdpe_get_svg( array( 'icon' => 'bars' ) );
		echo cdpe_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'cdpe' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
  
  <div class="social-container">
    <ul class="social">
      <li>
        <a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.54 40.54"><defs></defs><g><path d="M20.27,0A20.27,20.27,0,1,0,40.54,20.27,20.26,20.26,0,0,0,20.27,0Zm4.64,20.27h-3V31H17.4V20.27H15.29v-3.8H17.4V14c0-1.69.76-4.48,4.47-4.48h3.3v3.72H22.8a.9.9,0,0,0-.93,1v2.2h3.38Z"/></g></svg>
        </a>
      </li>
      <li>
        <a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>">
  				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.54 40.54"><defs></defs><g><path d="M20.27,0A20.27,20.27,0,1,0,40.54,20.27,20.26,20.26,0,0,0,20.27,0Zm8.44,15.71v.59c0,6.33-4.47,13.6-12.66,13.6a12,12,0,0,1-6.84-2.2,4.84,4.84,0,0,0,1.09.09,8.6,8.6,0,0,0,5.49-2,4.4,4.4,0,0,1-4.14-3.29,3.1,3.1,0,0,0,.85.08,4.73,4.73,0,0,0,1.18-.17,4.84,4.84,0,0,1-3.55-4.73v-.08a4.19,4.19,0,0,0,2,.59,4.82,4.82,0,0,1-1.94-4,4.59,4.59,0,0,1,.59-2.45,12.38,12.38,0,0,0,9.21,5,4.54,4.54,0,0,1-.09-1.1,4.64,4.64,0,0,1,4.48-4.81,4.33,4.33,0,0,1,3.21,1.52,10,10,0,0,0,2.87-1.18,4.75,4.75,0,0,1-1.94,2.62A6.92,6.92,0,0,0,31.08,13,10.1,10.1,0,0,1,28.71,15.71Z"/></g></svg>
        </a>
      </li>
    </ul>
  </div>
</nav><!-- #site-navigation -->
