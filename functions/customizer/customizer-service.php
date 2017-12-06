<?php
function appointment_sobrenos_customizer( $wp_customize ) {

    //Service section panel
    $wp_customize->add_panel( 'appointment_sobrenos_options', array(
            'priority'       => 500,
            'capability'     => 'edit_theme_options',
            'title'      => __('Sobre Nós', 'appointment'),
        ) );

	$wp_customize->add_section( 'sobrenos_section_head' , array(
		'title'      => __('Título e mostrar/ocultar','appointment'),
		'panel'  => 'appointment_sobrenos_options',
		'priority'   => 50,
   	) );


	//Hide Index Service Section

	$wp_customize->add_setting(
    'appointment_options[sobrenos_section_enabled]',
    array(
        'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option'
    )
	);

	$wp_customize->add_control(
    'appointment_options[sobrenos_section_enabled]',
    array(
        'label' => __('Ocultar "Sobre Nós" da página inicial','appointment'),
        'section' => 'sobrenos_section_head',
        'type' => 'checkbox',
    )
	);

	$wp_customize->add_setting(
    'appointment_options[sobrenos_title]',
    array(
        'default' => __('Sobre Nós','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		'type' => 'option'
    )
	);

	$wp_customize->add_control(
    'appointment_options[sobrenos_title]',
    array(
        'label' => __('Título','appointment'),
        'section' => 'sobrenos_section_head',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'appointment_options[sobrenos_description]',
    array(
        'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		'type' => 'option'
    )
	);

	$wp_customize->add_control(
    'appointment_options[sobrenos_description]',
    array(
        'label' => __('Descrição','appointment'),
        'section' => 'sobrenos_section_head',
        'type' => 'text',
		'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
    )
	);

//sobrenos section one
	$wp_customize->add_section( 'sobrenos_section_one' , array(
		'title'      => __('Bloco 01', 'appointment'),
		'panel'  => 'appointment_sobrenos_options',
		'priority'   => 100,
		'sanitize_callback' => 'sanitize_text_field',
   	) );

	$wp_customize->add_setting(
    'appointment_options[sobrenos_one_title]',
    array(
        'default' => __('Fácil de Editar','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		'type' => 'option'
    )
	);
	$wp_customize->add_control(
    'appointment_options[sobrenos_one_title]',
    array(
        'label' => __('Título','appointment'),
        'section' => 'sobrenos_section_one',
        'type' => 'text',
    )
	);

	$wp_customize->add_setting(
    'appointment_options[sobrenos_one_description]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		 'type' => 'option'
    )
	);
	$wp_customize->add_control(
    'appointment_options[sobrenos_one_description]',
    array(
        'label' => __('Descrição','appointment'),
        'section' => 'sobrenos_section_one',
        'type' => 'textarea',
    )
);
//Second sobrenos

$wp_customize->add_section( 'sobrenos_section_two' , array(
		'title'      => __('Bloco 02', 'appointment'),
		'panel'  => 'appointment_sobrenos_options',
		'priority'   => 200,
   	) );

$wp_customize->add_setting(
    'appointment_options[sobrenos_two_title]',
    array(
        'default' => __('Fácil de usar','appointment'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		'type' => 'option',
    )
);
$wp_customize->add_control(
    'appointment_options[sobrenos_two_title]',
    array(
        'label' => __('Título' ,'appointment'),
        'section' => 'sobrenos_section_two',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'appointment_options[sobrenos_two_description]',
    array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consec tetur adipisicing elit dignissim dapib tumst.',
		 'capability'     => 'edit_theme_options',
		 'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
		 'type' => 'option',
    )
);
$wp_customize->add_control(
		'appointment_options[sobrenos_two_description]',
		array(
        'label' => __('Descrição','appointment'),
        'section' => 'sobrenos_section_two',
        'type' => 'textarea',
    )
);


//Third Service section
    $wp_customize->add_section( 'sobrenos_section_three' , array(
        'title'      => __('Imagem', 'appointment'),
        'panel'  => 'appointment_sobrenos_options',
        'priority'   => 300,
    ) );

    $wp_customize->add_setting(
        'appointment_options[sobrenos_three_description]',
        array(
            'default' => 'http://themes.iamabdus.com/trust/1.1/img/home/info-img.jpg',
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'appointment_sobrenos_sanitize_html',
            'type' =>'option',
        )
    );
    $wp_customize->add_control(
        'appointment_options[sobrenos_three_description]',
        array(
            'label' => __('Link da imagem','appointment'),
            'section' => 'sobrenos_section_three',
            'type' => 'text',
        )
    );

    function appointment_sobrenos_sanitize_html( $input )
    {
        return force_balance_tags( $input );
    }


}
add_action( 'customize_register', 'appointment_sobrenos_customizer' );
?>