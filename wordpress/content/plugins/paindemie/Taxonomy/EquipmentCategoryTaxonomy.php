<?php

namespace PainDeMie\Taxonomy;

use PainDeMie\PostType\EquipmentPostType;

/**
 * Taxonomy equipment_category_taxonomy
 */
class EquipmentCategoryTaxonomy extends Taxonomy {

    
    const TAXONOMY_KEY = 'equipment_category_taxonomy';
    
    const RELATED_CPT_LIST = [EquipmentPostType::POST_TYPE_KEY];

    const TAXONOMY_LABELS = [
        'name' => 'Catégories d\'équipements',
        'singular_name' => 'Catégorie d\'équipement',
        'add_new_item' => 'Ajouter une catégorie d\'équipement',
        'add_new' => 'Ajouter une catégorie d\'équipement',        
        'add_new_item' => 'Ajouter une catégorie d\'équipement',
        'edit_item' => 'Editer une catégorie d\'équipement',
        'view' => 'Voir la catégorie',        
        'search_items' => 'Rechercher une catégorie',
        'not_found' => 'Aucune catégorie trouvée',
        'not_found_in_trash'=> 'Aucune catégorie trouvée dans la corbeille',
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
            'slug' => 'categorie-equipement'
        ],
    ];

    const CAPABILITIES = [
        'manage_terms' => 'manage_equipments',
        'edit_terms' => 'edit_equipments',
        'delete_terms' => 'delete_equipments',
        'assign_terms' => 'assign_equipments'
    ];
}
