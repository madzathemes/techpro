<?php

function techpro_customize_header($wp_customize){



  $wp_customize->add_section('layout_settings', array(
    'title'    	=> esc_html__('Layouts', 'techpro'),
    'panel'  => 'magazin_general'
  ));





	$wp_customize->add_section('techpro_header', array(
        'title'    	=> esc_html__('Header', 'techpro'),
        'priority' => 124,
    ));


	//	==================================================
    //  =============================
    //  = ==== Logo Options
    //  =============================
      $wp_customize->add_panel( 'panel_header', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Header', 'techpro'),
    'description'    => '',
	) );


    $wp_customize->add_section('techpro_logo', array(
        'title'    	=> esc_html__('Logo Image', 'techpro'),
        'priority' => 122,

    'panel'  => 'panel_header',
    ));

    $wp_customize->add_section('techpro_logo_settings', array(
        'title'    	=> esc_html__('Logo Settings', 'techpro'),
        'priority' => 123,

    'panel'  => 'panel_header',
    ));



    //  =============================
    //  = Logo             =
    //  =============================
    $wp_customize->add_setting('techpro_theme_options[header_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => esc_html__('Upload Logo', 'techpro'),
        'section'  => 'techpro_logo',
        'settings' => 'techpro_theme_options[header_logo]',
    )));

    //  = Logo Responsive            =
    $wp_customize->add_setting('techpro_theme_options[header_logox2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logox2', array(
        'label'    => esc_html__('Upload Responsive Logo (x2)', 'techpro'),
        'section'  => 'techpro_logo',
        'settings' => 'techpro_theme_options[header_logox2]',
    )));



    //  =============================
    //  = Logo Height fixed
    //  =============================
    $wp_customize->add_setting('techpro_theme_options[mt_logo_h_f]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h_f', array(
        'label'    	=> esc_html__('Logo height (px)', 'techpro'),
        'section'    => 'techpro_menu_fixed',
        'description'    => esc_html__('Default: 40', 'techpro'),
        'settings'   => 'techpro_theme_options[mt_logo_h_f]',
    ));

    //	==================================================
    //  =============================
    //  = ==== Header Options
    //  =============================




    $wp_customize->add_section('techpro_menu_mobile_', array(
        'title'    	=> esc_html__('Mobile Menu', 'techpro'),
        'priority' => 126,
        'panel'  => 'panel_header',
    ));

      $wp_customize->add_section('techpro_header_parallax', array(
        'title'    	=> esc_html__('Parallax', 'techpro'),
        'priority' => 127,
        'panel'  => 'panel_header',
    ));





    //  =============================
    //  = Menu fixed
    //  =============================
    $wp_customize->add_setting('techpro_theme_options[mt_menu_fix]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_menu_fix', array(
        'settings' => 'techpro_theme_options[mt_menu_fix]',
        'label'    	=> esc_html__('On/Off', 'techpro'),
        'priority'   => 2,
        'section'  => 'techpro_menu_fixed',
        'type'     => 'checkbox',
    ));




    //  =============================
    //  = Menu Small on/off  	    =
    //  =============================
     $wp_customize->add_setting('techpro_theme_options[mt_menu_small]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_small', array(
        'settings' => 'techpro_theme_options[mt_menu_small]',
        'label'    	=> esc_html__('Menu Icon', 'techpro'),
        'section' => 'techpro_menu_mobile',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));





   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_bg', array(
        'label'    => esc_html__('Mobile Menu Background', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_bg',
    )));

     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link', array(
        'label'    => esc_html__('Mobile Menu Link', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_link',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link_hover', array(
        'label'    => esc_html__('Mobile Menu Link Hover', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_link_hover',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_title', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_title', array(
        'label'    => esc_html__('Mobile Menu Title', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_title',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_text', array(
        'label'    => esc_html__('Mobile Menu Text', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_text',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon', array(
        'label'    => esc_html__('Mobile Menu Social Icon', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_icon',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon_hover', array(
        'label'    => esc_html__('Mobile Menu Social Icon Hover', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'mt_color_mobile_icon_hover',
    )));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('techpro_theme_options[mt_mobile_menu_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_mobile_menu_bg_img', array(
        'label'    => esc_html__('Mobile Menu BG Image', 'techpro'),
        'section'  => 'techpro_menu_mobile',
        'settings' => 'techpro_theme_options[mt_mobile_menu_bg_img]',
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('techpro_theme_options[mt_mobile_menu_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_style', array(
        'settings' => 'techpro_theme_options[mt_mobile_menu_bg_img_style]',
        'label'    	=> esc_html__('Mobile Menu BG Image Style', 'techpro'),
        'section' => 'techpro_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'Cover',
			'3' => 'Repeat',
			'4' => 'No-Repeat'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('techpro_theme_options[mt_mobile_menu_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_position', array(
        'settings' => 'techpro_theme_options[mt_mobile_menu_bg_img_position]',
        'label'    	=> esc_html__('Mobile Menu BG Image Position', 'techpro'),
        'section' => 'techpro_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
	        '0' => 'Default',
        	'1' => 'Center',
            '2' => 'Top Center',
			'3' => 'Bottom Center',
			'4' => 'Left Center',
			'5' => 'Left Top',
			'6' => 'Left Bottom',
			'7' => 'Right Center',
			'8' => 'Right Top',
			'9' => 'Right Bottom'

        ),
    ));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_fixed_menu_bg', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_fixed_menu_bg', array(
        'label'    => esc_html__('Background color', 'techpro'),
        'section'  => 'techpro_menu_fixed',
        'settings' => 'mt_color_fixed_menu_bg',
    )));




		//  =============================
		//  = Header Top                =
		//  =============================
		$wp_customize->add_section('techpro_header_top', array(
        'title'    	=> esc_html__('Header Top', 'techpro'),
        'priority' => 124,
				'panel'  => 'panel_header',
    ));




		// Latest Posts
		$wp_customize->add_setting('techpro_theme_options[url_latest]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('techpro_theme_options[url_latest]', array(
			'label' => esc_html__('Button: Latest Posts', 'techpro'),
			'section' => 'techpro_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'techpro_theme_options[url_latest]',
			'priority'   => 2,
		));

		// Popular Posts
		$wp_customize->add_setting('techpro_theme_options[url_popular]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('techpro_theme_options[url_popular]', array(
			'label' => esc_html__('Button: Popular Posts', 'techpro'),
			'section' => 'techpro_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'techpro_theme_options[url_popular]',
			'priority'   => 3,
		));

		// Hot Posts
		$wp_customize->add_setting('techpro_theme_options[url_hot]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('techpro_theme_options[url_hot]', array(
			'label' => esc_html__('Button: Hot Posts', 'techpro'),
			'section' => 'techpro_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'techpro_theme_options[url_hot]',
			'priority'   => 4,
		));

		// Trending Posts
		$wp_customize->add_setting('techpro_theme_options[url_trending]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('techpro_theme_options[url_trending]', array(
			'label' => esc_html__('Button: Trending Posts', 'techpro'),
			'section' => 'techpro_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'techpro_theme_options[url_trending]',
			'priority'   => 5,
		));





		$wp_customize->add_setting('techpro_theme_options[header_link_url]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
		));
		$wp_customize->add_control('techpro_theme_options[header_link_url]', array(
        'label'    	=> esc_html__('Header Button URL', 'techpro'),
				'description'        => 'Sample: http://www.yoururl.com',
        'section'    => 'techpro_header_top',
        'settings'   => 'techpro_theme_options[header_link_url]',
    ));

		$wp_customize->add_setting('techpro_header_link_name', array(
        'capability'     => 'edit_theme_options',
				'default'        => 'Download techpro',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_attr',
		));
		$wp_customize->add_control('techpro_header_link_name', array(
        'label'    	=> esc_html__('Header Button Name', 'techpro'),
        'section'    => 'techpro_header_top',
				'description'        => 'Default: Download techpro',
        'settings'   => 'techpro_header_link_name',
    ));



}

add_action('customize_register', 'techpro_customize_header');

Kirki::add_field( 'techpro_theme_options[boxed]', array(
  'type'        => 'radio-image',
  'settings'    => 'techpro_theme_options[boxed]',
  'label'       => esc_html__( 'Page Layouts', 'techpro' ),
  'section'     => 'general_style_settings',
  'default'     => '2',
  'option_type' => 'option',
  'priority'    => 10,
  'choices'     => array(
      '1'   => get_template_directory_uri() . '/inc/img/boxed.png',
      '2' => get_template_directory_uri() . '/inc/img/full.png',
     ),
));

Kirki::add_field( 'techpro_theme_options[mobile_logo]', array(
  'type'        => 'image',
  'settings'    => 'techpro_theme_options[mobile_logo]',
  'label'       => esc_html__( 'Mobile Logo', 'techpro' ),
  'section'     => 'techpro_logo',
  'default'     => '',
  'option_type' => 'option',
  'priority'    => 10,
) );

//  =============================
//  = Logo Widht
//  =============================

Kirki::add_field( 'techpro_theme_options[logo_width]', array(
'type'        => 'number',
'settings'    => 'techpro_theme_options[logo_width]',
'label'       => esc_attr__( 'Width', 'techpro' ),
'section'     => 'techpro_logo_settings',
'default'     => 176,
'option_type' => 'option',
'choices'     => array(
  'min'  => 20,
  'max'  => 500,
  'step' => 1,
),
) );

//  =============================
//  = Logo Height
//  =============================

Kirki::add_field( 'techpro_theme_options[logo_height]', array(
'type'        => 'number',
'settings'    => 'techpro_theme_options[logo_height]',
'label'       => esc_attr__( 'Height', 'techpro' ),
'section'     => 'techpro_logo_settings',
'default'     => 40,
'option_type' => 'option',
'choices'     => array(
  'min'  => 20,
  'max'  => 200,
  'step' => 1,
),
) );

//  =============================
//  = Logo margin Top
//  =============================


Kirki::add_field( 'techpro_theme_options[logo_top]', array(
'type'        => 'number',
'settings'    => 'techpro_theme_options[logo_top]',
'label'       => esc_attr__( 'Top Space', 'techpro' ),
'section'     => 'techpro_logo_settings',
'default'     => 18,
'option_type' => 'option',
'choices'     => array(
  'min'  => 0,
  'max'  => 120,
  'step' => 1,
),
) );

//  =============================
//  = Logo margin Bottom
//  =============================
Kirki::add_field( 'techpro_theme_options[logo_bottom]', array(
'type'        => 'number',
'settings'    => 'techpro_theme_options[logo_bottom]',
'label'       => esc_attr__( 'Top Space', 'techpro' ),
'section'     => 'techpro_logo_settings',
'default'     => 18,
'option_type' => 'option',
'choices'     => array(
  'min'  => 0,
  'max'  => 120,
  'step' => 1,
),
) );


   Kirki::add_field( 'techpro_theme_options[header_link_blank]', array(
      'type'        => 'switch',
      'settings'    => 'techpro_theme_options[header_link_blank]',
      'label'       => esc_html__( 'Header Button Open In New Tap', 'techpro' ),
      'section'     => 'techpro_header_top',
      'default'     => '2',
       'option_type' => 'option',
      'priority'    => 10,
      'choices'     => array(
        '1'  => esc_attr__( 'Enable', 'techpro' ),
        '2' => esc_attr__( 'Disable', 'techpro' ),
      ),
   ) );

   Kirki::add_field( 'techpro_theme_options[menu_small_on]', array(
     	'type'        => 'switch',
     	'settings'    => 'techpro_theme_options[menu_small_on]',
     	'label'       => esc_attr__( 'Small Menu For Desktop', 'techpro' ),
     	'section'     => 'techpro_header_top',
     	'default'     => '0',
      'option_type' => 'option',
     	'priority'    => 10,
     	'choices'     => array(
     		'1'  => esc_attr__( 'Enable', 'techpro' ),
     		'2' => esc_attr__( 'Disable', 'techpro' ),
     	),
   ) );



   Kirki::add_field( 'techpro_theme_options[menu_search]', array(
       'type'        => 'switch',
       'settings'    => 'techpro_theme_options[menu_search]',
       'label'       => esc_attr__( 'Search Button', 'techpro' ),
       'section'     => 'techpro_header_top',
       'default'     => '0',
       'option_type' => 'option',
       'priority'    => 10,
       'choices'     => array(
         '1'  => esc_attr__( 'Enable', 'techpro' ),
         '2' => esc_attr__( 'Disable', 'techpro' ),
       ),
   ) );

   Kirki::add_field( 'techpro_theme_options[menu_share]', array(
       'type'        => 'switch',
       'settings'    => 'techpro_theme_options[menu_share]',
       'label'       => esc_attr__( 'Fixed Share Buttons', 'techpro' ),
       'section'     => 'techpro_header_top',
       'default'     => '2',
       'option_type' => 'option',
       'priority'    => 10,
       'choices'     => array(
         '1'  => esc_attr__( 'Enable', 'techpro' ),
         '2' => esc_attr__( 'Disable', 'techpro' ),
       ),
   ) );

   Kirki::add_field( 'techpro_theme_options[menu_fixed]', array(
  	'type'        => 'select',
  	'settings'    => 'techpro_theme_options[menu_fixed]',
  	'label'       => esc_attr__( 'Fixed Header', 'techpro' ),
  	'section'     => 'techpro_header_top',
  	'default'     => 'mt-fixed-up',
    'option_type' => 'option',
  	'priority'    => 10,
  	'multiple'    => 1,
  	'choices'     => array(
  		'mt-fixed-up' => esc_attr__( 'Show When Scroll Up', 'techpro' ),
  		'mt-fixed-always' => esc_attr__( 'Show Always', 'techpro' ),
  		'mt-fixed-disabled' => esc_attr__( 'Disable', 'techpro' ),
  	),
    ));
?>
