<?php
/**
 * The default template part for the product title
 * in the content-product template part's
 * product-info loop.
 *
 * @since 1.10.7
 * @version 1.10.7
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy this file's
 * content to the exchange/content-product/elements
 * directory located in your theme.
*/
?>

<?php if ( it_exchange( 'product', 'has-title' ) ) : ?>
	<?php do_action( 'it_exchange_content_product_before_title_element' ); ?>
	<div class="it-exchange-product-title">
		<?php it_exchange( 'product', 'title' ); ?>
	</div>
	<?php do_action( 'it_exchange_content_product_after_title_element' ); ?>
<?php endif; ?>