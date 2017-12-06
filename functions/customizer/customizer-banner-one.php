<?php
function appointment_banner01_customizer( $wp_customize ) {

//Service section panel
    $wp_customize->add_panel( 'appointment_banner01_options', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Banner 01', 'appointment'),
    ) );

    $wp_customize->add_section( 'banner01_section_head' , array(
        'title'      => __('Mostrar/Ocultar Banner 01','appointment'),
        'panel'  => 'appointment_banner01_options',
        'priority'   => 50,
    ) );

    //Hide Index Banner 01 Section

    $wp_customize->add_setting(
        'appointment_options[banner01_section_enabled]',
        array(
            'default' => '',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_section_enabled]',
        array(
            'label' => __('Esconder o Menu 01','appointment'),
            'section' => 'banner01_section_head',
            'type' => 'checkbox',
        )
    );

//bloco01
    $wp_customize->add_section( 'banner01_section_bloco01' , array(
        'title'      => __('Bloco 01', 'appointment'),
        'panel'  => 'appointment_banner01_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[banner01_bloco01_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-lawyer-hammer',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[banner01_bloco01_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'banner01_section_bloco01',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco01_title]',
        array(
            'default' => __('Easy to use','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco01_title]',
        array(
            'label' => __('Title','appointment'),
            'section' => 'banner01_section_bloco01',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco01_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco01_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'banner01_section_bloco01',
            'type' => 'textarea',
        )
    );

    //bloco02
    $wp_customize->add_section( 'banner01_section_bloco02' , array(
        'title'      => __('Bloco 02', 'appointment'),
        'panel'  => 'appointment_banner01_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[banner01_bloco02_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-lawyer-hammer',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[banner01_bloco02_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'banner01_section_bloco02',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco02_title]',
        array(
            'default' => __('Easy to use','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco02_title]',
        array(
            'label' => __('Title','appointment'),
            'section' => 'banner01_section_bloco02',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco02_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco02_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'banner01_section_bloco02',
            'type' => 'textarea',
        )
    );

    //bloco03
    $wp_customize->add_section( 'banner01_section_bloco03' , array(
        'title'      => __('Bloco 03', 'appointment'),
        'panel'  => 'appointment_banner01_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[banner01_bloco03_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-star-badge',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[banner01_bloco03_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'banner01_section_bloco03',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco03_title]',
        array(
            'default' => __('Easy to use','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco03_title]',
        array(
            'label' => __('Title','appointment'),
            'section' => 'banner01_section_bloco03',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[banner01_bloco03_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_banner01_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[banner01_bloco03_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'banner01_section_bloco03',
            'type' => 'textarea',
        )
    );


    function appointment_banner01_sanitize_html( $input ) {
        return force_balance_tags( $input );
    }


}
add_action( 'customize_register', 'appointment_banner01_customizer' );
?>