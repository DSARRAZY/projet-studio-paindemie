<?php

namespace PainDeMie;

/**
 * Plugin Name: Pain de mie
 * Plugin URI: 
 * Description: Functionality of the "le pain de mie" site 
 * Version: 0.1
 * Author: MDSF
 *  
 * 
 */

// Using the PSR-4 autoload
require __DIR__ . '/vendor/autoload.php';


// Constant indicating the path of the paindemie.php file
define ( 'PAINDEMIE_PLUGIN_FILE', __FILE__ );


// Start plugin
$painDeMie = new Plugin();
$painDeMie->run();

