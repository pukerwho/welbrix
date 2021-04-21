<?php

defined( 'ABSPATH' ) || exit;

?>

<div class="bg-white rounded mb-6 px-8 py-4">
	<div>
		<?php _e('Ваша корзина пока пуста.', 'welbrix'); ?>
	</div>
</div>

<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<div class="flex">
		<div class="btn_transparent relative uppercase py-5">
			<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="w-full h-full absolute top-0 left-0"></a>
			<?php _e('Продолжить покупки', 'welbrix'); ?>
		</div>
	</div>
<?php endif; ?>
