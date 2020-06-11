<?php
function profisme_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    /*=========================================
	Banner Section Panel
	=========================================*/
	$wp_customize->add_section(
		'profisme_banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'profisme' ),
			'panel' => 'profisme_frontpage_sections',
			'priority' => 126,
		)
	);  
	/*=========================================
	Banner Settings Section
	=========================================*/
	// Banner Settings Section // 
	$wp_customize->add_setting( 
		'hide_show_banner' , 
			array(
			'default' => esc_html__( '1', 'profisme' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Profisme_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_banner', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'profisme' ),
			'section'     => 'profisme_banner_setting',
			'settings'    => 'hide_show_banner',
			'type'        => 'ios',
		) 
	));
	
$wp_customize->add_setting(
		'profisme_btn',
		array(
			'default'			=>'',
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'profisme_btn',
		array(
			'settings'		=> 'profisme_btn',
			'section'		=> 'profisme_banner_setting',
			'type'			=> 'text',
			'label'			=> esc_html__( 'Banner Button Text', 'profisme' )
		)
	);

	$wp_customize->add_setting(
		'profisme_btn_url',
		array(
			'default'			=>'',
			'sanitize_callback' => 'esc_url_raw'
		)
	);

	$wp_customize->add_control(
		'profisme_btn_url',
		array(
			'settings'		=> 'profisme_btn_url',
			'section'		=> 'profisme_banner_setting',
			'type'			=> 'url',
			'label'			=> esc_html__( 'Banner Button Url', 'profisme' )
		)
	);
	// banner Title // 
	for($i=1; $i<=1 ;$i++){
		// Service Page // 
		$wp_customize->add_setting(
	    	'banner_page'.$i,
	    	array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'profisme_sanitize_dropdown_pages',
			)
		);	
		
		$wp_customize->add_control( 
			'banner_page'.$i,
			array(
			    'label'   => esc_html__('Banner Page','profisme'),
			    'section' => 'profisme_banner_setting',
				'settings'   	 => 'banner_page'.$i,
				'type'           => 'dropdown-pages',
			)  
		);
	}

	/*=========================================
	About Section Panel
	=========================================*/
	$wp_customize->add_section(
		'profisme_about_setting', array(
			'title' => esc_html__( 'About Section', 'profisme' ),
			'panel' => 'profisme_frontpage_sections',
			'priority' => 127,
		)
	);
	/*=========================================
	About Settings Section
	=========================================*/
	// About Settings Section // 
	$wp_customize->add_setting( 
		'hide_show_about' , 
			array(
			'default' => esc_html__( '1', 'profisme' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Profisme_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_about', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'profisme' ),
			'section'     => 'profisme_about_setting',
			'settings'    => 'hide_show_about',
			'type'        => 'ios',
		) 
	));

	// About Page // 
	$wp_customize->add_setting(
    	'about_page',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'profisme_sanitize_dropdown_pages',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'about_page',
		array(
		    'label'   => esc_html__('About Page','profisme'),
		    'section' => 'profisme_about_setting',
			'settings'   	 => 'about_page',
			'type'           => 'dropdown-pages',
		)  
	);
	
    /*=========================================
	Service Section Panel
	=========================================*/
	$wp_customize->add_section(
		'profisme_service_setting', array(
			'title' => esc_html__( 'Service Section', 'profisme' ),
			'panel' => 'profisme_frontpage_sections',
			'priority' => 128,
		)
	);
	/*=========================================
	Service Settings Section
	=========================================*/
	// Service Settings Section // 
	$wp_customize->add_setting( 
		'hide_show_service' , 
			array(
			'default' => esc_html__( '1', 'profisme' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Profisme_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_service', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'profisme' ),
			'section'     => 'profisme_service_setting',
			'settings'    => 'hide_show_service',
			'type'        => 'ios',
		) 
	));

    for($i=1; $i<=6 ;$i++){
		// Service Page // 
		$wp_customize->add_setting(
	    	'service_page'.$i,
	    	array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'profisme_sanitize_dropdown_pages',
				'transport'         => $selective_refresh,
			)
		);	
		
		$wp_customize->add_control( 
			'service_page'.$i,
			array(
			    'label'   => esc_html__('Service Page','profisme'),
			    'section' => 'profisme_service_setting',
				'settings'   	 => 'service_page'.$i,
				'type'           => 'dropdown-pages',
			)  
		);
	
    }

    /*=========================================
	Blog Section Panel
	=========================================*/
	$wp_customize->add_section(
		'profisme_blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'profisme' ),
			'panel' => 'profisme_frontpage_sections',
			'priority' => apply_filters( 'profisme_section_priority', 128, 'profisme_blog' ),
		)
	);
	/*=========================================
	Blog Settings Section
	=========================================*/
	// Blog Settings Section // 
	$wp_customize->add_setting( 
		'hide_show_blog' , 
			array(
			'default' => esc_html__( '1', 'profisme' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Profisme_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_blog', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'profisme' ),
			'section'     => 'profisme_blog_setting',
			'settings'    => 'hide_show_blog',
			'type'        => 'ios', // light, ios, flat
		) 
	));

	/*=========================================
	Client Section Panel
	=========================================*/
	$wp_customize->add_section(
		'profisme_client_setting', array(
			'title' => esc_html__( 'Client Section', 'profisme' ),
			'panel' => 'profisme_frontpage_sections',
			'priority' => 129,
		)
	);
	/*=========================================
	Client Settings Section
	=========================================*/
	// Client Settings Section // 
	$wp_customize->add_setting( 
		'hide_show_client' , 
			array(
			'default' => esc_html__( '1', 'profisme' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'rest_sanitize_boolean',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Profisme_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_client', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'profisme' ),
			'section'     => 'profisme_client_setting',
			'settings'    => 'hide_show_client',
			'type'        => 'ios',
		) 
	));

	for($i=1; $i<=6 ;$i++){
		// Service Page // 
		$wp_customize->add_setting(
	    	'client_page'.$i,
	    	array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'profisme_sanitize_dropdown_pages',
				'transport'         => $selective_refresh,
			)
		);	
		
		$wp_customize->add_control( 
			'client_page'.$i,
			array(
			    'label'   => esc_html__('Client Page','profisme'),
			    'section' => 'profisme_client_setting',
				'settings'   	 => 'client_page'.$i,
				'type'           => 'dropdown-pages',
			)  
		);
	}

}
add_action( 'customize_register', 'profisme_blog_setting' );

