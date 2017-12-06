<?php
function appointment_header_contact_customizer( $wp_customize ) {

//Header Contact section panel
    $wp_customize->add_panel( 'appointment_header_contact_options', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Contatos Cabeçalho', 'appointment'),
    ) );

//Link facebook
    $wp_customize->add_section( 'header_contact_section_facebook' , array(
        'title'      => __('Link do perfil/página no Facebook', 'appointment'),
        'panel'  => 'appointment_header_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'theme_options[header_contact_facebook]',
        array(
            'default' => __('#','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_header_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'theme_options[header_contact_facebook]',
        array(
            'label' => __('Link perfil/página Facebook','appointment'),
            'section' => 'header_contact_section_facebook',
            'type' => 'text',
        )
    );

//Link twitter
    $wp_customize->add_section( 'header_contact_section_twitter' , array(
        'title'      => __('Link do twitter', 'appointment'),
        'panel'  => 'appointment_header_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'theme_options[header_contact_twitter]',
        array(
            'default' => __('#','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_header_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'theme_options[header_contact_twitter]',
        array(
            'label' => __('Link do seu Twitter','appointment'),
            'section' => 'header_contact_section_twitter',
            'type' => 'text',
        )
    );

//Link linkedin
    $wp_customize->add_section( 'header_contact_section_linkedin' , array(
        'title'      => __('Link do linkedin', 'appointment'),
        'panel'  => 'appointment_header_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'theme_options[header_contact_linkedin]',
        array(
            'default' => __('#','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_header_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'theme_options[header_contact_linkedin]',
        array(
            'label' => __('Link do seu Linkedin','appointment'),
            'section' => 'header_contact_section_linkedin',
            'type' => 'text',
        )
    );

//Dias de trabalho
    $wp_customize->add_section( 'header_contact_section_dias_horas' , array(
        'title'      => __('Dias e horário de funcionamento', 'appointment'),
        'panel'  => 'appointment_header_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'theme_options[header_contact_dias_horas]',
        array(
            'default' => __('Segunda a Sexta','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_header_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'theme_options[header_contact_dias_horas]',
        array(
            'label' => __('Dias e horário de funcionamento','appointment'),
            'section' => 'header_contact_section_dias_horas',
            'type' => 'text',
        )
    );

//Telefone
    $wp_customize->add_section( 'header_contact_section_telefone' , array(
        'title'      => __('Telefone de contato', 'appointment'),
        'panel'  => 'appointment_header_contact_options',
        'priority'   => 200,
    ) );

    $wp_customize->add_setting(
        'theme_options[header_contact_telefone]',
        array(
            'default' => '(xx) xxxx-xxxx',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_header_contact_sanitize_html',
            'type' => 'option',
        )
    );
    $wp_customize->add_control(
        'theme_options[header_contact_telefone]',
        array(
            'label' => __('Telefone de contato','appointment'),
            'section' => 'header_contact_section_telefone',
            'type' => 'text',
        )
    );


    function appointment_header_contact_sanitize_html( $input )
    {
        return force_balance_tags( $input );
    }

}
add_action( 'customize_register', 'appointment_header_contact_customizer' );
?>