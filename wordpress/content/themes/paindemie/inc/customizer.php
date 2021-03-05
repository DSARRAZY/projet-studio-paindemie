<?php

function paindemie_theme_customize_register($wp_customize)
{
    $wp_customize->add_panel(
        'paindemie_theme',
        [
            'title' => 'Configuration du thème Pain de Mie',
            'priority' => 0
        ]
    );
    $wp_customize->add_section(
        'paindemie_theme_footer',
        [
            'title' => 'Footer',
            'panel' => 'paindemie_theme'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_phone',
        [
            'type' => 'theme_mod'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_email',
        [
            'type' => 'theme_mod'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_address',
        [
            'type' => 'theme_mod'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_postalcode',
        [
            'type' => 'theme_mod'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_city',
        [
            'type' => 'theme_mod'
        ]
    );
    $wp_customize->add_setting(
        'paindemie_theme_footer_color',
        [
            'default'    => '#A11321',
            'type'       => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
            'sanitize_callback'  => 'esc_attr',
        ],
    );
    $wp_customize->add_control(
        'paindemie_theme_footer_phone',
        [
            'type' => 'tel',
            'label' => 'Téléphone du footer',
            'section' => 'paindemie_theme_footer'
        ]
    );
    $wp_customize->add_control(
        'paindemie_theme_footer_email',
        [
            'type' => 'email',
            'label' => 'Email du footer',
            'section' => 'paindemie_theme_footer'
        ]
    );
    $wp_customize->add_control(
        'paindemie_theme_footer_address',
        [
            'type' => 'text',
            'label' => 'Adresse du footer',
            'section' => 'paindemie_theme_footer'
        ]
    );
    $wp_customize->add_control(
        'paindemie_theme_footer_postalcode',
        [
            'type' => 'number',
            'label' => 'Code postal du footer',
            'section' => 'paindemie_theme_footer'
        ]
    );
    $wp_customize->add_control(
        'paindemie_theme_footer_city',
        [
            'type' => 'text',
            'label' => 'Ville du footer',
            'section' => 'paindemie_theme_footer'
        ]
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'paindemie_theme_footer_color',
            [
                'label'      => 'Couleur du fond du footer',
                'settings'   => 'paindemie_theme_footer_color',
                'section'    => 'paindemie_theme_footer',
            ],
        )
    );
    $wp_customize->add_section(
        'paindemie_theme_tex',
        [
            'title' => 'tex',
            'panel' => 'paindemie_theme'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_tex_phone',
        [
            'type' => 'theme_mod'
        ]
    );

    //add custom description header
    $wp_customize->add_section(
        'paindemie_theme_headerHome',
        [
            'title' => 'Description en-tête accueil site',
            'panel' => 'paindemie_theme'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_header_description1',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_header_description2',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_header_description3',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_header_description4',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_header_description5',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_header_description1',
        [
            'type' => 'text',
            'label' => 'Description 1',
            'section' => 'paindemie_theme_headerHome'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_header_description2',
        [
            'type' => 'text',
            'label' => 'Description 2',
            'section' => 'paindemie_theme_headerHome'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_header_description3',
        [
            'type' => 'text',
            'label' => 'Description 3',
            'section' => 'paindemie_theme_headerHome'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_header_description4',
        [
            'type' => 'text',
            'label' => 'Description 4',
            'section' => 'paindemie_theme_headerHome'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_header_description5',
        [
            'type' => 'text',
            'label' => 'Description 5',
            'section' => 'paindemie_theme_headerHome'
        ]
    );

    //Studio description 
    $wp_customize->add_section(
        'paindemie_theme_studio',
        [
            'title' => 'Description studio',
            'panel' => 'paindemie_theme'
        ]
    );

//texte 1
    $wp_customize->add_setting(
        'paindemie_theme_studio_accroche1',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_accroche1',
        [
            'type' => 'text',
            'label' => 'Phrase d\'accroche 1',
            'section' => 'paindemie_theme_studio'
        ],
    );

    $wp_customize->add_setting(
        'paindemie_theme_studio_texte1',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_texte1',
        [
            'type' => 'textarea',
            'label' => 'Texte 1',
            'section' => 'paindemie_theme_studio'
        ],
    );

//texte 2
    $wp_customize->add_setting(
        'paindemie_theme_studio_accroche2',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_accroche2',
        [
            'type' => 'text',
            'label' => 'Phrase d\'accroche 2',
            'section' => 'paindemie_theme_studio'
        ],
    );

    $wp_customize->add_setting(
        'paindemie_theme_studio_texte2',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_texte2',
        [
            'type' => 'textarea',
            'label' => 'Texte 2',
            'section' => 'paindemie_theme_studio'
        ],
    );

    //texte 3
    $wp_customize->add_setting(
        'paindemie_theme_studio_accroche3',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_accroche3',
        [
            'type' => 'text',
            'label' => 'Phrase d\'accroche 3',
            'section' => 'paindemie_theme_studio'
        ],
    );

    $wp_customize->add_setting(
        'paindemie_theme_studio_texte3',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_texte3',
        [
            'type' => 'textarea',
            'label' => 'Texte 3',
            'section' => 'paindemie_theme_studio'
        ],
    );

//texte 4
    $wp_customize->add_setting(
        'paindemie_theme_studio_accroche4',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_accroche4',
        [
            'type' => 'text',
            'label' => 'Phrase d\'accroche 4',
            'section' => 'paindemie_theme_studio'
        ],
    );

    $wp_customize->add_setting(
        'paindemie_theme_studio_texte4',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_studio_texte4',
        [
            'type' => 'textarea',
            'label' => 'Texte 4',
            'section' => 'paindemie_theme_studio'
        ],
    );

//custommize title,paragraph, telephon number page contact
    //title
    $wp_customize->add_section(
        'paindemie_theme_contact',
        [
            'title' => 'Titre, sous titre, numéro de téléphone de la page contact',
            'panel' => 'paindemie_theme'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_contact_title',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_contact_title',
        [
            'type' => 'text',
            'label' => 'Le titre de la page contact',
            'section' => 'paindemie_theme_contact'
        ]
    );

    //paragraph
    $wp_customize->add_setting(
        'paindemie_theme_contact_subtitle',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_contact_subtitle',
        [
            'type' => 'text',
            'label' => 'Le sous titre de la page contact',
            'section' => 'paindemie_theme_contact'
        ]
    );

    //telephon number contact
    
    $wp_customize->add_setting(
        'paindemie_theme_contact_phone',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_contact_phone',
        [
            'type' => 'tel',
            'label' => 'Téléphone',
            'section' => 'paindemie_theme_contact'
        ]
    );

    //Customize page équipement
    //title
    $wp_customize->add_section(
        'paindemie_theme_equipment',
        [
            'title' => 'Titre, sous titre de la page équipement',
            'panel' => 'paindemie_theme'
        ]
    );

    $wp_customize->add_setting(
        'paindemie_theme_equipment_title',
        [
            'type' => 'theme_mod'
        ]
    );

    $wp_customize->add_control(
        'paindemie_theme_equipment_title',
        [
            'type' => 'text',
            'label' => 'Le titre de la page équipement',
            'section' => 'paindemie_theme_equipment'
        ]
    );

    //paragraph
    $wp_customize->add_setting(
        'paindemie_theme_equipment_subtitle',
        [
            'type' => 'theme_mod'
        ]
    );
    
    $wp_customize->add_control(
        'paindemie_theme_equipment_subtitle',
        [
            'type' => 'text',
            'label' => 'Le sous titre de la page équipement',
            'section' => 'paindemie_theme_equipment'
        ]
    );
}
add_action('customize_register', 'paindemie_theme_customize_register');

function paindemie_customizer_css()
{
?>
    <style type="text/css">
        .contenaireFooter {
            background-color: <?php echo get_theme_mod('paindemie_theme_footer_color'); ?>;
        }
    </style>
<?php
};
add_action('wp_head', 'paindemie_customizer_css');