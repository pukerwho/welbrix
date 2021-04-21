<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Купоны
// do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="flex md:-mx-4">
			<div class="w-full md:w-1/2 md:px-4">
				<!-- Контактные данные -->
				<div class="checkout_box bg-white rounded mb-8 p-5">
					<h2 class="normal-case mb-12">1. <?php _e('Контактные данные', 'welbrix'); ?></h2>
					<div>
						<?php
							$fields = $checkout->get_checkout_fields( 'billing' );

							foreach ( $fields as $key => $field ) {
								woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
							}
						?>
					</div>
				</div>
				<!-- END Контактные данные -->

				<!-- Доставка -->
				<div class="checkout_box bg-white rounded mb-8 p-5">
					<h2 class="normal-case mb-12">2. <?php _e('Доставка', 'welbrix'); ?></h2>
					<div>
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
				</div>
				<!-- END Доставка -->

				<!-- Оплата -->
				<div class="checkout_box bg-white rounded mb-8 p-5">
					<h2 class="normal-case mb-12">3. <?php _e('Оплата', 'welbrix'); ?></h2>
					<div>
						<?php woocommerce_checkout_payment(); ?>
					</div>
				</div>
				<!-- END Оплата -->

				<div class="btn_blue px-6 py-4">
					Оформить заказ
				</div>

			</div>
			<div class="w-full md:w-1/2 md:px-4">
				<div class="checkout_box bg-white rounded mb-8 p-5">
					<h2 class="normal-case mb-12"><?php _e('Корзина', 'welbrix'); ?></h2>
					<?php woocommerce_order_review(); ?>
				</div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
		
	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>