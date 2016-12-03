<?php
/**
 * Kirki Advanced Customizer
 * This is a sample configuration file to demonstrate all fields & capabilities.
 * @package connect
 */

// Early exit if Kirki is not installed
if ( class_exists( 'Kirki' ) ) {
	
  /* Register Kirki config */
  Kirki::add_config( 'connect_settings', array(
    'capability'    => 'edit_theme_options',
    'option_type' => 'theme_mod',
  ) );

	/**
	 * Add sections
	 */
	Kirki::add_section( 'sidebar_section', array(
		'title'       => __( 'Sidebars', 'connect' ),
		'priority'    => 1,
		'description' => __( 'Sidebar layouts.', 'connect' ),
	) );

	Kirki::add_section( 'layout_section', array(
		'title'       => __( 'Main styling', 'connect' ),
		'priority'    => 2,
		'description' => __( 'Define theme layout', 'connect' ),
	) );

	Kirki::add_section( 'top_bar_section', array(
		'title'       => __( 'Social icons', 'connect' ),
		'priority'    => 3,
	) );
	
	Kirki::add_section( 'post_section', array(
		'title'       => __( 'Post settings', 'connect' ),
		'priority'    => 5,
		'description' => __( 'Single post settings', 'connect' ),
	) );
	
	Kirki::add_section( 'colors_section', array(
		'title'       => __( 'Colors and Typography', 'connect' ),
		'priority'    => 7,
	) );

  /**
	 * Add the configuration.
	 */
  Kirki::add_config( 'connect_settings', array(
    'capability'    => 'edit_theme_options',
    'option_type' => 'theme_mod',
  ) );
 
 
  /**
	 * Add fields
	 */
  Kirki::add_field( 'connect_settings', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'sidebar-check',
		'label'       => __( 'Sidebar position size', 'connect' ),
		'section'     => 'sidebar_section',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => array(
			'none' => __( 'None', 'connect' ),
      'left'  => __( 'Left', 'connect' ),
      'right'  => __( 'Right', 'connect' ),
		),
	) );
	
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'switch',
  	'settings'    => 'get-carousel',
  	'label'       => __( 'Carousel', 'connect' ),
  	'description' => __( 'Enable or disable carousel', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 0,
  	'priority'    => 10,
	) );
	
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'select',
		'settings'    => 'carousel-categories',
		'label'       => __( 'Carousel category', 'connect' ),
		'description' => __( 'Select category for carousel', 'connect' ),
		'section'     => 'layout_section',
		'default'     => '',
		'priority'    => 10,
		'choices'  => connect_get_cats(),
		'required'  => array(
        array(
            'setting'  => 'get-carousel',
            'operator' => '==',
            'value'    => 1,
        ),
    )
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'slider',
  	'settings'    => 'carousel-interval',
  	'label'       => __( 'Carousel Interval', 'connect' ),
  	'description' => __( 'The amount of time (ms) to delay between automatically cycling an item.', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 5000,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 2000,
        'max'  => 20000,
        'step' => 500
    ),
    'required'  => array(
        array(
            'setting'  => 'get-carousel',
            'operator' => '==',
            'value'    => 1,
        ),
    )
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'slider',
  	'settings'    => 'carousel-items',
  	'label'       => __( 'Carousel Items', 'connect' ),
  	'description' => __( 'The amount of posts in carousel.', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 8,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 4,
        'max'  => 30,
        'step' => 1
    ),
    'required'  => array(
        array(
            'setting'  => 'get-carousel',
            'operator' => '==',
            'value'    => 1,
        ),
    )
	) );
  Kirki::add_field( 'connect_settings', array(
		'type'        => 'slider',
  	'settings'    => 'carousel-move',
  	'label'       => __( 'Items Move', 'connect' ),
  	'description' => __( 'Number of carousel items that should move on animation.', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 4,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 6,
        'step' => 1
    ),
    'required'  => array(
        array(
            'setting'  => 'get-carousel',
            'operator' => '==',
            'value'    => 1,
        ),
    )
	) ); 
	
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'radio-buttonset',
  	'settings'    => 'carousel-everywhere',
  	'label'       => __( 'Carousel placing', 'connect' ),
  	'description' => __( 'Enable carousel everywhere or only on homepage', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 'home',
  	'priority'    => 10,
  	'choices'     => array(
			'home'        => __( 'Homepage', 'connect' ),
      'everywhere'  => __( 'Everywhere', 'connect' ),
		),
		'required'  => array(
        array(
            'setting'  => 'get-carousel',
            'operator' => '==',
            'value'    => 1,
        ),
    )
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'radio-buttonset',
  	'settings'    => 'get-trending',
  	'label'       => __( 'Trending Articles', 'connect' ),
  	'description' => __( 'Enable trending articles placed below main navigation', 'connect' ),
  	'section'     => 'layout_section',
  	'default'     => 'disable',
  	'priority'    => 10,
  	'choices'     => array(
      'disable'         => __( 'Disable', 'connect' ),
			'home'        => __( 'Homepage', 'connect' ),
      'everywhere'  => __( 'Everywhere', 'connect' ),
		),
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'select',
		'settings'    => 'trending-categories',
		'label'       => __( 'Trending category', 'connect' ),
		'description' => __( 'Select category for trending section', 'connect' ),
		'section'     => 'layout_section',
		'default'     => '',
		'priority'    => 10,
		'choices'  => connect_get_cats(),
		'required'  => array(
        array(
            'setting'  => 'get-trending',
            'operator' => '!=',
            'value'    => 'disable',
        ),
    )
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'switch',
  	'settings'    => 'related-posts-check',
  	'label'       => __( 'Related posts', 'connect' ),
  	'description' => __( 'Enable or disable related posts', 'connect' ),
  	'section'     => 'post_section',
  	'default'     => 1,
  	'priority'    => 10,
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'switch',
  	'settings'    => 'author-check',
  	'label'       => __( 'Author box', 'connect' ),
  	'description' => __( 'Enable or disable author box', 'connect' ),
  	'section'     => 'post_section',
  	'default'     => 1,
  	'priority'    => 10,
	) );
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'switch',
  	'settings'    => 'post-nav-check',
  	'label'       => __( 'Post navigation', 'connect' ),
  	'description' => __( 'Enable or disable navigation below post content', 'connect' ),
  	'section'     => 'post_section',
  	'default'     => 1,
  	'priority'    => 10,
	) );	
	Kirki::add_field( 'connect_settings', array(
		'type'        => 'switch',
  	'settings'    => 'breadcrumbs-check',
  	'label'       => __( 'Breadcrumbs', 'connect' ),
  	'description' => __( 'Enable or disable Breadcrumbs', 'connect' ),
  	'section'     => 'post_section',
  	'default'     => 1,
  	'priority'    => 10,
	) );
  Kirki::add_field( 'connect_settings', array(
		'type'        => 'toggle',
  	'settings'    => 'connect_socials',
  	'label'       => __( 'Social Icons', 'connect' ),
  	'description' => __( 'Enable or Disable the social icons', 'connect' ),
  	'section'     => 'top_bar_section',
  	'default'     => 0,
  	'priority'    => 10,
	) );   
  $s_social_links = array(
    'twp_social_facebook' 	=> __( 'Facebook', 'connect' ),
		'twp_social_twitter' 		=> __( 'Twitter', 'connect' ),
		'twp_social_google' 	=> __( 'Google-Plus' , 'connect' ),
		'twp_social_instagram' 	=> __( 'Instagram', 'connect' ),
		'twp_social_pin' 	=> __( 'Pinterest', 'connect' ),
		'twp_social_youtube' 		=> __( 'YouTube', 'connect' ),
		'twp_social_reddit' 	=> __( 'Reddit', 'connect' ),
  );

  foreach ( $s_social_links as $keys => $values ) {                
  Kirki::add_field( 'connect_settings', array(
		'type'        => 'text',
		'settings'    => $keys,
		'label'       => $values,
		'description' => sprintf( __( 'Insert your custom link to show the %s icon.', 'connect' ), $values ),
		'help'        => __( 'Leave blank to hide icon.', 'connect' ),
		'section'     => 'top_bar_section',
		'default'     => '',
		'priority'    => 10,
	) );
  }    
  Kirki::add_field( 'connect_settings', array(
    'type'        => 'color',
  	'settings'    => 'color_site_title',
  	'label'       => __( 'Site title color', 'connect' ),
  	'help'        => __( 'Site title text color, if not defined logo.', 'connect' ),
  	'section'     => 'colors_section',
  	'default'     => '#464646',
  	'priority'    => 10,
  	'output'      => array(
  		array(
  			'element'  => 'h2.site-title a, h1.site-title a',
  			'property' => 'color',
  			'units'    => ' !important',
  		),
  	),
  ) );  
	
}
	
function connect_get_cats() {
  /*GET LIST OF CATEGORIES*/
  $layercats = get_categories(); 
  $newList = array();
  $newList['0'] = __('All categories', 'connect');
  foreach($layercats as $category) {
      $newList[$category->term_id] = $category->cat_name;
  }
  return $newList; 
}

