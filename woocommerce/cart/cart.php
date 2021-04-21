<div class="pb-3">
	<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

		<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
		?>

			<div class="cart_item bg-white mb-5">
				<div class="flex items-center">
					<div class="cart_item_thumb px-3">
						<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
							}
						?>	
					</div>
					<div class="cart_item_info w-3/5 flex flex-col px-5 py-8">
						<div class="cart_item_title mb-2">
							<?php
								if ( ! $product_permalink ) {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
								} else {
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
							} ?>
						</div>
						<div class="cart_item_code">
							<?php echo $_product->get_sku(); ?>
						</div>
					</div>
					<div class="cart_item_qty">
						<?php
							if ( $_product->is_sold_individually() ) {
								$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
							} else {
								$product_quantity = woocommerce_quantity_input(
									array(
										'input_name'   => "cart[{$cart_item_key}][qty]",
										'input_value'  => $cart_item['quantity'],
										'max_value'    => $_product->get_max_purchase_quantity(),
										'min_value'    => '0',
										'product_name' => $_product->get_name(),
									),
									$_product,
									false
								);
							}

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
							?>
					</div>
					<div class="cart_item_price px-5 py-8">
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
						?>
					</div>
					<div class="cart_item_trash px-5 py-8">
						<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="trash_link" aria-label="%s" data-product_id="%s" data-product_sku="%s"></a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									esc_html__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
						?>
					</div>
				</div>
			</div>
		<?php }} ?>
	</form>
</div>
<div class="cart_total flex justify-end items-end mb-32">
	<div class="mr-5">
		<?php _e('Итого', 'welbrix'); ?>:	
	</div>	
	<div class="price">
		<?php echo WC()->cart->get_cart_subtotal(); ?>	
	</div>
</div>

<div class="cart_buttons flex justify-between items-center">
	<div class="btn_transparent relative uppercase py-5">
		<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="w-full h-full absolute top-0 left-0"></a>
		<?php _e('Продолжить покупки', 'welbrix'); ?>
	</div>
	<div class="btn_blue relative uppercase py-5">
		<a href="<?php echo wc_get_checkout_url(); ?>" class="w-full h-full absolute top-0 left-0"></a>
		<?php _e('Оформить заказ', 'welbrix'); ?>
	</div>
</div>
