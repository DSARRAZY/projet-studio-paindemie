<?php

namespace PainDeMie;

use PainDeMie\PostType\EquipmentPostType;
use PainDeMie\PostType\ReferencesPostType;
use PainDeMie\Taxonomy\EquipmentCategoryTaxonomy;
use PainDeMie\Taxonomy\ReferencesStyleTaxonomy;
use PainDeMie\Roles\CustomizerEditorRole;

define('UTILS_CLASS', 'PainDeMie\Classes\Utils');
define('CUSTOM_EDITOR_ROLE', 'PainDeMie\Roles\CustomizerEditorRole');


class Plugin {
    
    /**
     * Start the plugin
     */
    public function run() {

    // Activation and deactivation of our plugin
    register_activation_hook(PAINDEMIE_PLUGIN_FILE, [$this, 'onPluginActivation']);
    register_deactivation_hook(PAINDEMIE_PLUGIN_FILE, [$this, 'onPluginDeactivation']);

    // Add custom post types and taxonomies   
    add_action('init', [$this, 'registerPostTypes']);
    add_action('init', [$this, 'registerTaxonomies']);

    // Add  columns equipment category in the WP backoffice custom post type equipment
    add_filter('manage_equipment_posts_columns', [UTILS_CLASS, 'set_custom_edit_equipment_columns']);
    add_action('manage_equipment_posts_custom_column' , [UTILS_CLASS, 'custom_equipment_column'], 10, 2 );

    // Add columns pictures references in the WP backoffice custom post type reference
    add_filter('manage_references_posts_columns', [UTILS_CLASS, 'set_custom_edit_references_columns']);
    add_action('manage_references_posts_custom_column' , [UTILS_CLASS, 'custom_references_column'], 10, 2 );

    // Modify the text "Enter your title here" of a custom post type
    add_filter('enter_title_here', [UTILS_CLASS, 'change_title_cpt']);

    // Hide the menu items that are not useful for the editor role
    add_action('admin_menu', [CUSTOM_EDITOR_ROLE, 'hideMenuItemsForEditor']);
    }


    /**
     * Register custom post types
     */
    public function registerPostTypes(){
        EquipmentPostType::register();
        ReferencesPostType::register();
    }


    /**
     * Register taxonomies
     */
    public function registerTaxonomies(){
        EquipmentCategoryTaxonomy::register();
        ReferencesStyleTaxonomy::register();
    }
    
    
    /**
     * Add capabilities custom post type and taxonomies
     * For administrator and editor
     *
     */
    public function addCapabilities()
    {
        // Add for admin role
        EquipmentPostType::addAdminCaps();
        ReferencesPostType::addAdminCaps();        
        EquipmentCategoryTaxonomy::addAdminCaps();
        ReferencesStyleTaxonomy::addAdminCaps();
        
        // Add for editor role
        EquipmentPostType::addEditorCaps();
        ReferencesPostType::addEditorCaps();
        EquipmentCategoryTaxonomy::addEditorCaps();
        ReferencesStyleTaxonomy::addEditorCaps();
    }
    
    
    /**
     * Remove capabilities custom post types and taxonomies
     * For administrator and editor
     *
     */
    public function removeCapabilities()
    {
        // Remove for admin role
        EquipmentPostType::removeAdminCaps();
        ReferencesPostType::removeAdminCaps();
        EquipmentCategoryTaxonomy::removeAdminCaps();
        ReferencesStyleTaxonomy::removeAdminCaps();
        
        // Remove for editor role
        EquipmentPostType::removeEditorCaps();
        ReferencesPostType::removeEditorCaps();
        EquipmentCategoryTaxonomy::removeEditorCaps();
        ReferencesStyleTaxonomy::removeEditorCaps();
    }


    /**
     * Add capabilities for editor on activation
     *
     */
    public function capsEditorActivation()
    {       
        CustomizerEditorRole::addCapsActivation();
    }


    /**
     * Remove capabilities for editor on deactivation
     *
     */
    public function capsEditorDeactivation()
    {       
        CustomizerEditorRole::removeCapsDeactivation();
    }



    /**
     * On plugin activation
     */
    public function onPluginActivation() {
        $this->addCapabilities();
        $this->capsEditorActivation();
        $this->registerPostTypes();
        $this->registerTaxonomies();

        flush_rewrite_rules();
    }



    /**
     * On plugin deactivation
     */
    public function onPluginDeactivation() {
        $this->removeCapabilities();
        $this->capsEditorDeactivation();

        flush_rewrite_rules();
    }
}

