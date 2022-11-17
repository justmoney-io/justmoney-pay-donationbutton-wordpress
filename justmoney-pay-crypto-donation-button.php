<?php

/**
 
 * @package wp-donation-script
 
 */

/*
 
Plugin Name: JustMoney Pay - Crypto Donations Button
 
Plugin URI: 
 
Description: JustMoney Pay - Crypto Donations Button
 
Version: 1.0
 
Author: JustMoney Pay
 
License: GPLv2 or later
 
Text Domain: JustMoney Pay - Crypto Donations Button
 
*/

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__));
}


define('WDS_WP', __FILE__);
if (!defined('WDS_PLUGIN_PATH')) define('WDS_PLUGIN_PATH', plugin_dir_path(__FILE__));
if (!defined('WDS_PLUGIN_URI')) define('WDS_PLUGIN_URI', plugins_url('/', __FILE__));
if (!defined('WDS_PLUGIN_INC')) define('WDS_PLUGIN_INC', WDS_PLUGIN_PATH . 'includes/');
if (!defined('WDS_PLUGIN_TEMP')) define('WDS_PLUGIN_TEMP', WDS_PLUGIN_PATH . 'templates/');

if (!class_exists('WDS')) {
    include_once dirname(__FILE__) . '/includes/class-wp-donation-script.php';
}

function WDS()
{
    return WDS::instance();
}
$GLOBALS['WDS'] = WDS();