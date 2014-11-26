<?php
/**
 * The default product-info loop for the content-store.php template part
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy over this
 * file's content to the exchange/content-store/loops
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_store_before_product_info_loop' ); ?>
<?php foreach( it_exchange_get_template_part_elements( 'store_product', 'product_info_loop', array( 'title', 'base-price', 'permalink' ) ) as $detail ): ?>
	<?php it_exchange_get_template_part( 'content-store/elements/' . $detail ); ?>
<?php endforeach; ?>
<?php do_action( 'it_exchange_content_store_after_product_info_loop' ); ?>