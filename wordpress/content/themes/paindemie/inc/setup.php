<?php

function paindemie_theme_setup() {

    // Manage the automatic page title
    add_theme_support('title-tag');

    // Add the highlight image
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'paindemie_theme_setup');



