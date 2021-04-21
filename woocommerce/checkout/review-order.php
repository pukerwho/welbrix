<?php defined( 'ABSPATH' ) || exit; ?>

<div class="checkout_cart">
	<div class="mb-10">
		<?php  foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
		?>

		<div class="checkout_cart_item flex justify-between items-center mb-2 pr-5">
			<div class="flex items-center">
				<div class="checkout_cart_item_thumb mr-5">
					<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
					?>	
				</div>
				<div class="checkout_cart_item_title pr-5">
					<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>	
			</div>
			<div class="checkout_cart_item_price">
				<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
		</div>

		<?php }} ?>
	</div>
	<div class="checkout_cart_total flex justify-end items-end">
		<div class="mr-4">
			<?php _e('Итого', 'welbrix'); ?>:
		</div>
		<div>
			<span><?php wc_cart_totals_order_total_html(); ?></span>
		</div>
	</div>
</div>
