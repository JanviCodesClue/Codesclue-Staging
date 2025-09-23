<?php
/**
 * CodesClue Theme Customizer
 *
 * @package CodesClue
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function codesclue_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'codesclue_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'codesclue_customize_partial_blogdescription',
        ));
    }

    // Header Section
    $wp_customize->add_section('codesclue_header', array(
        'title'    => __('Header Settings', 'codesclue'),
        'priority' => 30,
    ));

    // Logo
    $wp_customize->add_setting('codesclue_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_logo', array(
        'label'    => __('Logo', 'codesclue'),
        'section'  => 'codesclue_header',
        'settings' => 'codesclue_logo',
    )));

    // Hero Section
    $wp_customize->add_section('codesclue_hero', array(
        'title'    => __('Hero Section', 'codesclue'),
        'priority' => 35,
    ));

    // Hero Title
    $wp_customize->add_setting('codesclue_hero_title', array(
        'default'           => 'Premium Web & Mobile App Development for Businesses',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_hero_title', array(
        'label'   => __('Hero Title', 'codesclue'),
        'section' => 'codesclue_hero',
        'type'    => 'text',
    ));

    // Hero Description
    $wp_customize->add_setting('codesclue_hero_description', array(
        'default'           => 'Leading Software Development Company - Delivering custom software development services and solutions to build intelligent enterprises with speed and agility.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_hero_description', array(
        'label'   => __('Hero Description', 'codesclue'),
        'section' => 'codesclue_hero',
        'type'    => 'textarea',
    ));

    // Hero Button Text
    $wp_customize->add_setting('codesclue_hero_button_text', array(
        'default'           => 'Get Started',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_hero_button_text', array(
        'label'   => __('Hero Button Text', 'codesclue'),
        'section' => 'codesclue_hero',
        'type'    => 'text',
    ));

    // Hero Button URL
    $wp_customize->add_setting('codesclue_hero_button_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('codesclue_hero_button_url', array(
        'label'   => __('Hero Button URL', 'codesclue'),
        'section' => 'codesclue_hero',
        'type'    => 'url',
    ));

    // Contact Info Section
    $wp_customize->add_section('codesclue_contact', array(
        'title'    => __('Contact Information', 'codesclue'),
        'priority' => 40,
    ));

    // Phone
    $wp_customize->add_setting('codesclue_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_phone', array(
        'label'   => __('Phone Number', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('codesclue_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('codesclue_email', array(
        'label'   => __('Email Address', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('codesclue_address', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_address', array(
        'label'   => __('Address', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    // Social Media Section
    $wp_customize->add_section('codesclue_social', array(
        'title'    => __('Social Media', 'codesclue'),
        'priority' => 45,
    ));

    $social_platforms = array(
        'facebook'  => 'Facebook',
        'twitter'   => 'Twitter',
        'linkedin'  => 'LinkedIn',
        'instagram' => 'Instagram',
        'youtube'   => 'YouTube',
        'behance'   => 'Behance',
        'dribbble'  => 'Dribbble',
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('codesclue_' . $platform, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('codesclue_' . $platform, array(
            'label'   => $label . ' URL',
            'section' => 'codesclue_social',
            'type'    => 'url',
        ));
    }

    // Footer Section
    $wp_customize->add_section('codesclue_footer', array(
        'title'    => __('Footer Settings', 'codesclue'),
        'priority' => 50,
    ));

    // Footer Description
    $wp_customize->add_setting('codesclue_footer_description', array(
        'default'           => 'Leading Software Development Company - Delivering custom software development services and solutions to build intelligent enterprises with speed and agility.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_footer_description', array(
        'label'   => __('Footer Description', 'codesclue'),
        'section' => 'codesclue_footer',
        'type'    => 'textarea',
    ));

    // Copyright Text
    $wp_customize->add_setting('codesclue_copyright_text', array(
        'default'           => '© 2024 CodesClue. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_copyright_text', array(
        'label'   => __('Copyright Text', 'codesclue'),
        'section' => 'codesclue_footer',
        'type'    => 'text',
    ));

    // Colors Section
    $wp_customize->add_section('codesclue_colors', array(
        'title'    => __('Colors', 'codesclue'),
        'priority' => 55,
    ));

    // Primary Color
    $wp_customize->add_setting('codesclue_primary_color', array(
        'default'           => '#108aff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'codesclue_primary_color', array(
        'label'   => __('Primary Color', 'codesclue'),
        'section' => 'codesclue_colors',
    )));

    // Secondary Color
    $wp_customize->add_setting('codesclue_secondary_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'codesclue_secondary_color', array(
        'label'   => __('Secondary Color', 'codesclue'),
        'section' => 'codesclue_colors',
    )));

    // Background Color
    $wp_customize->add_setting('codesclue_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'codesclue_background_color', array(
        'label'   => __('Background Color', 'codesclue'),
        'section' => 'codesclue_colors',
    )));

    // Typography Section
    $wp_customize->add_section('codesclue_typography', array(
        'title'    => __('Typography', 'codesclue'),
        'priority' => 60,
    ));

    // Heading Font
    $wp_customize->add_setting('codesclue_heading_font', array(
        'default'           => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_heading_font', array(
        'label'   => __('Heading Font', 'codesclue'),
        'section' => 'codesclue_typography',
        'type'    => 'select',
        'choices' => array(
            'Inter'     => 'Inter',
            'Poppins'   => 'Poppins',
            'Roboto'    => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato'      => 'Lato',
        ),
    ));

    // Body Font
    $wp_customize->add_setting('codesclue_body_font', array(
        'default'           => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_body_font', array(
        'label'   => __('Body Font', 'codesclue'),
        'section' => 'codesclue_typography',
        'type'    => 'select',
        'choices' => array(
            'Inter'     => 'Inter',
            'Poppins'   => 'Poppins',
            'Roboto'    => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato'      => 'Lato',
        ),
    ));

    // About Us Page Section
    $wp_customize->add_section('codesclue_about', array(
        'title'    => __('About Us Page', 'codesclue'),
        'priority' => 65,
    ));

    // About Hero Title
    $wp_customize->add_setting('codesclue_about_hero_title', array(
        'default'           => 'About Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_hero_title', array(
        'label'   => __('About Hero Title', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    // About Hero Description
    $wp_customize->add_setting('codesclue_about_hero_description', array(
        'default'           => 'CodesClue is a leading IT consulting and software development company specializing in AI, ML, Cloud Computing, and IoT. We deliver innovative digital solutions to help businesses grow and succeed.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_hero_description', array(
        'label'   => __('About Hero Description', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    // About Hero Image
    $wp_customize->add_setting('codesclue_about_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_about_hero_image', array(
        'label'    => __('About Hero Image', 'codesclue'),
        'section'  => 'codesclue_about',
        'settings' => 'codesclue_about_hero_image',
    )));

    // About Main Title
    $wp_customize->add_setting('codesclue_about_main_title', array(
        'default'           => 'We build robust software solutions with highly creative and dedicated offshore teams!',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_main_title', array(
        'label'   => __('About Main Title', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    // About Main Description
    $wp_customize->add_setting('codesclue_about_main_description', array(
        'default'           => 'CodesClue, software development company founded in 2023, is a leading IT consulting & services known for its innovative and robust digital solutions. We help you evolve your business into a profitable venture by using the unrivaled experience of our highly qualified product development team. Our huge pool of skilled professionals for Machine Learning, Cloud Computing, IoT, Artificial Intelligence, and more help you expand your web and mobile app development customer base.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_main_description', array(
        'label'   => __('About Main Description', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    // About Safety Section
    $wp_customize->add_setting('codesclue_about_safety_title', array(
        'default'           => 'Keep Your Business Safe & Ensure High Availability.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_safety_title', array(
        'label'   => __('Safety Section Title', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_about_safety_description', array(
        'default'           => 'We like to build close relationships with our clients. we believe dynamic collaboration is the only way to get the job done well. see what they said about us in customer stories',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_safety_description', array(
        'label'   => __('Safety Section Description', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_about_safety_description_2', array(
        'default'           => 'Our approach is centered around trust and teamwork. By fostering strong client relationships, we create a collaborative environment that drives success. Explore our customer stories to see how we\'ve made a difference.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_safety_description_2', array(
        'label'   => __('Safety Section Description 2', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_about_safety_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_about_safety_image', array(
        'label'    => __('Safety Section Image', 'codesclue'),
        'section'  => 'codesclue_about',
        'settings' => 'codesclue_about_safety_image',
    )));

    // Mission & Vision
    $wp_customize->add_setting('codesclue_about_mission_text', array(
        'default'           => 'At CodesClue, our mission is to empower businesses with cutting-edge digital solutions that drive growth, efficiency, and innovation. We are committed to delivering high-quality IT consulting and services, leveraging the expertise of our skilled professionals in Machine Learning, Cloud Computing, IoT, and Artificial Intelligence. By embracing the latest technologies and best industry practices, we help our clients transform their ideas into scalable, future-ready solutions that enhance their digital presence and maximize profitability.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_mission_text', array(
        'label'   => __('Mission Text', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_about_mission_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_about_mission_image', array(
        'label'    => __('Mission Image', 'codesclue'),
        'section'  => 'codesclue_about',
        'settings' => 'codesclue_about_mission_image',
    )));

    $wp_customize->add_setting('codesclue_about_vision_text', array(
        'default'           => 'At CodesClue, we strive to shape a future where technology becomes the driving force behind business success. Our vision is to be a global leader in IT consulting and digital transformation, pioneering innovative solutions in Machine Learning, Cloud Computing, IoT, and Artificial Intelligence. We are dedicated to building intelligent, scalable, and sustainable digital ecosystems that not only enhance operational efficiency but also foster growth and redefine industry standards. By continuously pushing the boundaries of technology, we aim to empower businesses to stay ahead in the ever-evolving digital world.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_about_vision_text', array(
        'label'   => __('Vision Text', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_about_vision_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_about_vision_image', array(
        'label'    => __('Vision Image', 'codesclue'),
        'section'  => 'codesclue_about',
        'settings' => 'codesclue_about_vision_image',
    )));

    // Success Section
    $wp_customize->add_setting('codesclue_about_success_title', array(
        'default'           => 'Preparing For Your Success',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_success_title', array(
        'label'   => __('Success Section Title', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_about_success_subtitle', array(
        'default'           => 'Prepare yourself for success with the right mindset and strategy.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_success_subtitle', array(
        'label'   => __('Success Section Subtitle', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    // Success Steps
    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting('codesclue_success_step_' . $i . '_title', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_success_step_' . $i . '_title', array(
            'label'   => sprintf(__('Success Step %d Title', 'codesclue'), $i),
            'section' => 'codesclue_about',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_success_step_' . $i . '_desc', array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('codesclue_success_step_' . $i . '_desc', array(
            'label'   => sprintf(__('Success Step %d Description', 'codesclue'), $i),
            'section' => 'codesclue_about',
            'type'    => 'textarea',
        ));

        $wp_customize->add_setting('codesclue_success_step_' . $i . '_image', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_success_step_' . $i . '_image', array(
            'label'    => sprintf(__('Success Step %d Image', 'codesclue'), $i),
            'section'  => 'codesclue_about',
            'settings' => 'codesclue_success_step_' . $i . '_image',
        )));
    }

    // CTA Section
    $wp_customize->add_setting('codesclue_about_cta_title', array(
        'default'           => 'What can we do for you?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_about_cta_description', array(
        'default'           => 'We are always ready and available to assist with any questions.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_about_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_about',
        'type'    => 'text',
    ));

    // Contact Us Page Section
    $wp_customize->add_section('codesclue_contact', array(
        'title'    => __('Contact Us Page', 'codesclue'),
        'priority' => 70,
    ));

    // Contact Hero Title
    $wp_customize->add_setting('codesclue_contact_hero_title', array(
        'default'           => 'Contact Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_hero_title', array(
        'label'   => __('Contact Hero Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    // Contact Hero Description
    $wp_customize->add_setting('codesclue_contact_hero_description', array(
        'default'           => 'Our team is here to help you every step of the way. Whether it\'s a project inquiry, support request, or partnership opportunity, we\'d love to hear from you. Reach out today, and let\'s start the conversation!',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_contact_hero_description', array(
        'label'   => __('Contact Hero Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    // Contact Clients Section
    $wp_customize->add_setting('codesclue_contact_clients_title', array(
        'default'           => 'Our Trusted Client',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_clients_title', array(
        'label'   => __('Clients Section Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_clients_description', array(
        'default'           => 'We collaborate with startups, enterprises, and everything in between. Here are some of the amazing clients who have chosen to grow with us.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_contact_clients_description', array(
        'label'   => __('Clients Section Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    // Schedule Meeting Section
    $wp_customize->add_setting('codesclue_contact_schedule_title', array(
        'default'           => 'Let\'s Schedule a meeting',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_schedule_title', array(
        'label'   => __('Schedule Meeting Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_calendly_url', array(
        'default'           => 'https://calendly.com/ketan-codesclue/30min',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('codesclue_contact_calendly_url', array(
        'label'   => __('Calendly URL', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'url',
    ));

    // Contact Methods
    $wp_customize->add_setting('codesclue_contact_whatsapp_url', array(
        'default'           => 'https://wa.me/+919998977764',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('codesclue_contact_whatsapp_url', array(
        'label'   => __('WhatsApp URL', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('codesclue_contact_whatsapp_title', array(
        'default'           => 'Chat with us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_whatsapp_title', array(
        'label'   => __('WhatsApp Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_whatsapp_description', array(
        'default'           => 'We have live Social Experts ready to help you 24/7. Get instant support whenever you need it.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_contact_whatsapp_description', array(
        'label'   => __('WhatsApp Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_contact_whatsapp_number', array(
        'default'           => '+91 99989 77764',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_whatsapp_number', array(
        'label'   => __('WhatsApp Number', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_email_title', array(
        'default'           => 'Email Us',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_email_title', array(
        'label'   => __('Email Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_email_description', array(
        'default'           => 'Simple drop us an email at <strong>ketan@codesclue.com</strong> and you will receive a reply within 24 hours.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_contact_email_description', array(
        'label'   => __('Email Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_contact_phone_title', array(
        'default'           => 'Give us a call',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_phone_title', array(
        'label'   => __('Phone Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_phone_description', array(
        'default'           => 'Need assistance? Our experts are available 24/7! Call us anytime for expert support whenever you need it.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_contact_phone_description', array(
        'label'   => __('Phone Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    // Contact Form Section
    $wp_customize->add_setting('codesclue_contact_form_title', array(
        'default'           => 'CONTACT US',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_form_title', array(
        'label'   => __('Contact Form Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_form_shortcode', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_form_shortcode', array(
        'label'   => __('Contact Form 7 Shortcode', 'codesclue'),
        'description' => __('Enter Contact Form 7 shortcode to replace default form', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_address', array(
        'default'           => '915-STC (Shivam Trade Center),<br />Near Bopal-Ambli Cross Road,<br />Near Vakil Saheb Bridge,<br />Ahmedabad, Gujarat, 380058',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_contact_address', array(
        'label'   => __('Contact Address', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_contact_map_url', array(
        'default'           => 'https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=codesclue&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('codesclue_contact_map_url', array(
        'label'   => __('Google Maps URL', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'url',
    ));

    // CTA Section
    $wp_customize->add_setting('codesclue_contact_cta_title', array(
        'default'           => 'What can we do for you?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_contact_cta_description', array(
        'default'           => 'We are always ready and available to assist with any questions.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_contact_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_contact',
        'type'    => 'text',
    ));

    // Team Page Section
    $wp_customize->add_section('codesclue_team', array(
        'title'    => __('Team Page', 'codesclue'),
        'priority' => 75,
    ));

    // Team Hero Title
    $wp_customize->add_setting('codesclue_team_hero_title', array(
        'default'           => 'Meet Our Team',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_hero_title', array(
        'label'   => __('Team Hero Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    // Team Hero Description
    $wp_customize->add_setting('codesclue_team_hero_description', array(
        'default'           => 'Meet the passionate minds behind our success. Our team is dedicated to innovation, collaboration, and excellence in everything we do.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_team_hero_description', array(
        'label'   => __('Team Hero Description', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    // Team Hero Image
    $wp_customize->add_setting('codesclue_team_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_hero_image', array(
        'label'    => __('Team Hero Image', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_hero_image',
    )));

    // Team Introduction
    $wp_customize->add_setting('codesclue_team_intro_text', array(
        'default'           => 'At CodesClue, our team is at the heart of our success. We are a group of highly skilled professionals, united by a shared vision to deliver innovative, scalable, and impactful digital solutions.<br><br>With expertise spanning web and mobile application development, AI powered systems, and industry specific platforms, our team brings together technical excellence and strategic thinking to help businesses thrive in an ever evolving digital landscape.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_team_intro_text', array(
        'label'   => __('Team Introduction Text', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_team_intro_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_intro_image', array(
        'label'    => __('Team Introduction Image', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_intro_image',
    )));

    // Team Description
    $wp_customize->add_setting('codesclue_team_description_title', array(
        'default'           => 'Our team comprises experts, innovators, and achievers!',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_description_title', array(
        'label'   => __('Team Description Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_description_text', array(
        'default'           => 'CodesClue is not just any ordinary mobile app and software development company but also a family of forward looking top industry talents. Whether it\'s enterprises, SMEs, or even startups, our dedicated teams are ready to shape your ideas into innovative solutions.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_team_description_text', array(
        'label'   => __('Team Description Text', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    // Featured Team Member
    $wp_customize->add_setting('codesclue_team_featured_testimonial', array(
        'default'           => 'Ketan Patel is the driving force behind the remarkable success of CodesClue. With over 14 years of experience in leadership and management within software and product development, he has been instrumental in shaping the company\'s journey.<br><br>His expertise spans across diverse areas of the IT industry, including consulting, design, project management, business development, innovation, and strategic growth. Above all, his visionary leadership has been key to CodesClue\'s achievements and continued evolution.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_team_featured_testimonial', array(
        'label'   => __('Featured Team Member Testimonial', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_team_featured_quote', array(
        'default'           => 'He is obsessed with delivering quality to the organization and to all CodesClue partners and clientele.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_featured_quote', array(
        'label'   => __('Featured Team Member Quote', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_featured_name', array(
        'default'           => 'Ketan Patel',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_featured_name', array(
        'label'   => __('Featured Team Member Name', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_featured_role', array(
        'default'           => 'Co-Founder',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_featured_role', array(
        'label'   => __('Featured Team Member Role', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_featured_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_featured_image', array(
        'label'    => __('Featured Team Member Image', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_featured_image',
    )));

    // Core Values
    $wp_customize->add_setting('codesclue_team_values_title', array(
        'default'           => 'Our Core Values',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_values_title', array(
        'label'   => __('Core Values Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_values_subtitle', array(
        'default'           => 'We are committed to delivering reliable and quality services',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_values_subtitle', array(
        'label'   => __('Core Values Subtitle', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    // Value 1
    $wp_customize->add_setting('codesclue_team_value_1_title', array(
        'default'           => 'Innovation',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_value_1_title', array(
        'label'   => __('Value 1 Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_value_1_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_value_1_icon', array(
        'label'    => __('Value 1 Icon', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_value_1_icon',
    )));

    $wp_customize->add_setting('codesclue_team_value_1_desc', array(
        'default'           => 'At CodesClue, innovation is at the core of everything we do. We don\'t just build software; we create intelligent, future ready solutions that empower businesses to stay ahead in a rapidly evolving digital world.<br><br>By combining cutting edge technologies, user centric design, and a deep understanding of industry challenges, we deliver products and platforms that drive growth and transformation.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_team_value_1_desc', array(
        'label'   => __('Value 1 Description', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    // Value 2
    $wp_customize->add_setting('codesclue_team_value_2_title', array(
        'default'           => 'Collaboration',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_value_2_title', array(
        'label'   => __('Value 2 Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_value_2_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_value_2_icon', array(
        'label'    => __('Value 2 Icon', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_value_2_icon',
    )));

    $wp_customize->add_setting('codesclue_team_value_2_desc', array(
        'default'           => 'At CodesClue, we believe collaboration is the foundation of every successful project. We work closely with our clients as partners, aligning our expertise with their vision to deliver meaningful results.<br><br>By fostering open communication, transparency, and teamwork, we ensure every stakeholder is involved at every stage of the process.<br><b>Together, we innovate, build, and grow</b>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_team_value_2_desc', array(
        'label'   => __('Value 2 Description', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    // Value 3
    $wp_customize->add_setting('codesclue_team_value_3_title', array(
        'default'           => 'Excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_value_3_title', array(
        'label'   => __('Value 3 Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_value_3_icon', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_value_3_icon', array(
        'label'    => __('Value 3 Icon', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_value_3_icon',
    )));

    $wp_customize->add_setting('codesclue_team_value_3_desc', array(
        'default'           => 'At CodesClue, excellence is not just a standard it\'s our commitment. We strive for perfection in every line of code, every design detail, and every client interaction.<br><br>Our team is dedicated to delivering high quality, reliable, and scalable solutions that stand the test of time.<br><br><b>Excellence is at the heart of everything we do</b>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('codesclue_team_value_3_desc', array(
        'label'   => __('Value 3 Description', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    // Experience Section
    $wp_customize->add_setting('codesclue_team_experience_title', array(
        'default'           => '5+ years of relationship building experience',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_experience_title', array(
        'label'   => __('Experience Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_experience_text', array(
        'default'           => 'We are committed to transparency and accountability in our business. We strive to achieve collaborative relationships that are trustworthy and have mutual respect.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_team_experience_text', array(
        'label'   => __('Experience Text', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_team_experience_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_team_experience_image', array(
        'label'    => __('Experience Image', 'codesclue'),
        'section'  => 'codesclue_team',
        'settings' => 'codesclue_team_experience_image',
    )));

    // Team Members Section
    $wp_customize->add_setting('codesclue_team_members_title', array(
        'default'           => 'Meet Our Team Members',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_members_title', array(
        'label'   => __('Team Members Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_members_subtitle', array(
        'default'           => 'Our talented team of professionals dedicated to delivering excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_members_subtitle', array(
        'label'   => __('Team Members Subtitle', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    // CTA Section
    $wp_customize->add_setting('codesclue_team_cta_title', array(
        'default'           => 'What can we do for you?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_team_cta_description', array(
        'default'           => 'We are always ready and available to assist with any questions.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_team_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_team',
        'type'    => 'text',
    ));

    // Portfolio Page Section
    $wp_customize->add_section('codesclue_portfolio', array(
        'title'    => __('Portfolio Page', 'codesclue'),
        'priority' => 80,
    ));

    // Portfolio Hero Title
    $wp_customize->add_setting('codesclue_portfolio_hero_title', array(
        'default'           => 'Our Portfolio',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_hero_title', array(
        'label'   => __('Portfolio Hero Title', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    // Portfolio Hero Description
    $wp_customize->add_setting('codesclue_portfolio_hero_description', array(
        'default'           => 'Explore our collection of work, where creativity meets excellence. Take a look at what we\'ve accomplished and imagine what we can create together.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_hero_description', array(
        'label'   => __('Portfolio Hero Description', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'textarea',
    ));

    // Portfolio Tab Labels
    $wp_customize->add_setting('codesclue_portfolio_tab_all', array(
        'default'           => 'All',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_tab_all', array(
        'label'   => __('All Tab Label', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_portfolio_tab_mobile', array(
        'default'           => 'Mobile App',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_tab_mobile', array(
        'label'   => __('Mobile App Tab Label', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_portfolio_tab_website', array(
        'default'           => 'Website',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_tab_website', array(
        'label'   => __('Website Tab Label', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_portfolio_tab_webapp', array(
        'default'           => 'Web App',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_tab_webapp', array(
        'label'   => __('Web App Tab Label', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    // CTA Section
    $wp_customize->add_setting('codesclue_portfolio_cta_title', array(
        'default'           => 'What can we do for you?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_portfolio_cta_description', array(
        'default'           => 'We are always ready and available to assist with any questions.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_portfolio_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_portfolio',
        'type'    => 'text',
    ));

    // Testimonials Page Section
    $wp_customize->add_section('codesclue_testimonials', array(
        'title'    => __('Testimonials Page', 'codesclue'),
        'priority' => 85,
    ));

    // Testimonials Hero Title
    $wp_customize->add_setting('codesclue_testimonials_hero_title', array(
        'default'           => 'Client Testimonials',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_hero_title', array(
        'label'   => __('Testimonials Hero Title', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    // Testimonials Hero Description
    $wp_customize->add_setting('codesclue_testimonials_hero_description', array(
        'default'           => 'Welcome to the CodesClue Client Testimonial section! Here, we answer common questions about our services, expertise, and how we help businesses with digital transformation.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_hero_description', array(
        'label'   => __('Testimonials Hero Description', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'textarea',
    ));

    // Testimonials Section Title
    $wp_customize->add_setting('codesclue_testimonials_section_title', array(
        'default'           => 'What Our Clients Say',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_section_title', array(
        'label'   => __('Testimonials Section Title', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    // Testimonials Ratings Title
    $wp_customize->add_setting('codesclue_testimonials_ratings_title', array(
        'default'           => 'Detailed Client Ratings',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_ratings_title', array(
        'label'   => __('Ratings Section Title', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    // Detailed Testimonials
    $wp_customize->add_setting('codesclue_testimonial_1_name', array(
        'default'           => 'Hasan Albogami',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_1_name', array(
        'label'   => __('Testimonial 1 Name', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_1_source', array(
        'default'           => 'GoodFirm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_1_source', array(
        'label'   => __('Testimonial 1 Source', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_2_name', array(
        'default'           => 'Jeremy Blaze',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_2_name', array(
        'label'   => __('Testimonial 2 Name', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_2_source', array(
        'default'           => 'Clutch',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_2_source', array(
        'label'   => __('Testimonial 2 Source', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_3_name', array(
        'default'           => 'Mrulay Mistry',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_3_name', array(
        'label'   => __('Testimonial 3 Name', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_3_source', array(
        'default'           => 'GoodFirm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_3_source', array(
        'label'   => __('Testimonial 3 Source', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_4_name', array(
        'default'           => 'Ibrahim al Sulati',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_4_name', array(
        'label'   => __('Testimonial 4 Name', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_4_source', array(
        'default'           => 'Clutch',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_4_source', array(
        'label'   => __('Testimonial 4 Source', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_5_name', array(
        'default'           => 'Lucas White',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_5_name', array(
        'label'   => __('Testimonial 5 Name', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonial_5_source', array(
        'default'           => 'GoodFirm',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonial_5_source', array(
        'label'   => __('Testimonial 5 Source', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    // CTA Section
    $wp_customize->add_setting('codesclue_testimonials_cta_title', array(
        'default'           => 'What can we do for you?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_testimonials_cta_description', array(
        'default'           => 'We are always ready and available to assist with any questions.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_testimonials_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_testimonials',
        'type'    => 'text',
    ));

    // Career Page Section
    $wp_customize->add_section('codesclue_career', array(
        'title'    => __('Career Page', 'codesclue'),
        'priority' => 90,
    ));

    // Career Hero Title
    $wp_customize->add_setting('codesclue_career_hero_title', array(
        'default'           => 'Join Our Team',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_hero_title', array(
        'label'   => __('Career Hero Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    // Career Hero Description
    $wp_customize->add_setting('codesclue_career_hero_description', array(
        'default'           => 'Build your career with us! We\'re looking for passionate developers, designers, and tech enthusiasts who want to make a difference in the digital world.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_career_hero_description', array(
        'label'   => __('Career Hero Description', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'textarea',
    ));

    // Why Work With Us Section
    $wp_customize->add_setting('codesclue_career_why_title', array(
        'default'           => 'Why Work With Us?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_why_title', array(
        'label'   => __('Why Work With Us Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_why_subtitle', array(
        'default'           => 'Join a team that values innovation, collaboration, and growth',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_why_subtitle', array(
        'label'   => __('Why Work With Us Subtitle', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    // Benefits
    $wp_customize->add_setting('codesclue_career_benefit_1_icon', array(
        'default'           => 'fas fa-rocket',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_benefit_1_icon', array(
        'label'   => __('Benefit 1 Icon', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_benefit_1_title', array(
        'default'           => 'Innovation First',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_benefit_1_title', array(
        'label'   => __('Benefit 1 Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_benefit_1_desc', array(
        'default'           => 'Work on cutting-edge technologies and innovative projects that challenge and inspire.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_career_benefit_1_desc', array(
        'label'   => __('Benefit 1 Description', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'textarea',
    ));

    // Add more benefits (2-6) with similar structure
    for ($i = 2; $i <= 6; $i++) {
        $wp_customize->add_setting('codesclue_career_benefit_' . $i . '_icon', array(
            'default'           => 'fas fa-users',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_benefit_' . $i . '_icon', array(
            'label'   => __('Benefit ' . $i . ' Icon', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_benefit_' . $i . '_title', array(
            'default'           => 'Benefit ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_benefit_' . $i . '_title', array(
            'label'   => __('Benefit ' . $i . ' Title', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_benefit_' . $i . '_desc', array(
            'default'           => 'Description for benefit ' . $i,
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('codesclue_career_benefit_' . $i . '_desc', array(
            'label'   => __('Benefit ' . $i . ' Description', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'textarea',
        ));
    }

    // Open Positions Section
    $wp_customize->add_setting('codesclue_career_positions_title', array(
        'default'           => 'Open Positions',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_positions_title', array(
        'label'   => __('Open Positions Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_positions_subtitle', array(
        'default'           => 'Explore our current job openings and find your perfect role',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_positions_subtitle', array(
        'label'   => __('Open Positions Subtitle', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    // Job Positions (1-6)
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting('codesclue_career_position_' . $i . '_title', array(
            'default'           => 'Position ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_position_' . $i . '_title', array(
            'label'   => __('Position ' . $i . ' Title', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_position_' . $i . '_location', array(
            'default'           => 'Ahmedabad, India',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_position_' . $i . '_location', array(
            'label'   => __('Position ' . $i . ' Location', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_position_' . $i . '_type', array(
            'default'           => 'Full-time',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_position_' . $i . '_type', array(
            'label'   => __('Position ' . $i . ' Type', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_position_' . $i . '_experience', array(
            'default'           => '2-4 years',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_position_' . $i . '_experience', array(
            'label'   => __('Position ' . $i . ' Experience', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_position_' . $i . '_desc', array(
            'default'           => 'Description for position ' . $i,
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('codesclue_career_position_' . $i . '_desc', array(
            'label'   => __('Position ' . $i . ' Description', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'textarea',
        ));
    }

    // Company Culture Section
    $wp_customize->add_setting('codesclue_career_culture_title', array(
        'default'           => 'Our Company Culture',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_culture_title', array(
        'label'   => __('Company Culture Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_culture_description', array(
        'default'           => 'At CodesClue, we believe in fostering a culture of innovation, collaboration, and continuous learning. Our team members are our greatest asset, and we invest in their growth and development.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_career_culture_description', array(
        'label'   => __('Company Culture Description', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_career_culture_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'codesclue_career_culture_image', array(
        'label'    => __('Company Culture Image', 'codesclue'),
        'section'  => 'codesclue_career',
        'settings' => 'codesclue_career_culture_image',
    )));

    // Culture Points
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting('codesclue_career_culture_point_' . $i, array(
            'default'           => 'Culture point ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_culture_point_' . $i, array(
            'label'   => __('Culture Point ' . $i, 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));
    }

    // Application Process Section
    $wp_customize->add_setting('codesclue_career_process_title', array(
        'default'           => 'Application Process',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_process_title', array(
        'label'   => __('Application Process Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_process_subtitle', array(
        'default'           => 'Simple steps to join our team',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_process_subtitle', array(
        'label'   => __('Application Process Subtitle', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    // Process Steps
    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting('codesclue_career_step_' . $i . '_title', array(
            'default'           => 'Step ' . $i,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('codesclue_career_step_' . $i . '_title', array(
            'label'   => __('Step ' . $i . ' Title', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'text',
        ));

        $wp_customize->add_setting('codesclue_career_step_' . $i . '_desc', array(
            'default'           => 'Description for step ' . $i,
            'sanitize_callback' => 'sanitize_textarea_field',
        ));

        $wp_customize->add_control('codesclue_career_step_' . $i . '_desc', array(
            'label'   => __('Step ' . $i . ' Description', 'codesclue'),
            'section' => 'codesclue_career',
            'type'    => 'textarea',
        ));
    }

    // Contact Section
    $wp_customize->add_setting('codesclue_career_contact_title', array(
        'default'           => 'Ready to Join Us?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_contact_title', array(
        'label'   => __('Contact Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_contact_description', array(
        'default'           => 'Send us your resume and let\'s discuss how you can contribute to our team',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('codesclue_career_contact_description', array(
        'label'   => __('Contact Description', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('codesclue_career_email', array(
        'default'           => 'careers@codesclue.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('codesclue_career_email', array(
        'label'   => __('Career Email', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'email',
    ));

    // CTA Section
    $wp_customize->add_setting('codesclue_career_cta_title', array(
        'default'           => 'Have Questions?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_cta_title', array(
        'label'   => __('CTA Title', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('codesclue_career_cta_description', array(
        'default'           => 'We\'re here to help you with any questions about our career opportunities.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('codesclue_career_cta_description', array(
        'label'   => __('CTA Description', 'codesclue'),
        'section' => 'codesclue_career',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'codesclue_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function codesclue_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function codesclue_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function codesclue_customize_preview_js() {
    wp_enqueue_script('codesclue-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'codesclue_customize_preview_js');

/**
 * Output custom CSS for theme customizer settings
 */
function codesclue_customizer_css() {
    $primary_color = get_theme_mod('codesclue_primary_color', '#108aff');
    $secondary_color = get_theme_mod('codesclue_secondary_color', '#333333');
    $background_color = get_theme_mod('codesclue_background_color', '#ffffff');
    $heading_font = get_theme_mod('codesclue_heading_font', 'Inter');
    $body_font = get_theme_mod('codesclue_body_font', 'Inter');

    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr($primary_color); ?>;
            --secondary-color: <?php echo esc_attr($secondary_color); ?>;
            --background-color: <?php echo esc_attr($background_color); ?>;
            --heading-font: '<?php echo esc_attr($heading_font); ?>', sans-serif;
            --body-font: '<?php echo esc_attr($body_font); ?>', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--heading-font);
        }

        body {
            font-family: var(--body-font);
            background-color: var(--background-color);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .footer-social-link:hover {
            color: var(--primary-color) !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'codesclue_customizer_css'); 