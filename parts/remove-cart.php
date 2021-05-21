<?php

/** 
* Remove Add to Cart Button & Price
*
*/

function scatalog_remove_cart_button(){

	// Remove Cart Button From Shop & Archive Page

	if (get_option( 'wc_settings_tab_scatalog_form_hide_in_shop_page' ) == 'yes') {
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	}
	
	// Remove Cart Button From Single Product Page

	if (get_option( 'wc_settings_tab_scatalog_form_hide_in_single_page' ) == 'yes') {
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
	}

	// Remove Price From Shop & Archive Page

	if (get_option( 'wc_settings_tab_scatalog_form_hide_price_in_shop_page' ) == 'yes') {
		remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	}

	// Remove Price From Single Product Page

	if (get_option( 'wc_settings_tab_scatalog_form_hide_price_in_single_page' ) == 'yes') {
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	}
	
}

add_action('init','scatalog_remove_cart_button');