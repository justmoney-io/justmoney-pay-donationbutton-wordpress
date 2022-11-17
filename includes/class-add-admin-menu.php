<?php

function wpdocs_register_donation_setting_page()
{
    add_menu_page(
        __('Crypto Donations Button', 'textdomain'),
        'Crypto Donations Button',
        'manage_options',
        'donation-setting',
        'donation_setting_page',
        'dashicons-admin-generic',
        6
    );
}
add_action('admin_menu', 'wpdocs_register_donation_setting_page');

function donation_setting_page()
{    
    include WDS_PLUGIN_TEMP . 'setting.php';    
}