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
<div id="masthead2">

	<nav id="site-navigation2" class="main-navigation2" role="navigation" aria-label="<?php esc_attr_e( 'Sub Menu', 'cdpe' ); ?>">
		<button class="menu-toggle2" aria-controls="top-menu" aria-expanded="false">
			<?php
			_e( 'Funding Programs Menu ', 'cdpe' );
			echo cdpe_get_svg( array( 'icon' => 'bars' ) );
			echo cdpe_get_svg( array( 'icon' => 'close' ) );
			?>
		</button>

		<?php wp_nav_menu( array(
			'theme_location' => 'sub',
			'menu_id'        => 'sub-menu',
			'menu_class'        => 'group',
		) ); ?>

		
	</nav><!-- #site-navigation2 -->

</div><!-- #masthead2 -->
