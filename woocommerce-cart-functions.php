add_filter( 'woocommerce_cart_totals_coupon_label', 'kld_cart_totals_coupon_html_label', 10, 3 );
function kld_cart_totals_coupon_html_label( $coupon_text, $coupon ) {
	if ( is_string( $coupon ) ) {
		$coupon = new WC_Coupon( $coupon );
	}
	$coupon_text .= ' ' . $coupon->get_amount() . '%';
	
	return $coupon_text;
}
