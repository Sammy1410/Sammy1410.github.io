<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_automation_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'home-automation' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'home-automation' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'home-automation' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'home_automation_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'home-automation' ),
	) );

	Kirki::add_section( 'home_automation_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'home-automation' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_all_headings_typography',
		'section'     => 'home_automation_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_automation_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'home-automation' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'home-automation' ),
		'section'     => 'home_automation_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_body_content_typography',
		'section'     => 'home_automation_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'home_automation_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'home-automation' ),
		'description' => esc_attr__( 'Select the typography options for your content.',  'home-automation' ),
		'section'     => 'home_automation_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'home_automation_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'home-automation' ),
	) );

	// Scroll Top

	Kirki::add_section( 'home_automation_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'home-automation' ),
	    'description'    => esc_html__( 'Scroll To Top', 'home-automation' ),
	    'panel'          => 'home_automation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'home_automation_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'home-automation' ),
		'section'     => 'home_automation_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'home_automation_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'home-automation' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'home-automation' ),
	    'panel'          => 'home_automation_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_enable_post_heading',
		'section'     => 'home_automation_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'home-automation' ),
		'section'     => 'home_automation_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'home-automation' ),
		'section'     => 'home_automation_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_automation_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'home-automation' ),
		'section'     => 'home_automation_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'home_automation_header_section', array(
        'title'          => esc_html__( ' Header Settings', 'home-automation' ),
        'panel'          => 'home_automation_panel_id',
        'priority'       => 160,
    ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_header_button_heading',
		'section'     => 'home_automation_header_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Button', 'home-automation' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'home-automation' ),
		'settings' => 'home_automation_header_button_text',
		'section'  => 'home_automation_header_section',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    => esc_html__( 'Link', 'home-automation' ),
		'settings' => 'home_automation_header_button_url',
		'section'  => 'home_automation_header_section',
		'default'  => '',
	] );

	// SLIDER SECTION

	Kirki::add_section( 'home_automation_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'home-automation' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'home-automation' ),
        'panel'          => 'home_automation_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_enable_heading',
		'section'     => 'home_automation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-automation' ),
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'home-automation' ),
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'home-automation' ),
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_slider_heading',
		'section'     => 'home_automation_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'home_automation_slider_extra_heading' ,
        'label'    => esc_html__( 'Extra Heading',  'home-automation' ),
        'section'  => 'home_automation_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_automation_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'home-automation' ),
		'section'     => 'home_automation_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'home_automation_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'home-automation' ),
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'home-automation' ),
		'priority'    => 10,
		'choices'     => home_automation_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_header_phone_number_heading',
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'home-automation' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'home-automation' ),
		'settings' => 'home_automation_header_phone_text',
		'section'  => 'home_automation_blog_slide_section',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Phone Number', 'home-automation' ),
		'settings' => 'home_automation_header_phone_number',
		'section'  => 'home_automation_blog_slide_section',
		'default'  => '',
		'sanitize_callback' => 'home_automation_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_header_email_address_heading',
		'section'     => 'home_automation_blog_slide_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'home-automation' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Text', 'home-automation' ),
		'settings' => 'home_automation_header_email_text',
		'section'  => 'home_automation_blog_slide_section',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Email Address', 'home-automation' ),
		'settings' => 'home_automation_header_email_number',
		'section'  => 'home_automation_blog_slide_section',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	// ABOUT US SECTION

	Kirki::add_section( 'home_automation_about_us_section', array(
        'title'          => esc_html__( 'About Us Settings', 'home-automation' ),
        'description'    => esc_html__( 'You have to select page to show about us section.', 'home-automation' ),
        'panel'          => 'home_automation_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_about_us_section_enable_heading',
		'section'     => 'home_automation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable About Us Section', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_about_us_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-automation' ),
		'section'     => 'home_automation_about_us_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_about_us_section_title_heading',
		'section'     => 'home_automation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'home_automation_about_us_section_title',
		'section'  => 'home_automation_about_us_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_about_us_page_heading',
		'section'     => 'home_automation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Page Dropdown', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'dropdown-pages',
		'settings'    => 'home_automation_about_us',
		'section'     => 'home_automation_about_us_section',
		'default'     => 42,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_list_heading',
		'section'     => 'home_automation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of List Text', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'home_automation_list_increament',
		'label'       => esc_html__( 'Number of list to show', 'home-automation' ),
		'section'     => 'home_automation_about_us_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 5,
			'step' => 1,
		],
	] );

	$list_no = get_theme_mod('home_automation_list_increament','');

	for ($i=1; $i <= $list_no; $i++) {

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'custom',
			'settings'    => 'home_automation_list_number'.$i,
			'section'     => 'home_automation_about_us_section',
				'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'List ', 'home-automation' ).$i . '</h3>',
			'priority'    => 10,
		] );

	    Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'label'       => esc_html__( 'Add Icon', 'home-automation' ),
			'description' => esc_html__( 'Add Fontawesome Icon Ex: fas fa-home', 'home-automation' ),
			'settings' => 'home_automation_about_us_icon'.$i,
			'section'  => 'home_automation_about_us_section',
			'default'  => '',
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'     => 'text',
			'label'       => esc_html__( 'Add Text', 'home-automation' ),
			'settings' => 'home_automation_about_us_section_list'.$i,
			'section'  => 'home_automation_about_us_section',
			'default'  => '',
		] );
	}

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_about_excerpt_heading',
		'section'     => 'home_automation_about_us_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'home_automation_about_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'home-automation' ),
		'section'     => 'home_automation_about_us_section',
		'default'     => 60,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'home_automation_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'home-automation' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'home-automation' ),
        'panel'          => 'home_automation_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_footer_enable_heading',
		'section'     => 'home_automation_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'home_automation_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'home-automation' ),
		'section'     => 'home_automation_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'home-automation' ),
			'off' => esc_html__( 'Disable', 'home-automation' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'home_automation_footer_text_heading',
		'section'     => 'home_automation_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'home-automation' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'home_automation_footer_text',
		'section'  => 'home_automation_footer_section',
		'default'  => '',
		'priority' => 10,
	] );


		Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_automation_footer_text_heading_2',
	'section'     => 'home_automation_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'home-automation' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'home_automation_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'home-automation' ),
		'section'     => 'home_automation_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'home-automation' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'home-automation' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'home-automation' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'home-automation' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'home_automation_footer_text_heading_1',
	'section'     => 'home_automation_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'home-automation' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'home_automation_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'home-automation' ),
		'section'     => 'home_automation_footer_section',
		'default'     => '',
	] );
}
