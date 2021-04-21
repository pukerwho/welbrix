<?php 
	get_header(); 
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	global $product;
?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<!-- ТОП ИНФОРМАЦИЯ -->
	<div class="bg-white">
		<div class="container mx-auto px-4 md:px-0">
			<div class="flex flex-col py-4">
				<!-- Хлебные крошки -->
				<div>
					<?php get_template_part('components/breadcrumbs/single-product'); ?>
				</div>
				<!-- END Хлебные крошки -->
				<div>
					<h1><?php the_title(); ?></h1>
				</div>
				<!-- SKU и STOCK -->
				<div class="flex justify-between md:justify-start items-end">
					<div class="product_sku mr-5">
						<span class="opacity-60"><?php _e('Код', 'welbrix'); ?>:</span> <span class="font-bold"><?php echo $product->get_sku(); ?></span>
					</div>
					<div>
						<?php $product_stock_status = $product->get_stock_status(); ?>
						<?php if ($product_stock_status === 'instock'): ?>
							<span class="product_stock instock"><?php _e('В наличии', 'welbrix'); ?></span>
						<?php else: ?>
							<span class="product_stock outstock"><?php _e('Нет в наличии', 'welbrix'); ?></span>
						<?php endif; ?>
					</div>
				</div>
				<!-- END SKU и STOCK -->
			</div>
		</div>
	</div>

	<div class="py-5 md:py-10">
		<div class="container mx-auto  px-4 md:px-0">
			<?php do_action( 'woocommerce_before_single_product' ); ?>
			<!-- ОСНОВНАЯ ИНФОРМАЦИЯ О ПРОДУКТЕ -->
			<div class="product-box bg-white mb-8">
				<div class="flex flex-wrap md:-mx-4">
					<div class="w-full md:w-1/2 md:px-4">
						<?php get_template_part('components/gallery/single-product-image'); ?>
					</div>
					<div class="w-full md:w-1/2 md:px-4">
						<!-- ИНФО МЕТА -->
						<div class="product_meta_info px-2 md:px-0 pt-5 md:pt-10 pb-5 mr-0 md:mr-10">
							<?php if(carbon_get_the_post_meta('product_info_style')): ?>
							<div class="flex items-center mb-5">
								<div class="w-2/5 md:w-1/5 pr-3">
									<span><?php _e('Стиль', 'welbrix'); ?></span>:
								</div>
								<div class="w-3/5 md:w-4/5">
									<?php echo carbon_get_the_post_meta('product_info_style'); ?>
								</div>
							</div>
							<?php endif; ?>	

							<?php if(carbon_get_the_post_meta('product_info_typelamp')): ?>
							<div class="flex items-center mb-5">
								<div class="w-2/5 md:w-1/5 pr-3">
									<span><?php _e('Тип лампы', 'welbrix'); ?></span>:
								</div>
								<div class="w-3/5 md:w-4/5">
									<?php echo carbon_get_the_post_meta('product_info_typelamp'); ?>
								</div>
							</div>
							<?php endif; ?>	

							<?php if(carbon_get_the_post_meta('product_info_typecokol')): ?>
							<div class="flex items-center mb-5">
								<div class="w-2/5 md:w-1/5 pr-3">
									<span><?php _e('Тип цоколя', 'welbrix'); ?></span>:
								</div>
								<div class="w-3/5 md:w-4/5">
									<?php echo carbon_get_the_post_meta('product_info_typecokol'); ?>
								</div>
							</div>
							<?php endif; ?>	

							<?php if(carbon_get_the_post_meta('product_info_material')): ?>
							<div class="flex items-center mb-5">
								<div class="w-2/5 md:w-1/5 pr-3">
									<span><?php _e('Материал', 'welbrix'); ?></span>:
								</div>
								<div class="w-3/5 md:w-4/5">
									<?php echo carbon_get_the_post_meta('product_info_material'); ?>
								</div>
							</div>
							<?php endif; ?>	
						</div>
						<!-- END ИНФО МЕТА -->

						<!-- Цена, В корзину, Избранное -->
						<div class="flex flex-col md:flex-row items-center py-5 md:py-10 md:mr-10">
							<div class="product_price mb-6 md:mb-0 md:mr-6">
								<?php echo $product->get_price_html(); ?>
							</div>
							<div class="flex items-center">
								<div class="mr-6">
									<?php 
										echo apply_filters( 'woocommerce_loop_add_to_cart_link',
										sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="product_btn inline-block px-8 md:px-12 py-4 %s product_type_%s">%s</a>',
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
								<div>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/fav-dark-icon.svg" class="cursor-pointer">
								</div>
							</div>
							
						</div>
						<!-- END Цена, В корзину, Избранное -->

						<!-- Короткое описание -->
						<div class="product_description py-5 px-2 md:px-0 md:py-10 md:mr-10">
							<span><?php _e('Описание', 'welbrix'); ?></span>
							<div class="mt-3 mb-4">
								Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quasi fuga recusandae sint cum provident vel, et ipsum aut, libero dolor.	
							</div>
							<a href="#content-single-product"><?php _e('Подробнее', 'welbrix'); ?></a>
						</div>
						<!-- END Короткое описание -->
					</div>
				</div>
			</div>
			<!-- END ОСНОВНАЯ ИНФОРМАЦИЯ О ПРОДУКТЕ -->

			<!-- ОПИСАНИЕ ПРОДУКТА -->
			<div id="content-single-product" class="product-box bg-white mb-8">
				<div class="product_content px-2 md:px-8 py-5 md:py-12">
					<h2><?php _e('Описание', 'welbrix'); ?></h2>
					<div class="title uppercase mb-8"><?php the_title(); ?></div>
					<div class="w-full lg:w-10/12 content">
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium iste ducimus nostrum delectus debitis fugiat cupiditate at quisquam. Est, consectetur labore neque nihil sed quas similique quasi at voluptas fuga magni eaque, alias minus odit. Quo fugit quidem voluptate corporis libero quos numquam eos in sequi eius porro non rem voluptatum vitae ratione ducimus soluta animi qui magni, minima earum!
					</div>	
				</div>
			</div>
			<!-- END ОПИСАНИЕ ПРОДУКТА -->

			<!-- ХАРАКТЕРИСТИКИ ПРОДУКТА -->
			<div class="product-box bg-white mb-8">
				<div class="product_params px-2 md:px-8 py-5 md:py-12">
					<h2><?php _e('Характеристики', 'welbrix'); ?></h2>
					<div class="title uppercase mb-6 md:mb-8"><?php the_title(); ?></div>
					<div class="flex flex-wrap md:-mx-4">
						<?php if(carbon_get_the_post_meta('product_info_mosh')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Номинальная мощность', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_mosh'); ?>
							</div>
						</div>
						<?php endif; ?>

						<?php if(carbon_get_the_post_meta('product_info_analoglep')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Аналог ЛЭП, Вт', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_analoglep'); ?>
							</div>
						</div>
						<?php endif; ?>	

						<?php if(carbon_get_the_post_meta('product_info_tempcolor')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Температура цвет, К', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_tempcolor'); ?>
							</div>
						</div>
						<?php endif; ?>	

						<?php if(carbon_get_the_post_meta('product_info_diapazon')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Диапазон рабочего напряжения, V', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_diapazon'); ?>
							</div>
						</div>
						<?php endif; ?>	

						<?php if(carbon_get_the_post_meta('product_info_typecokol')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Тип цоколя', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_typecokol'); ?>
							</div>
						</div>
						<?php endif; ?>	

						<?php if(carbon_get_the_post_meta('product_info_qr')): ?>
						<div class="product_params_item w-full md:w-1/2 flex items-end justify-between md:px-4 py-5 md:py-2">
							<div>
								<?php _e('Штрихкод', 'welbrix'); ?>
							</div>
							<div>
								<?php echo carbon_get_the_post_meta('product_info_qr'); ?>
							</div>
						</div>
						<?php endif; ?>	
					</div>
				</div>
			</div>
			<!-- END ХАРАКТЕРИСТИКИ ПРОДУКТА -->
		</div>
	</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>