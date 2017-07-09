add_filter( 'woocommerce_checkout_fields', 'kld_checkout_fields' );
function kld_checkout_fields( $fields ) {
	unset( $fields['billing']['billing_company'] );
	unset( $fields['billing']['billing_address_2'] );
	
	return $fields;
}
