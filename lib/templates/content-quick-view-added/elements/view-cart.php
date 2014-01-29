<?php
/**
 * This is the default template part for the
 * view cart element in the content-quick-view-added template
 * part.
 *
 * @since 1.1.0
 * @version 1.1.0
 * @package IT_Exchange
 *
 * WARNING: Do not edit this file directly. To use
 * this template in a theme, copy over this file
 * to the exchange/content-quick-view-added/elements/ directory
 * located in your theme.
*/
?>

<?php do_action( 'it_exchange_content_quick_view_added_before_checkout_element' ); ?>
<?php it_exchange( 'checkout', 'cancel', array( 'label' => __( 'View Cart', 'LION' ) ) ); ?>
<?php do_action( 'it_exchange_content_quick_view_added_after_checkout_element' ); ?>