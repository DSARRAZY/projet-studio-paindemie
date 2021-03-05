<?php

namespace PainDeMie\PostType;

/**
 * Mother class of our custom post type
 */
class PostType
{

    /**
     * Register the custom post type
     */
    static public function register()
    {
        
        // Declaration of our CPT
        register_post_type(
            static::POST_TYPE_KEY,
            static::POST_TYPE_ARGS
        );
    }

    /**
     * Add admin caps for the CPT
     
     */
    static public function addAdminCaps()
    {
        // Retrieve the administrator role
        $adminRole = get_role('administrator');

        // For each capability, we add it for the admin
        foreach (static::CAPABILITIES as $cptCap) {
            $adminRole->add_cap($cptCap);
        }
    }


    /**
     * Remove admin caps for the CPT
     *
     */
    static public function removeAdminCaps()
    {
        // Retrieve the administrator role
         $adminRole = get_role('administrator');

        // For each capability, we delete it for the admin
        foreach (static::CAPABILITIES as $cptCap) {
            $adminRole->remove_cap($cptCap);
        }
    }

    /**
     * Add editor specific caps for the CPT
     */
    static public function addEditorCaps()
    {
        // Retrieve the administrator role
        $adminRole = get_role('editor');
        // For each heading planned for the admin on the current CPT, we add the heading
        foreach (static::CAPABILITIES as $cptCap) {
            $adminRole->add_cap($cptCap);
        }
    }

    /**
     * Remove editor specific caps for the CPT
     */
    static public function removeEditorCaps()
    {
        // Retrieve the administrator role
        $adminRole = get_role('editor');
        // For each heading planned for the admin on the current CPT, we add the heading
        foreach (static::CAPABILITIES as $cptCap) {
            $adminRole->remove_cap($cptCap);
        }
    }
}
