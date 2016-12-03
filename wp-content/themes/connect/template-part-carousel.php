<div id="carousel-home" class="flexslider row carousel-loading" data-interval="<?php echo absint( get_theme_mod( 'carousel-interval', '5000' ) ); ?>" data-move="<?php echo absint( get_theme_mod( 'carousel-move', '4' ) ); ?>">										   
	<ul class="slides">										        									     
		<?php
		$get_featured_posts = new WP_Query( array(
			'posts_per_page' => absint( get_theme_mod( 'carousel-items', '8' ) ),
			'post_type'		 => 'post',
			'category__in'	 => absint( get_theme_mod( 'carousel-categories' ) ),
		) );
		while ( $get_featured_posts->have_posts() ) : $get_featured_posts->the_post();
			?>                    	     
			<li class="carousel-item">                    	        
				<div class="flex-img">                    	           
					<a href="<?php the_permalink(); ?>">                                         
						<?php if ( has_post_thumbnail() ) { ?>        												           
							<div class="featured-thumbnail">
								<?php the_post_thumbnail( 'connect-home' ); ?>
							</div>      											         
						<?php } else { ?>                                       
							<img src="<?php echo get_template_directory_uri(); ?>/img/noprew.jpg" alt="<?php the_title_attribute(); ?>">       									               
						<?php } ?>                            
					</a>                                                                
				</div>                               
				<div class="flex-caption text-center">		                     						         
					<div class="home-header">                      						                                                                                                     
						<header>
							<h2 class="page-header">                                
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
									<?php the_title(); ?>
								</a>                            
							</h2> 
						</header>                                                                                                                                                                                                                                                                                                                                                                                    
						<div class="carousel-meta">
							<span class="fa fa-calendar"></span><span class="published-meta car"><?php the_time( get_option( 'date_format' ) ); ?></span>
							<span class="fa fa-user"></span><span class="author-link car"><?php the_author_posts_link(); ?></span>
							<span class="fa fa-comment"></span><span class="comments-meta car"><?php comments_popup_link( __( '0', 'connect' ), __( '1', 'connect' ), __( '%', 'connect' ), 'comments-link', __( 'Off', 'connect' ) ); ?></span> 
						</div>
					</div>                                  
				</div>                            
			</li>  											     
		<?php
		endwhile;
		wp_reset_postdata();
		?>  										   
	</ul>									 
</div>
