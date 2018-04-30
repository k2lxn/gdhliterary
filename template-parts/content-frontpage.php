<?php
/**
 * Template part for displaying custom front page content
 * 
 * @package brutal
 */

?>

<p class="lead">
	The luscious tragedy of this whole cosmically unlikely existence overwhelms me sometimes. The only solace is to think small, minute by minute, touch to touch. Novel distractions.
</p>

<h1>GD Hoffman</h1>
	
<nav id="site-navigation" class="main-navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'brutal' ); ?></button>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
	?>
</nav><!-- #site-navigation -->	
	
<!-- Twitter feed -->