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
						<div class="home-thumbnail">
							<div class="single-thumbnail featured-thumbnail">
								<?php the_post_thumbnail( 'connect-single' ); ?>
							</div>
						</div>
					<?php endif; ?>
					<header>                              
						<div class="time-info" >
							<div class="thetime"><?php the_time( 'j' ); ?></div>
							<div class="thedate"><?php the_time( 'M' ); ?></div>
							<div class="comments-meta"><i class="fa fa-comment"></i><?php comments_popup_link( __( '0', 'connect' ), __( '1', 'connect' ), __( '%', 'connect' ), 'comments-link', __( 'Off', 'connect' ) ); ?></div> 
						</div>
						<h1 class="entry-title page-header">
							<?php the_title(); ?>
						</h1>                              
						<?php get_template_part( 'template-part', 'postmeta' ); ?>                            
					</header>                                                                                    
					<div class="entry-content">
						<?php the_content(); ?>
					</div>                          
					<?php wp_link_pages(); ?>
					<div class="cat-list">
						<?php the_category( ' ' ); ?>
					</div>  
					<?php get_template_part( 'template-part', 'posttags' ); ?>
					<?php if ( get_theme_mod( 'post-nav-check', 1 ) == 1 ) : ?>                            
						<div class="post-navigation row">
							<div class="post-previous col-xs-6"><?php previous_post_link( '%link', '<span class="meta-nav">' . __( 'Previous:', 'connect' ) . '</span> %title' ); ?></div>
							<div class="post-next col-xs-6"><?php next_post_link( '%link', '<span class="meta-nav">' . __( 'Next:', 'connect' ) . '</span> %title' ); ?></div>
						</div>                            
					<?php endif; ?>                            
					<?php if ( get_theme_mod( 'related-posts-check', 1 ) == 1 ) : ?>
						<?php get_template_part( 'template-part', 'related' ); ?>
					<?php endif; ?>
					<?php if ( get_theme_mod( 'author-check', 1 ) == 1 ) : ?>                               
						<?php get_template_part( 'template-part', 'postauthor' ); ?> 
					<?php endif; ?>                              
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
