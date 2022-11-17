<?php    
    $wallet_evm = get_option('wallet_evm');
    $wallet_tron = get_option('wallet_tron');
    $btn_color = get_option('btn_color');
    $txt_color = get_option('txt_color');
?>
<?php 

wp_print_inline_script_tag('
var JMPAY_DONATION_WALLET_EVM = "'. esc_html($wallet_evm). '";
var JMPAY_DONATION_WALLET_TRON = "'. esc_html($wallet_tron) .'";
var JMPAY_DONATION_BUTTONCOLOR = "'. esc_html($btn_color) .'";
var JMPAY_DONATION_TEXTCOLOR = "'.esc_html($txt_color) .'";');
wp_print_inline_script_tag('', array('src' => 'https://pay.just.money/assets/js/donateButton_1.0.js'));

