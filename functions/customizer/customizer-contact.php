<?php
function coop_contact_customizer( $wp_customize ) {

//Service section panel
    $wp_customize->add_panel( 'coop_contact_options', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Página de Contato', 'coop'),
    ) );

//titulo
    $wp_customize->add_section( 'contact_section_titulo' , array(
        'title'      => __('Título e descrição', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );


    $wp_customize->add_setting(
        'coop_options[contact_titulo_title]',
        array(
            'default' => __('Fale Conosco','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_titulo_title]',
        array(
            'label' => __('Título','coop'),
            'section' => 'contact_section_titulo',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[contact_titulo_description]',
        array(
            'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_titulo_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'contact_section_titulo',
            'type' => 'textarea',
        )
    );


//endereco
    $wp_customize->add_section( 'contact_section_endereco' , array(
        'title'      => __('Endereço', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'coop_options[contact_endereco_title]',
        array(
            'default' => __('Rua Alexandre Farhat, 299, Bairro José Augusto, Sala da Cooprotec, Rio Branco - Acre','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_endereco_title]',
        array(
            'label' => __('Endereço','coop'),
            'section' => 'contact_section_endereco',
            'type' => 'textarea',
        )
    );

    //telefone
    $wp_customize->add_section( 'contact_section_telefone' , array(
        'title'      => __('Telefone', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'coop_options[contact_telefone_title]',
        array(
            'default' => __('(XX) XXXX-XXXX','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_telefone_title]',
        array(
            'label' => __('Telefone para contato','coop'),
            'section' => 'contact_section_telefone',
            'type' => 'textarea',
        )
    );

    //email
    $wp_customize->add_section( 'contact_section_email' , array(
        'title'      => __('E-Mail', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'coop_options[contact_email_title]',
        array(
            'default' => __('contato@dominio.com.br','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_email_title]',
        array(
            'label' => __('E-Mail','coop'),
            'section' => 'contact_section_email',
            'type' => 'textarea',
        )
    );

    //destinatario
    $wp_customize->add_section( 'contact_section_destinatario' , array(
        'title'      => __('E-Mail Destinatário', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'coop_options[contact_destinatario_title]',
        array(
            'default' => __('contato@dominio.com.br','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_destinatario_title]',
        array(
            'label' => __('E-mail onde você irá receber as mensagens','coop'),
            'section' => 'contact_section_destinatario',
            'type' => 'text',
        )
    );

    //googlemaps
    $wp_customize->add_section( 'contact_section_googlemaps' , array(
        'title'      => __('Google Maps', 'coop'),
        'panel'  => 'coop_contact_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_setting(
        'coop_options[contact_googlemaps_title]',
        array(
            'default' => __('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.62118880453!2d-67.81296698465258!3d-9.965441109388363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917f8c57934ccd2f%3A0x9b3a8e9c2fc6e536!2sThe+Place+coworking!5e0!3m2!1spt-BR!2sbr!4v1512745251410" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_contact_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[contact_googlemaps_title]',
        array(
            'label' => __('Endereço do Google Maps','coop'),
            'section' => 'contact_section_googlemaps',
            'type' => 'textarea',
        )
    );

    function coop_contact_sanitize_html( $input ) {
        return force_balance_tags( $input );
    }

}
add_action( 'customize_register', 'coop_contact_customizer' );
?>