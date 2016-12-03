<?php //carousel section      ?>
<?php if ( get_theme_mod( 'carousel-categories', '' ) != '' && get_theme_mod( 'get-carousel', '0' ) != '0' && is_front_page() || get_theme_mod( 'carousel-categories', '' ) != '' && get_theme_mod( 'get-carousel', '0' ) != '0' && get_theme_mod( 'carousel-everywhere', 'home' ) == 'everywhere' ) : ?>
	<?php get_template_part( 'template-part', 'carousel' ); ?>
<?php endif; ?>
<?php
if ( is_front_page() || is_home() || is_404() ) {
	$heading = 'h1';
	$desc	 = 'h2';
} else {
	$heading = 'h2';
	$desc	 = 'h3';
}
?> 
<div class="row rsrc-top-menu" >
	<nav id="site-navigation" class="navbar navbar-default" role="navigation">     
		<div class="container">   
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
					<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'connect' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
					<div class="rsrc-header-img navbar-brand">
						<?php the_custom_logo(); ?>
					</div>
				<?php else : ?>
					<div class="rsrc-header-text navbar-brand">
						<<?php echo $heading ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></<?php echo $heading ?>>
					</div>
				<?php endif; ?>  
			</div>
			<?php if ( get_theme_mod( 'connect_socials', 0 ) == 1 ) : ?>
				<div class="top-section nav navbar-nav navbar-right">
					<?php connect_social_links(); ?>                
				</div>
			<?php endif; ?>  
			<?php
			wp_nav_menu( array(
				'theme_location'	 => 'main_menu',
				'depth'				 => 3,
				'container'			 => 'div',
				'container_class'	 => 'collapse navbar-collapse navbar-1-collapse',
				'menu_class'		 => 'nav navbar-nav',
				'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
				'walker'			 => new wp_bootstrap_navwalker(),
			) );
			?>
		</div>    
	</nav> 
</div>
</div>
<div class="container rsrc-container" role="main">
	<?php // trending section ?>
	<?php if ( get_theme_mod( 'trending-categories', '' ) != '' && get_theme_mod( 'get-trending', 'disable' ) == 'home' && is_front_page() || get_theme_mod( 'trending-categories', '' ) != '' && get_theme_mod( 'get-trending', 'disable' ) == 'everywhere' ) : ?>
		<?php get_template_part( 'template-part', 'trending' ); ?>
	<?php endif; ?>
