/**
 * Добавление количества товаров на иконку корзины в шапке
 */

function artabr_header_card_count() {
	global $woocommerce;
	$count = $woocommerce->cart->get_cart_contents_count();
	//$count = get_cart_contents_count();
	?>
	<a class="cart-link" href="<?php echo wc_get_cart_url(); ?>" title="Смотреть корзину"> <span
			class="icon-card"></span>
		<?php
		if ( $count > 0 ) :
			?>
			<span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
			<?php
		endif; ?>
	</a>
	
	<?php
}
