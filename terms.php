<?php
/**
 * Checkout terms and conditions checkbox
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$terms_page_id = wc_get_page_id( 'terms' );
if ( $terms_page_id > 0 && apply_filters( 'woocommerce_checkout_show_terms', true ) ) :
	$terms         = get_post( $terms_page_id );
	$privacy = get_post( 1845);
	$privacy_content= wc_format_content( $privacy->post_content );
	$terms_content = wc_format_content( $terms->post_content );
	?>
	<?php
	do_action( 'woocommerce_checkout_before_terms_and_conditions' );
	echo '<div class="woocommerce-terms-and-conditions" style="display: none; max-height: 200px; overflow: auto;    margin: 10px 0;">' . $terms_content . '</div>';
	echo '<div class="woocommerce-privacy" style="display: none; max-height: 200px; overflow: auto;    margin: 10px 0;">' . $privacy_content . '</div>';
	?>
	<p class="form-row terms wc-terms-and-conditions">
		<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
			<input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="terms" <?php checked( apply_filters( 'woocommerce_terms_is_checked_default', isset( $_POST['terms'] ) ), true ); ?> id="terms" /> <span><?php printf( 'Я принимаю условия <a href="%s" class="woocommerce-terms-and-conditions-link">пользовательского соглашения</a>, а также ознакомлен и согласен с <a href="%s" class="woocommerce-privacy-link">политикой конфиденциальности</a>', esc_url( wc_get_page_permalink( 'terms' ) ) , esc_url( get_the_permalink( 1845 ) ) ); ?></span> <span class="required">*</span>
		</label>
		<input type="hidden" name="terms-field" value="1" />
	</p>
	<?php do_action( 'woocommerce_checkout_after_terms_and_conditions' ); ?>
<?php endif; ?>