<?php get_header(); ?>

<!-- ТОП ИНФОРМАЦИЯ -->
<div class="bg-white">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex flex-col py-4">
			<!-- Хлебные крошки -->
			<div>
				<?php get_template_part('components/breadcrumbs/archive'); ?>
			</div>
			<!-- END Хлебные крошки -->
			<div>
				<h1><?php woocommerce_page_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<!-- END ТОП ИНФОРМАЦИЯ -->
<div class="sidebar-fixed w-3/12 hidden md:block bg-white"></div>
<div class="container mx-auto  px-4 md:px-0">
	<div class="flex flex-col md:flex-row">
		<div class="hidden md:block w-3/12 relative bg-white py-10">
			Left
		</div>
		<div class="w-full md:w-9/12 py-10 md:pl-8">
			<?php
				if ( woocommerce_product_loop() ) {
					
					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();
							wc_get_template_part( 'content', 'product' );
						}
					}

					woocommerce_product_loop_end();

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}
				do_action( 'woocommerce_after_main_content' );
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>