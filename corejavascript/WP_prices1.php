<?php

add_action( 'woocommerce_before_calculate_totals', 'schutzmasken_quantity_based_pricing_product_2730', 9999 );
 
function schutzmasken_quantity_based_pricing_product_2730( $cart ) {
 
    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) return;
 
    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 ) return;
 
    // Define discount rules and thresholds
    $threshold1 = 10; // Change price if items >= 10
    $discount1 = 0.00; // Reduce unit price by 0.00CHF
    
	$threshold2 = 1080; // Change price if items >= 1080
        $discount2 = 0.34; // Reduce unit price by 0.04CHF
	 
    foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
		$product = wc_get_product( $cart_item['product_id'] );
		if ($product->get_id() == 2730) {
			if ( $cart_item['quantity'] <= $threshold1 && $cart_item['quantity'] < $threshold2) {
				$price = round( $cart_item['data']->get_price() - $discount1, 2 );
				$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold2 ) {
				$price = round( $cart_item['data']->get_price() - $discount2, 2 );
         		$cart_item['data']->set_price( $price );
			} 
		}   
    }
    
 }