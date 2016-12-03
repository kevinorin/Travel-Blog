<article>
	<div <?php post_class(); ?>> 
		<div class="home-thumbnail col-md-7">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">                         
				<?php if ( has_post_thumbnail() ) : ?>                               
					<div class="featured-thumbnail">
						<?php the_post_thumbnail( 'connect-home' ); ?>
					</div>                                                           
				<?php else : ?>                                      
					<div class="featured-thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/img/noprew.jpg" alt="<?php the_title_attribute(); ?>"></div>         									               
				<?php endif; ?>	
			</a>
			<div class="time-info">
				<div class="thetime"><?php the_time( 'j' ); ?></div>
				<div class="thedate"><?php the_time( 'M' ); ?></div>
				<div class="comments-meta"><i class="fa fa-comment"></i><?php comments_popup_link( __( '0', 'connect' ), __( '1', 'connect' ), __( '%', 'connect' ), 'comments-link', __( 'Off', 'connect' ) ); ?></div> 
			</div>
		</div>
		<div class="home-header col-md-5"> 
			<header>
				<h2 class="page-header">                                
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>                            
				</h2> 
				<?php get_template_part( 'template-part', 'postmeta' ); ?>
			</header>
			<div class="content-inner">                                                      
				<div class="entry-summary">
					<?php the_excerpt(); ?> 
				</div><!-- .entry-summary --> 
				<div class="cat-list">
					<?php the_category( ' ' ); ?>
				</div>                                                                                                                       
				<div class="clear"></div>
				<?php
				if ( has_post_format( 'video' ) ) {
					echo '<a href="' . get_post_format_link( 'video' ) . '"><i class="post-icon fa fa-play-circle-o"></i></a>';
				} elseif ( has_post_format( 'gallery' ) ) {
					echo '<a href="' . get_post_format_link( 'gallery' ) . '"><i class="post-icon fa fa-file-image-o"></i></a>';
				}
				?> 
			</div>                                                             
		</div>                   
	</div>
	<div class="clear"></div>
</article>
<?php if ( $wp_query->current_post == 0 && is_active_sidebar( 'connect-post-area' ) ) { ?>
	<div class="first-textarea">
		<?php dynamic_sidebar( 'connect-post-area' ); ?>
	</div> 
<?php } ?>
