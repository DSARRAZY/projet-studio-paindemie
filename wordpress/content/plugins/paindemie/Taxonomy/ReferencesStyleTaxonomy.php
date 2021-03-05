<?php

namespace PainDeMie\Taxonomy;

use PainDeMie\PostType\ReferencesPostType;

/**
 * Taxonomy references_style_taxonomy
 */
class ReferencesStyleTaxonomy extends Taxonomy {


    const TAXONOMY_KEY = 'references_style_taxonomy';

    const RELATED_CPT_LIST = [ReferencesPostType::POST_TYPE_KEY];

    const TAXONOMY_LABELS = [
        'name' => 'Classement par styles de musique',
        'singular_name' => 'Classement par style de musique',
        'add_new_item' => 'Ajouter un style de musique',
        'add_new' => 'Ajouter un style de musique',        
        'add_new_item' => 'Ajouter un style de musique',
        'edit_item' => 'Editer un style de musique',
        'view' => 'Voir le style de musique',        
        'search_items' => 'Rechercher un style de musique',
        'not_found' => 'Aucun un style de musique trouvé',
        'not_found_in_trash'=> 'Aucun style de musique trouvée dans la corbeille',
        'parent' => 'Catégorie parent'
    ];

    const TAXONOMY_ARGS = [
        'labels' => self::TAXONOMY_LABELS,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'capabilities' => self::CAPABILITIES,
        // Rewrite URL
        'rewrite' => [
            'slug' => 'style-musique'
        ],
    ];

    const CAPABILITIES =  [
        'manage_terms' => 'manage_styles',
        'edit_terms' => 'edit_style',
        'delete_terms' => 'delete_styles',
        'assign_terms' => 'assign_styles'     
    ];
}

