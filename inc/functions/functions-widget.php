<?php

function techpro_sidebar_widget_init() {

$mt_columns = get_option("techpro_theme_options");

/* --------------------------------------------------------------------------------------- Page Widget Area 1 */

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'techpro'),
		'id' => 'sidebar-widget-area-1',
		'description' => esc_html__( 'The page sidebar widget area 1', 'techpro' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Blog Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Blog/Category Sidebar', 'techpro'),
		'id' => 'sidebar-blog-widget-area',
		'description' => esc_html__( 'The blog sidebar widget area' , 'techpro'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );



/* --------------------------------------------------------------------------------------- Single Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Post Sidebar', 'techpro'),
		'id' => 'sidebar-single-widget-area',
		'description' => esc_html__( 'The single page sidebar widget area' , 'techpro'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

		register_sidebar( array(
			'name' => esc_html__( 'Post Bottom (Before Comments)', 'techpro'),
			'id' => 'sidebar-single-bottom-widget-area-before',
			'description' => esc_html__( 'The post bottom widget area' , 'techpro'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );

	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

			register_sidebar( array(
				'name' => esc_html__( 'Post Bottom (After Comments)', 'techpro'),
				'id' => 'sidebar-single-bottom-widget-area-after',
				'description' => esc_html__( 'The post bottom widget area' , 'techpro'),
				'before_widget' => '<div class="widget">',
				'after_widget' => '<div class="clear"></div></div>',
						'before_title' => '<h2 class="heading"><span>',
						'after_title' => '</span></h4>',
			) );


/* --------------------------------------------------------------------------------------- Search Widget Area */


	register_sidebar( array(
		'name' => esc_html__( 'Search Page Sidebar', 'techpro'),
		'id' => 'sidebar-search-widget-area',
		'description' => esc_html__( 'The search page sidebar widget area' , 'techpro'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );

	/* --------------------------------------------------------------------------------------- Author widgets */

	register_sidebar( array(
	'name' => esc_html__( 'Author Page Sidebar', 'techpro'),
	'id' => 'sidebar-author-widget-area',
	'description' => esc_html__( 'The Author page sidebar widget area' , 'techpro'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '<div class="clear"></div></div>',
			'before_title' => '<h2 class="heading"><span>',
			'after_title' => '</span></h4>',
	) );

	/* --------------------------------------------------------------------------------------- Footer Hot Post widgets */

	register_sidebar( array(
	'name' => esc_html__( 'Footer Hot Post Widget', 'techpro'),
	'id' => 'sidebar-footer-hotposts-widget-area',
	'description' => esc_html__( 'The footer host post widget area' , 'techpro'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '<div class="clear"></div></div>',
			'before_title' => '<h2 class="heading"><span>',
			'after_title' => '</span></h4>',
	) );


	/* --------------------------------------------------------------------------------------- Mobile Menu Widgets */

		register_sidebar( array(
			'name' => esc_html__( 'Mobile Menu Widgets', 'techpro'),
			'id' => 'mobile-menu-widget-area',
			'description' => esc_html__( 'The Mobile Menu Widget area' , 'techpro'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );




}

add_action( 'widgets_init', 'techpro_sidebar_widget_init' );
?>