// Blog selective refresh
function profisme_home_blog_section_partials( $wp_customize ){

	// hide show feature banner
	$wp_customize->selective_refresh->add_partial(
		'hide_show_banner', array(
			'selector' => '.theme-banner',
			'container_inclusive' => true,
			'render_callback' => 'banner_setting',
			'fallback_refresh' => true,
		)
	);
	// title
	$wp_customize->selective_refresh->add_partial( 'banner_title', array(
		'selector'            => '.banner-content h2',
		'settings'            => 'banner_title',
		'render_callback'  => 'profisme_home_section_banner_title_render_callback',
	
	) ); 
	// desc
	$wp_customize->selective_refresh->add_partial( 'banner_desc', array(
		'selector'            => '.banner-content p',
		'settings'            => 'banner_desc',
		'render_callback'  => 'profisme_home_section_banner_desc_render_callback',
	
	) ); 
	// buttton
	$wp_customize->selective_refresh->add_partial( 'banner_button1text', array(
		'selector'            => '.banner-content a.one',
		'settings'            => 'banner_button1text',
		'render_callback'  => 'profisme_home_section_banner_button1text_render_callback',
	
	) ); 
	// buttton
	$wp_customize->selective_refresh->add_partial( 'banner_button1url', array(
		'selector'            => '.banner-content a.one',
		'settings'            => 'banner_button1url',
		'render_callback'  => 'profisme_home_section_banner_button1url_render_callback',
	
	) ); 
	// buttton
	$wp_customize->selective_refresh->add_partial( 'banner_button2text', array(
		'selector'            => '.banner-content a.two',
		'settings'            => 'banner_button2text',
		'render_callback'  => 'profisme_home_section_banner_button2text_render_callback',
	
	) ); 
	// buttton
	$wp_customize->selective_refresh->add_partial( 'banner_button2url', array(
		'selector'            => '.banner-content a.two',
		'settings'            => 'banner_button2url',
		'render_callback'  => 'profisme_home_section_banner_button2url_render_callback',
	
	) );
	// hide show feature blog
	$wp_customize->selective_refresh->add_partial(
		'hide_show_blog', array(
			'selector' => '.news-section',
			'container_inclusive' => true,
			'render_callback' => 'blog_setting',
			'fallback_refresh' => true,
		)
	);
	// title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.news-section h2',
		'settings'            => 'blog_title',
		'render_callback'  => 'profisme_home_section_blog_title_render_callback',
	
	) );

	// hide show feature about
	$wp_customize->selective_refresh->add_partial(
		'hide_show_about', array(
			'selector' => '.services-section',
			'container_inclusive' => true,
			'render_callback' => 'about_setting',
			'fallback_refresh' => true,
		)
	);

	// buttton
	$wp_customize->selective_refresh->add_partial( 'about_page', array(
		'selector'            => '.services-section',
		'settings'            => 'about_page',
		'render_callback'  => 'profisme_home_section_about_page_render_callback',
	
	) ); 

	// buttton
	$wp_customize->selective_refresh->add_partial( 'about_btntxt', array(
		'selector'            => '.services-section .theme-btn.btn-style-one',
		'settings'            => 'about_btntxt',
		'render_callback'  => 'profisme_home_section_about_btntxt_render_callback',
	
	) ); 

	// buttton
	$wp_customize->selective_refresh->add_partial( 'about_btnurl', array(
		'selector'            => '.services-section .theme-btn.btn-style-one',
		'settings'            => 'about_btnurl',
		'render_callback'  => 'profisme_home_section_about_btnurl_render_callback',
	
	) ); 

	// hide show feature service
	$wp_customize->selective_refresh->add_partial(
		'hide_show_service', array(
			'selector' => '.services-section',
			'container_inclusive' => true,
			'render_callback' => 'service_setting',
			'fallback_refresh' => true,
		)
	);

	// title
	$wp_customize->selective_refresh->add_partial( 'service_title', array(
		'selector'            => '.services-section .sec-title h2',
		'settings'            => 'service_title',
		'render_callback'  => 'profisme_home_section_service_title_render_callback',
	
	) ); 
	// desc
	$wp_customize->selective_refresh->add_partial( 'service_desc', array(
		'selector'            => '.services-section .sec-title p',
		'settings'            => 'service_desc',
		'render_callback'  => 'profisme_home_section_service_desc_render_callback',
	
	) ); 

	for($i=1; $i<=6 ;$i++){
		// service_page
		$wp_customize->selective_refresh->add_partial( 'service_page'.$i, array(
			'selector'            => '.services-section .table-cell',
			'settings'            => 'service_page'.$i,
			'render_callback'  => 'profisme_home_section_service_page_render_callback',
		
		) ); 
		// icon
		$wp_customize->selective_refresh->add_partial( 'service_icon'.$i, array(
			'selector'            => '.services-section .icon-box',
			'settings'            => 'service_icon'.$i,
			'render_callback'  => 'profisme_home_section_service_icon_render_callback',
		
		) ); 
	}

	// hide show feature about
	$wp_customize->selective_refresh->add_partial(
		'hide_show_client', array(
			'selector' => '.clients-section',
			'container_inclusive' => true,
			'render_callback' => 'client_setting',
			'fallback_refresh' => true,
		)
	);
	for($i=1; $i<=6 ;$i++){
		// client_page
		$wp_customize->selective_refresh->add_partial( 'client_page'.$i, array(
			'selector'            => '.clients-section .slide-item',
			'settings'            => 'client_page'.$i,
			'render_callback'  => 'profisme_home_section_client_page_render_callback',
		
		) ); 
	}
}
add_action( 'customize_register', 'profisme_home_blog_section_partials' );

