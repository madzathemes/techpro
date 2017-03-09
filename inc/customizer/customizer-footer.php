<?php

function techpro_customize_footer($wp_customize){

	class techpro_Customize_Textarea_Control extends WP_Customize_Control {

    public $type = 'textarea';

    public function render_content() {
	        ?>
	        <label>
	        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>
	        <?php
	    }
	}

		$wp_customize->add_panel( 'panel_footer', array(
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'    	=> esc_html__('Footer', 'techpro'),
			'priority' => 301,
		));


		//  =============================
    //  = ==== Footer
    //  =============================
    $wp_customize->add_section('techpro_footer_settings', array(
        'title'    	=> esc_html__('Settings', 'techpro'),
        'priority' => 125,
        'panel'  => 'panel_footer',
    ));



		$wp_customize->add_section('techpro_icons', array(
				'title'    => esc_html__('Social Icons', 'techpro'),
				'priority' => 128,
				'panel'  => 'magazin_general',
		));


		// ===
		// FOOTER BOTTOM SETTINGS
		$wp_customize->add_section('techpro_footer_bottom', array(
				'title'    	=> esc_html__('Footer', 'techpro'),
				'priority' => 301,
		));

		Kirki::add_field( 'mt_footer_hot_post', array(
      	'type'        => 'switch',
      	'settings'    => 'mt_footer_hot_post',
      	'label'       => esc_attr__( 'Footer Hot Post Widget', 'techpro' ),
				'description'       => esc_attr__( 'To customize footer Hot Post area you need go to Appearance/Widgets/Footer Hot Post Widget. And insert inside this widget area "mt Trending Posts" widget', 'techpro' ),
      	'section'     => 'techpro_footer_bottom',
      	'default'     => 'on',
      	'priority'    => 10,
      	'choices'     => array(
          'on'  => esc_attr__( 'ON', 'techpro' ),
       		'off' => esc_attr__( 'OFF', 'techpro' ),
      	),
    ) );

		Kirki::add_field( 'mt_footer_ad', array(
      	'type'        => 'switch',
      	'settings'    => 'mt_footer_ad',
      	'label'       => esc_attr__( 'Footer Ad', 'techpro' ),
      	'section'     => 'techpro_footer_bottom',
      	'default'     => 'on',
      	'priority'    => 10,
      	'choices'     => array(
          'on'  => esc_attr__( 'ON', 'techpro' ),
       		'off' => esc_attr__( 'OFF', 'techpro' ),
      	),
    ) );

		Kirki::add_field( 'mt_footer_subscribe', array(
      	'type'        => 'switch',
      	'settings'    => 'mt_footer_subscribe',
      	'label'       => esc_attr__( 'Footer Subscribe', 'techpro' ),
				'description'       => esc_attr__( 'To activate this subscription form, You only need register your domain on www.specificfeeds.com', 'techpro' ),
      	'section'     => 'techpro_footer_bottom',
      	'default'     => 'on',
      	'priority'    => 10,
      	'choices'     => array(
          'on'  => esc_attr__( 'ON', 'techpro' ),
       		'off' => esc_attr__( 'OFF', 'techpro' ),
      	),
    ) );



		// FOOTER PAGE SORCE
		$wp_customize->add_setting('techpro_theme_options[footer_page]', array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
        'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('footer_page', array(
				'label'      => esc_html__('Footer Page', 'techpro'),
				'section'    => 'techpro_footer_bottom',
				'type'    => 'dropdown-pages',
				'settings'   => 'techpro_theme_options[footer_page]',
		));

    //  FOOTER BOOTOM TOP
    $wp_customize->add_setting('techpro_theme_options[footer_top]', array(
    		'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
		$wp_customize->add_control('mt_footer_top', array(
        'settings' => 'techpro_theme_options[footer_top]',
        'label'    	=> esc_html__('Display Logo/About Us/Follow Us Area', 'techpro'),
        'section'  => 'techpro_footer_bottom',
        'type'     => 'checkbox',
    ));

		// FOOTER BOTTOM BOTTOM
    $wp_customize->add_setting('techpro_theme_options[footer_bottom]', array(
        'capability' => 'edit_theme_options',
        'default'        => "",
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));
		$wp_customize->add_control('mt_footer_bottom', array(
        'settings' => 'techpro_theme_options[footer_bottom]',
        'label'    	=> esc_html__('Display Copyright/Footer Menu Area', 'techpro'),
        'section'  => 'techpro_footer_bottom',
        'type'     => 'checkbox',
    ));

		// FOOTER LOGO
    $wp_customize->add_setting('techpro_theme_options[footer_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => esc_html__('Upload Footer Logo', 'techpro'),
        'section'  => 'techpro_footer_bottom',
        'settings' => 'techpro_theme_options[footer_logo]',
    )));

		// FOOTER LOGO
    $wp_customize->add_setting('techpro_theme_options[footer_logox2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_logox2', array(
        'label'    => esc_html__('Upload Footer Logo Retina(x2)', 'techpro'),
        'section'  => 'techpro_footer_bottom',
        'settings' => 'techpro_theme_options[footer_logox2]',
    )));


    //  COPYRIGHT
    $wp_customize->add_setting('techpro_copyright_text', array(
        'default'    	=> esc_html__('Copyright 2016. Powered by WordPress Theme. By Madars Bitenieks', 'techpro'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_attr',
		));
		$wp_customize->add_control( new techpro_Customize_Textarea_Control( $wp_customize, 'techpro_copyright_text', array(
        'label'    	=> esc_html__('Copyright Text', 'techpro'),
        'section'    => 'techpro_footer_bottom',
        'settings'   => 'techpro_copyright_text',
    )));

		// END FOOTER BOTTOM SETTINGS
		// ===



				//  =============================
		    //  = Open Icon in new page
		    //  =============================
		    $wp_customize->add_setting('techpro_theme_options[mt_icon_blank]', array(
		        'capability' => 'edit_theme_options',
		        'default'        => "off",
		        'type'       => 'option',
		        'sanitize_callback' => 'esc_attr',
		    ));

		    $wp_customize->add_control('mt_icon_blank', array(
		        'settings' => 'techpro_theme_options[mt_icon_blank]',
		        'label'    	=> esc_html__('Open in new page', 'techpro'),
		        'section'  => 'techpro_icons',
		       'type'    => 'select',
		        'choices'    => array(
		        	'on' => 'On',
		            'off' => 'Off',
		        ),
		    ));

				//  =============================
		    //  = Social Icons
		    //  =============================
		    $wp_customize->add_setting('techpro_theme_options[mt_icon_facebook]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_facebook', array(
		        'label'    	=> esc_html__('Facebook icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_facebook]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_intagram]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_intagram', array(
		       'label'    	=> esc_html__('Instagram icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_intagram]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_twitter]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_twitter', array(
		        'label'    	=> esc_html__('Twitter icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_twitter]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_vimeo]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_vimeo', array(
		        'label'    	=> esc_html__('Vimeo icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_vimeo]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_youtube]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_youtube', array(
		       'label'    	=> esc_html__('Youtube icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_youtube]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_linkedin]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_linkedin', array(
		        'label'    	=> esc_html__('LinkedIn icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_linkedin]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_gplus]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_gplus', array(
		       'label'    	=> esc_html__('Google plus link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_gplus]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_dribble]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_dribble', array(
		        'label'    	=> esc_html__('Dribble icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_dribble]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_skype]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_skype', array(
		        'label'    	=> esc_html__('Skype icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_skype]',
		    ));



		    $wp_customize->add_setting('techpro_theme_options[mt_icon_pinterest]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_pinterest', array(
		        'label'    	=> esc_html__('Pinterest icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_pinterest]',
		    ));

		    $wp_customize->add_setting('techpro_theme_options[mt_icon_rss]', array(
		        'default'        => '',
		        'capability'     => 'edit_theme_options',
		        'type'           => 'option',
		        'sanitize_callback' => 'esc_url',
		    ));
			$wp_customize->add_control('mt_icon_rss', array(
		        'label'    	=> esc_html__('Rss icon link', 'techpro'),
		        'section'    => 'techpro_icons',
		        'settings'   => 'techpro_theme_options[mt_icon_rss]',
		    ));


}

add_action('customize_register', 'techpro_customize_footer');

?>
