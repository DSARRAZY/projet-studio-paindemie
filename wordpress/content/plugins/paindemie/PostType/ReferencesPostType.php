<?php

namespace PainDeMie\PostType;

/**
 * Custom post type references
 */
class ReferencesPostType extends PostType
{
    const POST_TYPE_KEY = 'references';
    
    const POST_TYPE_LABELS = [       
        'name' => 'Références, artistes',
        'singular_name' => 'Référence, artiste',
        'add_new' => 'Ajouter une réference, un artiste',
        'add_new_item' => 'Ajouter une référence, un artiste',
        'edit_item' => 'Editer une référence, un artiste',
        'view' => 'Voir la réferences, l\'artiste',   
        'search_items' => 'Rechercher une références, un artiste',
        'not_found' => 'Aucune réference, artiste trouvé',
        'not_found_in_trash'=> 'Aucune réference, artiste trouvé dans la corbeille',
        'parent' => 'Reference parente'
    ];

    const POST_TYPE_ARGS = [
        'labels' => self::POST_TYPE_LABELS,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => [ // Fields / options active for the CPT 
            'title',
            'thumbnail',            
            'custom-fields'
        ],
        'capability_type' => 'reference'
    ];
    
    const CAPABILITIES = [
        'edit_reference',
        'read_reference',
        'delete_reference',
        'edit_references',
        'edit_others_references',
        'delete_references',
        'publish_references',
        'read_private_references',
        'edit_references'
    ];
}

