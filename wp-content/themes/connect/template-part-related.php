<!-- Start Related Posts -->
<div class="related-posts"><div class="related-posts-content"><div class="related-posts-title"><h3><?php esc_html_e( 'Related posts', 'connect' ) ?></h3></div>
		<div id="carousel-related" class="flexslider carousel-loading">
			<ul class="slides">
				<?php
				$tags = wp_get_post_tags( $post->ID );
				if ( $tags ) {
					$tag_ids	 = array();
					foreach ( $tags as $individual_tag )
						$tag_ids[]	 = $individual_tag->term_id;
					$args		 = array(
						'tag__in'				 => $tag_ids,
						'post__not_in'			 => array( $post->ID ),
						'showposts'				 => 6, // Number of related posts that will be shown.
						'ignore_sticky_posts'	 => 1,
					);
					$my_query	 = new wp_query( $args );
					if ( $my_query->have_posts() ) {
						while ( $my_query->have_posts() ) {
							$my_query->the_post();
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
						<?php } ?>
					</ul></div></div>
				<?php
			}
		}
	?>
	<!-- End Related Posts -->
	<?php wp_reset_postdata(); ?>
</ul>
</div>
<div class="clear"></div>
