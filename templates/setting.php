<?php
    if(isset($_POST['wallet_evm']) || $_POST['wallet_tron'] || $_POST['btn_color'] || $_POST['txt_color']){
        $wallet_evm = sanitize_text_field($_POST['wallet_evm']);
        $wallet_tron = sanitize_text_field($_POST['wallet_tron']);
        $btn_color = sanitize_text_field($_POST['btn_color']);
        $txt_color = sanitize_text_field($_POST['txt_color']);
        update_option('wallet_evm', $wallet_evm);
        update_option('wallet_tron', $wallet_tron);
        update_option('btn_color', $btn_color);
        update_option('txt_color', $txt_color);
    }
    $wallet_evm = get_option('wallet_evm');
    $wallet_tron = get_option('wallet_tron');
    $btn_color = get_option('btn_color');
    $txt_color = get_option('txt_color');
?>



<div class="container" style="margin-top: 30px;">

<img src="<?php echo WDS_PLUGIN_URI  . 'assets/images/banner.jpg'; ?>" >
<form action="" method="post">
        <p>
        <label for="wallet_evm"><strong>EVM WALLET ADDRESS: </strong></label>
        </p>
        <input type="text" id="wallet_evm" name="wallet_evm" class="wallet_input_" value="<?php echo (!empty($wallet_evm)) ?  esc_attr($wallet_evm) : ''; ?>">
    
        <p>
        <label for="wallet_tron"><strong>TRON WALLET ADDRESS: </strong></label>
        </p>
        <input type="text" id="wallet_tron" name="wallet_tron" class="wallet_input_" value="<?php echo (!empty($wallet_tron)) ? esc_attr($wallet_tron) : ''; ?>">
        
        <p>
        <label for="btn_color"><strong>BUTTON COLOR: </strong></label>
        </p> 
        <input type="color" id="btn_color" name="btn_color" value="<?php echo (!empty($btn_color)) ? esc_attr($btn_color) : esc_attr("#7ad43c"); ?>">
       
    <p>
        <label for="txt_color"><strong>TEXT COLOR: </strong></label>
    </p> 
        <input type="color" id="txt_color" name="txt_color" value="<?php echo (!empty($txt_color)) ? esc_attr($txt_color) : esc_attr("#ffffff"); ?>">
        <p><input type="submit" value="Update" class="button"></p> 

</form>
</div>

<br>
<div class="reportInfo">To view and print reports of received donations, please click <a target="_blank" href="https://pay.just.money/reporting">here</a></div>
<br>

<strong>== Usage ==</strong>
<p>
* You can use it as widget. Just search by name JustMoney Pay and you will find it.
</p><p>
* You can also use it in content of the pages by inserting it with a shortcode. Just type [jm_donation_button] shortcode to any place where you want your donation button to be inserted.
</p>
<br><br>
This is product of JustMoney, for more information please visit <a href="https://pay.just.money/" target="_blank">pay.just.money</a>
