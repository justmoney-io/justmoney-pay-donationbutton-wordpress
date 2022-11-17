<?php

/**
 * wp-donation-script Setup
 * @package wp-donation-script
 * @since 1.0
 */
defined('ABSPATH') || exit;

/**
 * Settings Class
 */
final class WDS
{

	protected static $_instance = null;

	public function __construct()
	{				
		add_action('admin_enqueue_scripts', [$this, 'wpdocs_theme_name_scripts']);
        add_shortcode( 'jm_donation_button', [$this, 'show_donation_button']);
		$this->includes();		
	}

	public function includes()
	{
        require_once WDS_PLUGIN_INC . 'class-add-admin-menu.php';
        require_once WDS_PLUGIN_INC . 'class-widget.php';
	}
    
    function show_donation_button() {
			ob_start();			                    
            require_once WDS_PLUGIN_TEMP . 'donation-button-html.php';        
			$output_string = ob_get_contents();
			ob_end_clean();
			return $output_string;		
    }
    
    
	public function wpdocs_theme_name_scripts() {
		wp_enqueue_style( 'copy-me-style', WDS_PLUGIN_URI  . 'assets/css/style.css' );	        		
	}	

	public static function instance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}

