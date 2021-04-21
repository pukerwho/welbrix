<?php global $product; ?>

<div class="w-full md:w-1/3 px-4">
	<!-- PRODUCT CARD -->
	<div class="product_card">
		<a href="<?php echo $product->get_permalink(); ?>" class="product_card_link"></a>
		<div class="product_card_thumb pt-4 md:pt-2">
			<?php echo $product->get_image(); ?>
		</div>
		<div class="px-4 py-3">
			<div class="product_card_id mb-2">
				<?php _e('Код', 'welbrix'); ?>: <?php echo $product->get_sku(); ?>
			</div>
			<div class="product_card_title mb-8">
				<?php the_title(); ?>
			</div>
			<div class="product_card_price">
				<?php echo $product->get_price_html(); ?>
			</div>
			<div class="product_card_actions flex justify-between items-center">
				<div class="product_card_actions_add">
					<?php 
						echo apply_filters( 'woocommerce_loop_add_to_cart_link',
						sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s product_type_%s">%s</a>',
						esc_url( $product->add_to_cart_url() ),
						esc_attr( $product->get_id() ),
						esc_attr( $product->get_sku() ),
						$product->is_purchasable() ? 'add_to_cart_button' : '',
						esc_attr( $product->get_type() ),
						esc_html( $product->add_to_cart_text() )
						),
						$product );
					?>
				</div>
				<div class="product_card_actions_icons flex items-center">
					<div class="mr-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/fav-dark-icon.svg">
					</div>
					<div class="mr-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/compare-icon.svg">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PRODUCT CARD -->
</div>