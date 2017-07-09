add_action( 'woocommerce_product_options_dimensions', 'wc_custom_add_custom_fields' );
function wc_custom_add_custom_fields() {
	global $post;
	// Print a custom text field
	woocommerce_wp_text_input( array(
		'id'          => '_color_crown',
		'label'       => 'Цвет',
		'description' => '',
		'desc_tip'    => 'true',
		'placeholder' => 'Цвет',
	) );
	woocommerce_wp_text_input( array(
		'id'          => '_decor_crown',
		'label'       => 'Декор',
		'description' => '',
		'desc_tip'    => 'true',
		'placeholder' => 'Декор',
	) );
	?>
	<p class="form-field custom_field_type">
		<label for="custom_field_type"><?php echo 'Размер в упаковке (mm)'; ?></label> <span class="wrap">
		<input placeholder="Длина" class="input-text wc_input_decimal" size="6" type="text" name="_pack_length"
			value="<?php echo get_post_meta( $post->ID, '_pack_length', true ); ?>"
			style="width: 15.75%;margin-right: 2%;"/>
		<input placeholder="Ширина" class="input-text wc_input_decimal" size="6" type="text" name="_pack_width"
			value="<?php echo get_post_meta( $post->ID, '_pack_width', true ); ?>"
			style="width: 15.75%;margin-right: 2%;"/>
		<input placeholder="Высота" class="input-text wc_input_decimal" size="6" type="text" name="_pack_height"
			value="<?php echo get_post_meta( $post->ID, '_pack_height', true ); ?>"
			style="width: 15.75%;margin-right: 0;"/>
	</span> <span
			class="description"><?php echo wc_help_tip( 'Введите размер товара в упаковке в формате ДхШхВ' ); ?></span>
	</p>
	<?php
}

add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save', 99 );
function woo_add_custom_general_fields_save( $post_id ) {
	//print_r($_POST);
	// Text Field
	$woocommerce_color_crown = $_POST['_color_crown'];
	//if ( $woocommerce_color_crown ) {
	update_post_meta( $post_id, '_color_crown', esc_attr( $woocommerce_color_crown ) );
	//}
	$woocommerce_decor_crown = $_POST['_decor_crown'];
	//if ( ! empty( $woocommerce_decor_crown ) ) {
	update_post_meta( $post_id, '_decor_crown', esc_attr( $woocommerce_decor_crown ) );
	//}
	$woocommerce_pack_length = $_POST['_pack_length'];
	if ( ! empty( $woocommerce_pack_length ) ) {
		update_post_meta( $post_id, '_pack_length', esc_attr( $woocommerce_pack_length ) );
	}
	$woocommerce_pack_width = $_POST['_pack_width'];
	if ( ! empty( $woocommerce_pack_width ) ) {
		update_post_meta( $post_id, '_pack_width', esc_attr( $woocommerce_pack_width ) );
	}
	$woocommerce_pack_height = $_POST['_pack_height'];
	if ( ! empty( $woocommerce_pack_height ) ) {
		update_post_meta( $post_id, '_pack_height', esc_attr( $woocommerce_pack_height ) );
	}
}
