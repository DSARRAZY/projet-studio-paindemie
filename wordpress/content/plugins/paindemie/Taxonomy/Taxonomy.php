<?php

namespace PainDeMie\Taxonomy;

/**
 * Mother class of our taxonomy
 */
class Taxonomy
{

    /**
     * Register a custom taxonomy
     */
    static public function register()
    {
        $labels = static::TAXONOMY_LABELS;

        // Declaration of our taxonomy
        register_taxonomy(
            static::TAXONOMY_KEY, // Key / username
            static::RELATED_CPT_LIST, // Association of our taxo with our Equipment cpt
            static::TAXONOMY_ARGS
        );
    }

    /**
     * Add admin specific caps for the taxonomy
     */
    static public function addAdminCaps()
    {
        // Retrieve the administrator role
        $adminRole = get_role('administrator');
        
        foreach (static::CAPABILITIES as $taxoCap) {
            $adminRole->add_cap($taxoCap);
        }
    }

    /**
     * Remove admin specific caps for the taxonomy
     */
    static public function removeAdminCaps()
    {
        // Retrieve the administrator role
        $adminRole = get_role('administrator');

        foreach (static::CAPABILITIES as $taxoCap) {
            $adminRole->remove_cap($taxoCap);
        }
    }

    /**
     * Add editor specific caps for the taxonomy
     */
    static public function addEditorCaps()
    {
        // Retrieve the editor role
        $adminRole = get_role('editor');

        foreach (static::CAPABILITIES as $taxoCap) {
            $adminRole->add_cap($taxoCap);
        }
    }

    /**
     * Remove editor specific caps for the taxonomy
     */
    static public function removeEditorCaps()
    {
        // Retrieve the editor role
        $adminRole = get_role('editor');

        foreach (static::CAPABILITIES as $taxoCap) {
            $adminRole->remove_cap($taxoCap);
        }
    }
}
