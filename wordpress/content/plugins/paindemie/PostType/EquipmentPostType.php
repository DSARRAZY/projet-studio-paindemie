<?php
namespace PainDeMie\PostType;

/**
 * Custom post type equipment
 */
class EquipmentPostType extends PostType
{
    const POST_TYPE_KEY = 'equipment';

    const POST_TYPE_LABELS = [
        'name' => 'Equipements',
        'singular_name' => 'Equipement',            
        'add_new' => 'Ajouter un équipement',        
        'add_new_item' => 'Ajouter un équipement',
        'edit_item' => 'Editer un équipement',
        'view' => 'Voir l\'équipement',        
        'search_items' => 'Rechercher un équipement',
        'not_found' => 'Aucun équipement trouvé',
        'not_found_in_trash'=> 'Aucun équipement trouvé dans la corbeille',
        'parent' => 'Equipement parent'
    ];

    const POST_TYPE_ARGS = [
        'labels' => self::POST_TYPE_LABELS,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-album',
        'supports' => [ // Fields / options active for the CPT 
            'title',
            'thumbnail',             
            'custom-fields',
        ],
        'capability_type' => 'equipment',
 
        // Rewrite URL
        'rewrite' => [
            'slug' => 'equipements'
        ],
    ];
    
    const CAPABILITIES = [                  
        'edit_equipment',
        'read_equipment',
        'delete_equipment',
        'edit_equipments',
        'edit_others_equipments',
        'delete_equipments',
        'publish_equipments',
        'read_private_equipments',
        'edit_equipments',
    ];
}




