<?php if ( get_theme_mod( 'sidebar-check', 'right' ) == 'left' ) : ?>
	<aside id="sidebar-secondary" class="col-md-3" role="complementary">
		<?php dynamic_sidebar( 'connect-left-sidebar' ); ?>
	</aside>
<?php endif; ?>
