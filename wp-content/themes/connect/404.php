<?php get_header(); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<!-- start content container -->
<div class="row rsrc-content">

	<?php get_sidebar( 'left' ); ?>

	<div class="col-md-<?php connect_main_content_width(); ?> rsrc-main">
		<div class="rsrc-post-content">
			<div class="error-template text-center">
				<h1><?php esc_html_e( 'Oops!', 'connect' ); ?></h1>
				<h2><?php esc_html_e( '404 Not Found', 'connect' ); ?></h2>
				<p class="error-details">
					<?php esc_html_e( 'Sorry, an error has occured, Requested page not found!', 'connect' ); ?>
				</p>
				<div class="error-actions">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-info"><span class="fa fa-home"></span><?php esc_html_e( ' Take Me Home', 'connect' ); ?></a>    
				</div>
			</div>
		</div>
	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