// title
function profisme_home_section_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}
// title
function profisme_home_section_banner_title_render_callback() {
	return get_theme_mod( 'banner_title' );
}
function profisme_home_section_banner_desc_render_callback() {
	return get_theme_mod( 'banner_desc' );
}
function profisme_home_section_banner_button1text_render_callback() {
	return get_theme_mod( 'banner_button1text' );
}
function profisme_home_section_banner_button1url_render_callback() {
	return get_theme_mod( 'banner_button1url' );
}
function profisme_home_section_banner_button2text_render_callback() {
	return get_theme_mod( 'banner_button2text' );
}
function profisme_home_section_banner_button2url_render_callback() {
	return get_theme_mod( 'banner_button2url' );
}
function profisme_home_section_about_btntxt_render_callback() {
	return get_theme_mod( 'about_btntxt' );
}
function profisme_home_section_about_btnurl_render_callback() {
	return get_theme_mod( 'about_btnurl' );
}
function profisme_home_section_about_page_render_callback() {
	return get_theme_mod( 'about_page' );
}
function profisme_home_section_service_title_render_callback() {
	return get_theme_mod( 'service_title' );
}
function profisme_home_section_service_desc_render_callback() {
	return get_theme_mod( 'service_desc' );
}
function profisme_home_section_service_page_render_callback() {
	return get_theme_mod( 'service_page' );
}
function profisme_home_section_service_icon_render_callback() {
	return get_theme_mod( 'service_icon' );
}
function profisme_home_section_client_page_render_callback() {
	return get_theme_mod( 'client_page' );
}