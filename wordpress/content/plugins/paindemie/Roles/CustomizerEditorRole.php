<?php

namespace PainDeMie\Roles;

/**
 * Modification of the back office for the editor role
 */
class CustomizerEditorRole
{

    // Capabilities for Editor role 
    const CAPABILITIES = [
        'edit_theme_options',
    ];

     /**
     * Add capabilities when activating the plugin for Editor role 
     */
    static public function addCapsActivation()
    {
        // Retrieve the editor role
        $editorRole = get_role('editor');

        foreach (static::CAPABILITIES as $editorCap) {
            $editorRole->add_cap($editorCap);
        }
    }

    
    /**
     * Remove capabilities when deactivating the plugin for Editor role 
     */
    public static function removeCapsDeactivation()
    {
        // Retrieve the editor role
        $editorRole = get_role('editor');
       
        foreach (static::CAPABILITIES as $editorCap) {
            $editorRole->remove_cap($editorCap);
        }
    }

    

    /**
     * Hide the menu items that are not useful for the editor role
     *
     * @return void
     */
    static public function hideMenuItemsForEditor()
    {
        $user = wp_get_current_user();
        if (in_array('editor', $user->roles)) {
            remove_menu_page('edit.php');//Posts
            remove_menu_page('edit-comments.php');//Comments
            remove_menu_page('tools.php');//Tools
            remove_menu_page('edit.php?post_type=page');//Pages
            remove_menu_page( 'wpcf7' ); //ContactForm
        }
    }
}