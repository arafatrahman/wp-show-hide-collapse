<?php

class wpshc_admin{
    public static function Init(){
        add_filter( 'mce_buttons', array( __CLASS__, 'wpshc_button' ) );
        add_filter( 'mce_external_plugins', array( __CLASS__, 'wpshc_js' ) );
    }
    
    public static function wpshc_button( $buttons ){
        array_push( $buttons, 'separator', 'wpshc' );
        return $buttons;

    }
    
    public static function wpshc_js( $plugins ){
     $plugins[ 'wpshc' ] =  WPSHC_ASSETS_DIR_URI . '/js/tinymce/editor_plugin.js';
      return $plugins;

    }
    
    
}

