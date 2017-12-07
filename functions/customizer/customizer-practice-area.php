<?php
function coop_practice_area_customizer( $wp_customize ) {

//Service section panel
    $wp_customize->add_panel( 'coop_practice_area_options', array(
        'priority'       => 500,
        'capability'     => 'edit_theme_options',
        'title'      => __('Áreas de Atuação', 'coop'),
    ) );

    $wp_customize->add_section( 'practice_area_section_head' , array(
        'title'      => __('Mostrar/Ocultar Área(s) de atuação','coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 50,
    ) );

    //Hide Index Banner 01 Section

    $wp_customize->add_setting(
        'coop_options[practice_area_section_enabled]',
        array(
            'default' => '',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_section_enabled]',
        array(
            'label' => __('Esconder área(s) de atuação','coop'),
            'section' => 'practice_area_section_head',
            'type' => 'checkbox',
        )
    );

//bloco01
    $wp_customize->add_section( 'practice_area_section_bloco01' , array(
        'title'      => __('Bloco 01', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco01_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-avatar-family',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco01_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco01',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco01_title]',
        array(
            'default' => __('Family Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco01_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco01',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco01_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco01_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco01',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco01_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img1.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco01_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco01',
            'type' => 'text',
        )
    );


//bloco02
    $wp_customize->add_section( 'practice_area_section_bloco02' , array(
        'title'      => __('Bloco 02', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco02_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-gun',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco02_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco02',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco02_title]',
        array(
            'default' => __('Criminal Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco02_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco02',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco02_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco02_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco02',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco02_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img2.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco02_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco02',
            'type' => 'text',
        )
    );


    //bloco03
    $wp_customize->add_section( 'practice_area_section_bloco03' , array(
        'title'      => __('Bloco 03', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco03_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-piggy-bank',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco03_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco03',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco03_title]',
        array(
            'default' => __('Financial Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco03_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco03',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco03_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco03_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco03',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco03_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img3.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco03_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco03',
            'type' => 'text',
        )
    );

    //bloco04
    $wp_customize->add_section( 'practice_area_section_bloco04' , array(
        'title'      => __('Bloco 04', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco04_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-airplane',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco04_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco04',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco04_title]',
        array(
            'default' => __('Immigration Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco04_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco04',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco04_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco04_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco04',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco04_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img4.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco04_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco04',
            'type' => 'text',
        )
    );


    //bloco05
    $wp_customize->add_section( 'practice_area_section_bloco05' , array(
        'title'      => __('Bloco 05', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco05_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-avatar-female',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco05_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco05',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco05_title]',
        array(
            'default' => __('Sexual Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco05_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco05',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco05_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco05_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco05',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco05_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img5.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco05_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco05',
            'type' => 'text',
        )
    );

    //bloco06
    $wp_customize->add_section( 'practice_area_section_bloco06' , array(
        'title'      => __('Bloco 06', 'coop'),
        'panel'  => 'coop_practice_area_options',
        'priority'   => 100,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_setting(
        'coop_options[practice_area_bloco06_icon]', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'        => 'icon-home',
        'capability'     => 'edit_theme_options',
        'type' => 'option',
    ));

    $wp_customize->add_control( 'coop_options[practice_area_bloco06_icon]', array(
        'label'   => __('Icon', 'coop'),
        'style' => 'background-color: red',
        'section' => 'practice_area_section_bloco06',
        'type'    => 'text',
    ));

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco06_title]',
        array(
            'default' => __('Land Law','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco06_title]',
        array(
            'label' => __('Title','coop'),
            'section' => 'practice_area_section_bloco06',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco06_description]',
        array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco06_description]',
        array(
            'label' => __('Description','coop'),
            'section' => 'practice_area_section_bloco06',
            'type' => 'textarea',
        )
    );

    $wp_customize->add_setting(
        'coop_options[practice_area_bloco06_image]',
        array(
            'default' => __('http://themes.iamabdus.com/trust/1.1/img/home/g-img6.jpg','coop'),
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'coop_practice_area_sanitize_html',
            'type' => 'option'
        )
    );
    $wp_customize->add_control(
        'coop_options[practice_area_bloco06_image]',
        array(
            'label' => __('Link da imagem','coop'),
            'section' => 'practice_area_section_bloco06',
            'type' => 'text',
        )
    );


    function coop_practice_area_sanitize_html( $input ) {
        return force_balance_tags( $input );
    }


}
add_action( 'customize_register', 'coop_practice_area_customizer' );
?>