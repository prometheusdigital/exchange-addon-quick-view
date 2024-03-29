<?php
/**
 * The default template part for the product
 * images in one of the the content-quick-view-added
 * template part's loops.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, simply copy this file's
 * content to the exchange/content-quick-view-added/elements
 * directory located in your theme.
*/
?>

<?php if ( it_exchange( 'product', 'has-images' ) ) : ?>
	<?php do_action( 'it_exchange_quick_view_added_before_product_images_element' ); ?>
	<?php it_exchange( 'product', 'featured-image', array( 'size' => 'thumbnail' ) ); ?>
	<?php do_action( 'it_exchange_quick_view_added_after_product_images_element' ); ?>
<?php endif; ?>