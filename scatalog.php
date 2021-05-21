<?php

/**
 * @link              https://wprashed.com
 * @spartse             1.0.0
 * @package           Safan Catalog & Enquiry for Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Safan Catalog & Enquiry for Woocommerce
 * Plugin URI:        
 * Description:       This plugin will remove cart button, price and it will add equiry button with form
 * Version:           1.0.0
 * Author:            Md Rashed Hossain 
 * Author URI:        https://wprashed.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       scatalog
 * Domain Path:       /languages
 */


// If this file is called directly, abort.

if ( ! defined( 'ABSPATH' ) ) exit;

// Currently plugin version.

define( 'SCATALOG_VERSION', '1.0.0' );

// Load Textdomain

class scatalog{

  	function __construct() {
    	add_action( 'plugins_loaded', array( $this,'load_textdomain' ) );
  	}

  	function load_textdomain() {
    	load_plugin_textdomain( 'scatalog', true, plugin_dir_url( __FILE__ ) . "/languages" );
  	}
}

new scatalog();

// Settings Tab

require plugin_dir_path( __FILE__ ) . 'parts/settings.php';

// Remove Add to Cart Button

require plugin_dir_path( __FILE__ ) . 'parts/remove-cart.php';

// Display Button and Echo CF7
 
require plugin_dir_path( __FILE__ ) . 'parts/form.php';

// Load Style
 
require plugin_dir_path( __FILE__ ) . 'parts/style.php';

/* Activation */

require_once plugin_dir_path( __FILE__ ) . 'lib/class-tgm-plugin-activation.php';

function scatalog_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => true,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'scatalog',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',

	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'scatalog_register_required_plugins' );
