<?php

function paindemie_register_menus() {
    // on déclare des emplacements pour les menus
    register_nav_menus(
        [
            'main-menu' => 'Menu principal',
            'footer-menu' => 'Menu du footer'
        ]
    );
}

add_action('after_setup_theme', 'paindemie_register_menus');

function getMainMenuItems() {
    // get_nav_menu_locations() nous renvoie un array avec 'identifiant (main-menu et footer-menu donnés plus haut)-emplacement-menu' => et en valeur  notre id-menu-associé-dans-le-BO
    $menuLocations = get_nav_menu_locations();
    // var_dump($menuLocations);
    // exit;
    // on récupère l'id du menu
    $mainMenuId = $menuLocations['main-menu'];
    // wp_get_nav_menu_items() nous renvoie un array avec les items d'un menu; récupère tous les éléments de menu d'un menu de navigation.
    return wp_get_nav_menu_items($mainMenuId);
}

function getFooterMenuItems() {
    // get_nav_menu_locations() nous renvoie un array avec 'identifiant (main-menu et footer-menu donnés plus haut)-emplacement-menu' => et en valeur  notre id-menu-associé-dans-le-BO
    $menuLocations = get_nav_menu_locations();
    // var_dump($menuLocations);
    // exit;
    // on récupère l'id du menu
    $footerMenuId = $menuLocations['footer-menu'];
    // wp_get_nav_menu_items() nous renvoie un array avec les items d'un menu; récupère tous les éléments de menu d'un menu de navigation.
    return wp_get_nav_menu_items($footerMenuId);
}