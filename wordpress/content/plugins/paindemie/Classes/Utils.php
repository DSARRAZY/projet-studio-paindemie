<?php

namespace PainDeMie\Classes;

/**
 * Layout back office
 */
class Utils
{

    /**
     * Add  columns in the WP backoffice CPT equipment
     *
     * @param [string] $columns $columns column to add
     * @return void
     */
    static public function set_custom_edit_equipment_columns($columns)
    {
        $columns['equipment_category'] = 'Catégorie d\'équipement';
        $columns['equipment_quantity'] = 'Quantité';

        return $columns;
    }


    /**
     * Fill in the new columns CPT equipment
     *
     * @param [string] $column $column name of the column to complete 
     * @return void
     */
    static public function custom_equipment_column($column)
    {
        switch ($column) {

            case 'equipment_category':
                $term = get_the_terms(get_the_ID(), 'equipment_category_taxonomy');
                echo $term[0]->name;
                break;

            case 'equipment_quantity':
                the_field('equipment_quantity');
                break;
        }
    }


    /**
     * Add columns in the WP backoffice cpt reference
     *
     * @param [string] $columns column to add
     * @return void
     */
    static public function set_custom_edit_references_columns($columns)
    {
        $columns['reference_img'] = 'Image mise en avant';

        return $columns;
    }


    /**
     * Content of the new columns of our custom post type
     *
     * @param [string] $column name of the column to complete
     * @return void
     */
    static public function custom_references_column($column)
    {
        switch ($column) {

            case 'reference_img':
                the_post_thumbnail([90, 90]);
                break;
        }
    }



    /**
     * Modify the text "Enter your title here" of a custom post type
     *
     * @param [string] $title text to display in the "Enter your title here"
     * @return void
     */
    static public function change_title_cpt($title)
    {
        
        $screen = get_current_screen();

       
        if ('equipment' == $screen->post_type) {
          
            $title = 'Reference de l\'équipement';
        }
        
        if ('references' == $screen->post_type) {
            
            $title = 'Nom du groupe, de l\'artiste';
        }

        return $title;
    }   
}
