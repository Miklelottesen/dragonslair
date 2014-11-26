<?php
/**
 * The default template part for the download's
 * download limit in the content-downloads
 * template part's download-data loop.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy this file's
 * content to the exchange/content-downloads/elements
 * directory located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_download_before_download_limit_element' ); ?>
<span class="it-exchange-download-limit">
	<?php if ( it_exchange( 'transaction', 'get-product-download-hash', array( 'attribute' => 'download-limit' ) ) ) : ?>
		<?php it_exchange( 'transaction', 'product-download-hash', array( 'attribute' => 'downloads-remaining' ) ); ?> <?php _e( 'download(s) remaining', 'it-l10n-ithemes-exchange' ); ?>
	<?php else : ?>
		<?php _e( 'Unlimited downloads', 'it-l10n-ithemes-exchange' ); ?>
	<?php endif; ?>
</span>
<?php do_action( 'it_exchange_content_download_info_download_limit_element' ); ?>