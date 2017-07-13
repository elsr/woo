Чтобы из каталога ссылка для внешнего товара открывалась в новом окне вставьте в functions.php своей темы следующий код
function my_woocommerce_loop_add_to_cart_link($link,$product) {
    if( $product->is_type( 'external' ) ) {
        $link = str_replace('<a ', '<a target="_blank" ', $link);
        return $link;
    }
    return $link;
}
add_filter( "woocommerce_loop_add_to_cart_link", "my_woocommerce_loop_add_to_cart_link", 10, 2);
