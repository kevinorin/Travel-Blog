<div id="trending-home" class="flexslider row carousel-loading">										   
	<ul class="slides">										        									     
		<?php
		$get_featured_posts = new WP_Query( array(
			'posts_per_page' => 8,
			'post_type'		 => 'post',
			'category__in'	 => absint( get_theme_mod( 'trending-categories' ) ),
		) );
		while ( $get_featured_posts->have_posts() ):$get_featured_posts->the_post();
			?>                    	     
			<li class="trending-item">                    	        
				<div class="trending-img col-xs-4">                    	           
					<a href="<?php the_permalink(); ?>">                                         
						<?php if ( has_post_thumbnail() ) { ?>        												           
							<div class="featured-thumbnail">
								<?php the_post_thumbnail( array( 80, 80 ) ); ?>
							</div>      											         
						<?php } else { ?>                                       
							<img src="<?php echo get_template_directory_uri(); ?>/img/noprew.jpg" alt="<?php the_title_attribute(); ?>">       									               
						<?php } ?>                            
					</a>                                                                
				</div>                               
				<div class="trending-caption col-xs-8">	
					<h2 class="trending-title">                                
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>                            
					</h2>                                 
				</div>                            
			</li>  											     
		<?php
		endwhile;
		wp_reset_postdata();
		?>  										   
	</ul>									 
</div>
