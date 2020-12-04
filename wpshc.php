<?php

/**
 * Plugin Name: WP Show Hide Collapse
 * Plugin URI: http://www.kuaniaweb.com
 * Description: This plugin helps hide and show specific post content anywhere. 
 * Version: 0.0.1
 * Author: Arafat Rahman Riyad
 * Author URI: Author's website
 */
if (!defined('ABSPATH')) {
    die;
}

define("WPSHC_PATH", dirname(__FILE__));
//define('WPSHC_ASSETS_DIR_URI', plugins_url('assets', __FILE__));
define( 'WPSHC_ASSETS_DIR_URI', plugin_dir_url( __FILE__ ) . 'assets' );

function WPSHC_plugin_load() {
    
    if (is_admin()) {
        include_once WPSHC_PATH . "/admin/wp-show-hide-collapse-admin.php";
        wpshc_admin::Init();
    }
}

WPSHC_plugin_load();