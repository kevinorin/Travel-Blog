<?php get_header(); ?>

<?php get_template_part( 'template-part', 'head' ); ?>

<?php get_template_part( 'template-part', 'topnav' ); ?>

<?php
if ( function_exists( 'connect_breadcrumb' ) && get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	connect_breadcrumb();
}
?>

<!-- start content container -->
<div class="row rsrc-content">

	<?php get_sidebar( 'left' ); ?>

    <div class="col-md-<?php connect_main_content_width(); ?> rsrc-main">
		<?php
		// if this was a search we display a page header with the results count. If there were no results we display the search form.
		if ( is_search() ) :
			$total_results = $wp_query->found_posts;

			echo "<h2 class='search-head text-center'>" . sprintf( __( '%s Search Results for "%s"', 'connect' ), $total_results, get_search_query() ) . "</h2>";

			if ( $total_results == 0 ) :
				get_search_form( true );
			endif;

		endif;

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );


			endwhile;

			the_posts_pagination();

		else :

			get_404_template();

		endif;
		?>

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
