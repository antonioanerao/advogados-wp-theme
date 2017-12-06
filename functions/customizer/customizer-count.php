<?php
function appointment_count_customizer( $wp_customize ) {

//Service section panel
    $wp_customize->add_panel( 'appointment_count_options', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Countdown', 'appointment'),
    ) );

    $wp_customize->add_section( 'count_section_head' , array(
        'title'      => __('Mostrar/Ocultar Countdown','appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 50,
    ) );

    //Hide Index Countdown Section

    $wp_customize->add_setting(
        'appointment_options[count_section_enabled]',
        array(
            'default' => '',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_section_enabled]',
        array(
            'label' => __('Esconder o Countdown','appointment'),
            'section' => 'count_section_head',
            'type' => 'checkbox',
        )
    );

//bloco01
    $wp_customize->add_section( 'count_section_bloco01' , array(
        'title'      => __('Bloco 01', 'appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[count_bloco01_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-avatar-male',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[count_bloco01_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'count_section_bloco01',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[count_bloco01_title]',
        array(
            'default' => __('370','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco01_title]',
        array(
            'label' => __('Quantidade','appointment'),
            'section' => 'count_section_bloco01',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[count_bloco01_description]',
        array(
            'default' => 'Clientes',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco01_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'count_section_bloco01',
            'type' => 'text',
        )
    );

    //bloco02
    $wp_customize->add_section( 'count_section_bloco02' , array(
        'title'      => __('Bloco 02', 'appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[count_bloco02_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-security',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[count_bloco02_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'count_section_bloco02',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[count_bloco02_title]',
        array(
            'default' => __('490','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco02_title]',
        array(
            'label' => __('Quantidade','appointment'),
            'section' => 'count_section_bloco02',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[count_bloco02_description]',
        array(
            'default' => 'Processos Judiciais',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco02_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'count_section_bloco02',
            'type' => 'text',
        )
    );

    //bloco03
    $wp_customize->add_section( 'count_section_bloco03' , array(
        'title'      => __('Bloco 03', 'appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[count_bloco03_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-star-badge',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[count_bloco03_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'count_section_bloco03',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[count_bloco03_title]',
        array(
            'default' => __('Easy to use','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco03_title]',
        array(
            'label' => __('Quantidade','appointment'),
            'section' => 'count_section_bloco03',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[count_bloco03_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco03_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'count_section_bloco03',
            'type' => 'text',
        )
    );

    //bloco03
    $wp_customize->add_section( 'count_section_bloco03' , array(
        'title'      => __('Bloco 03', 'appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[count_bloco03_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa fa-users',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[count_bloco03_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'count_section_bloco03',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[count_bloco03_title]',
        array(
            'default' => __('17','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco03_title]',
        array(
            'label' => __('Quantidade','appointment'),
            'section' => 'count_section_bloco03',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[count_bloco03_description]',
        array(
            'default' => 'Colaboradores',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco03_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'count_section_bloco03',
            'type' => 'text',
        )
    );

    //bloco04
    $wp_customize->add_section( 'count_section_bloco04' , array(
        'title'      => __('Bloco 04', 'appointment'),
        'panel'  => 'appointment_count_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'appointment_options[count_bloco04_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'fa fa-building-o',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'appointment_options[count_bloco04_icon]', array(
        'label'   => __('Icon', 'appointment'),
        'style' => 'background-color: red',
        'section' => 'count_section_bloco04',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'appointment_options[count_bloco04_title]',
        array(
            'default' => __('04','appointment'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco04_title]',
        array(
            'label' => __('Quantidade','appointment'),
            'section' => 'count_section_bloco04',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'appointment_options[count_bloco04_description]',
        array(
            'default' => 'Minicipios Atendidos',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_count_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'appointment_options[count_bloco04_description]',
        array(
            'label' => __('Description','appointment'),
            'section' => 'count_section_bloco04',
            'type' => 'text',
        )
    );

    function appointment_count_sanitize_html( $input ) {
        return force_balance_tags( $input );
    }


}
add_action( 'customize_register', 'appointment_count_customizer' );
?>