<?php

add_action( 'woocommerce_before_calculate_totals', 'schutzmasken_quantity_based_pricing_product_2269', 9999 );
 
function schutzmasken_quantity_based_pricing_product_2269( $cart ) {
 
    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) return;
 
    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 ) return;
 
    // Define discount rules and thresholds
	// Products delivered in 10-piece packages
    $threshold1 = 190; // Change price if items >= 190
    $discount1 = 0.00; // Reduce unit price by 0.00CHF
    
	$threshold2 = 200; // Change price if items >= 200
    $discount2 = 0.04; // Reduce unit price by 0.04CHF
	
	$threshold3 = 500; // Change price if items >= 500
	$discount3 = 0.08; // Reduce unit price by 0.08CHF
	
	$threshold4 = 1000; // Change price if items >= 1000
	$discount4 = 0.12; // Reduce unit price by 0.12CHF
	
	$threshold5 = 2000; // Change price if items >= 2000
	$discount5 = 0.16; // Reduce unit price by 0.16CHF

	$threshold6 = 5000; // Change price if items >= 5000
	$discount6 = 0.18; // Reduce unit price by 0.18CHF

 
    foreach ( $cart->get_cart() as $cart_item_key => $cart_item ) {
		$product = wc_get_product( $cart_item['product_id'] );
		if ($product->get_id() == 2269) {
			if ( $cart_item['quantity'] <= $threshold1 && $cart_item['quantity'] < $threshold2) {
				$price = round( $cart_item['data']->get_price() - $discount1, 2 );
				$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold2 && $cart_item['quantity'] < $threshold3 ) {
				$price = round( $cart_item['data']->get_price() - $discount2, 2 );
         		$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold3 && $cart_item['quantity'] < $threshold4 ) {
				$price = round( $cart_item['data']->get_price() - $discount3, 2 );
         		$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold4 && $cart_item['quantity'] < $threshold5 ) {
				$price = round( $cart_item['data']->get_price() - $discount4, 2 );
         		$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold5 && $cart_item['quantity'] < $threshold6) {
				$price = round( $cart_item['data']->get_price() - $discount5, 2 );
         		$cart_item['data']->set_price( $price );
			} elseif ( $cart_item['quantity'] >= $threshold6 ) {
				$price = round( $cart_item['data']->get_price() - $discount6, 2 );
         		$cart_item['data']->set_price( $price );
			} 
		}   
    }
    
 }