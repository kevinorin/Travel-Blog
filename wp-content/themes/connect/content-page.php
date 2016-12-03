<?php
if ( function_exists( 'connect_breadcrumb' ) && get_theme_mod( 'breadcrumbs-check', 1 ) != 0 ) {
	connect_breadcrumb();
}
?> 
<!-- start content container -->
<div class="row rsrc-content">    
	<?php get_sidebar( 'left' ); ?>    
	<article class="col-md-<?php connect_main_content_width(); ?> rsrc-main">        
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>                          
				<div <?php post_class( 'rsrc-post-content' ); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="single-thumbnail featured-thumbnail">
							<?php the_post_thumbnail( 'connect-single' ); ?>
						</div>
					<?php endif; ?>
					<header>                              
						<h1 class="entry-title page-header">
							<?php the_title(); ?>
						</h1> 
						<time class="posted-on published" datetime="<?php the_time( 'Y-m-d' ); ?>"></time>                                                        
					</header>                            
					<div class="entry-content">                              
						<?php the_content(); ?>                            
					</div>                               
					<?php wp_link_pages(); ?>                                                                                     
					<?php comments_template(); ?>                         
				</div>        
			<?php endwhile; ?>        
		<?php else : ?>            
			<?php get_404_template(); ?>        
		<?php endif; ?>    
	</article>       
	<?php get_sidebar( 'right' ); ?>
</div>
<!-- end content container -->
