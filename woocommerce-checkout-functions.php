add_action( 'woocommerce_cod_icon', 'kld_checkout_payment_cod_add_icon', 20 );
function kld_checkout_payment_cod_add_icon( $icon ) {
	$icon = 'https://korolandia.space/wp-content/uploads/2017/05/sell-cash-icon.png';
	
	return $icon;
}
