<?php

function paindemie_theme_enqueue_scripts()  {

/// google fonts
/*wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto+Slab&display=swap'
);

wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Carter+One&display=swap'
);*/

wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Carter+One&family=Roboto:ital,wght@0,300;0,400;0,500;1,100;1,400&display=swap', [], null);
    

wp_enqueue_style(
        'main-css',
        get_theme_file_uri('dist/index.css'),
        [],
        '20210112'
    );

    
    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('dist/index.js'),
        [],
        '20210112',
        true
    );
}
add_action('wp_enqueue_scripts', 'paindemie_theme_enqueue_scripts');

// function jquery
function wpm_jquery() {
if ( !is_admin() ) {
//La fonction supprime l'utilisation du fichier original de JQuery sur votre serveur
    wp_deregister_script( 'jquery' );
//Elle enregistre alors le nouvel emplacement de JQuery, chargé depuis le CDN de Google
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' ), false, null, true );
//La fonction charge JQuery
    wp_enqueue_script( 'jquery' );
   }
}

add_action( 'init', 'wpm_jquery' );

//Function call Bootstrap CDN*/

function bootstrap_css_js_web() {

    //bootstrap_css_js_web
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );

    wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.2.1.slim.min.js', array( 'jquery' ),null, true );
    wp_enqueue_script( 'jquery-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), null, true );

    //jquery
    //wp_enqueue_script( 'jquery' );

    //script js elements and style 
    

} 
add_action('wp_enqueue_scripts', 'bootstrap_css_js_web'); 

//Login custom wordpress
function login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/login.css' );
}
add_action( 'login_enqueue_scripts', 'login_stylesheet' );

/* URL logo login WordPress */
function logoLogin_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'logoLogin_url' );

/**
 * CPT for carousel front page
 */
function custom_carousel_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Carrousel accueil', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Ajouter', 'Slide'),
		'add_new_item'       => __( 'Titre'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'Toutes les photos'),
		'featured_image'     => __( 'Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-camera-alt',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'custom_carousel_slider' );