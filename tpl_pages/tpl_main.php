<?php
/*
Template Name: ГЛАВНАЯ
*/
?>

<?php get_header(); ?>

<!-- ПЕРВЫЙ ЭКРАН -->
<div class="welcome pt-8">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex flex-wrap mx-0 md:-mx-4">
			<div class="w-full md:w-1/2 px-0 md:px-4">
				<div class="welcome_slider">
					<div class="welcome_slider_wrap">
						<div class="welcome_slider_item">
							<div class="welcome_slider_item_title">
								LED лампы Philips со скидкой 35%
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/welcome_slider.png">
						</div>
					</div>
				</div>
			</div>
			<div class="w-full md:w-1/2 px-0 md:px-4">
				<div class="flex flex-wrap">
					<div class="welcome_cat w-full md:w-1/2 flex items-center justify-center relative">
						<a href="#"></a>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spot.jpg">
						<span class="uppercase bg-white text-center text-dark-blue rounded-lg px-6 py-3">Споты</span>
					</div>
					<div class="welcome_cat w-full md:w-1/2 flex items-center justify-center relative">
						<a href="#"></a>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tochecno.jpg">
						<span class="uppercase bg-white text-center text-dark-blue rounded-lg px-6 py-3">точечные светильники</span>
					</div>
					<div class="welcome_cat w-full hidden md:flex items-center justify-center relative">
						<a href="#"></a>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/led.jpg">
						<span class="uppercase bg-white text-center text-dark-blue rounded-lg px-6 py-3">Светодиодные светильники</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END ПЕРВЫЙ ЭКРАН -->

<!-- ПРЕИМУЩЕСТВА -->
<div class="advantage pt-10 mb-8 md:mb-20">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex flex-wrap items-center md:-mx-4">
			<div class="advantage_item w-full md:w-1/3 flex md:px-4 mb-8 md:mb-0">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/delivery-icon.svg" class="mr-3">
				<div>
					<p><?php _e('Бесплатная доставка', 'welbrix'); ?></p>
					<span><?php _e('При заказе от 1000 грн', 'welbrix'); ?></span>
				</div>
			</div>
			<div class="advantage_item w-full md:w-1/3 flex md:px-4 mb-8 md:mb-0">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/refresh-arrow-icon.svg" class="mr-3">
				<div>
					<p><?php _e('14 дней на возврат', 'welbrix'); ?></p>
					<span><?php _e('Возврат или обмен в течерии 14 дней', 'welbrix'); ?></span>
				</div>
			</div>
			<div class="advantage_item w-full md:w-1/3 flex md:px-4 mb-8 md:mb-0">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/garant-icon.svg" class="mr-3">
				<div>
					<p><?php _e('Гарантия', 'welbrix'); ?></p>
					<span><?php _e('Официальная гарантия от производителя', 'welbrix'); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END ПРЕИМУЩЕСТВА -->

<!-- ТОПОВЫЕ ПРОДУКТЫ -->
<div class="mb-8 md:mb-20">
	<div class="container mx-auto px-4 md:px-0">
		<div class="products_best">
			<div class="flex justify-between items-center mb-12">
				<h2>
					<?php _e('Топ продаж', 'welbrix'); ?>
				</h2>
				<div class="hidden md:flex items-center">
					<div class="products_tab_heading cursor-pointer active">
						Трековые светильники
					</div>
					<div class="products_tab_heading cursor-pointer">
						Споты
					</div>
					<div class="products_tab_heading cursor-pointer">
						Точечные светильники
					</div>
					<div class="products_tab_heading cursor-pointer">
						Светодиодные светильники
					</div>
				</div>
			</div>
			<div class="flex flex-wrap md:-mx-4">
				<div class="w-full md:w-1/4 md:px-4">
					<!-- PRODUCT CARD -->
					<div class="product_card">
						<a href="#" class="product_card_link"></a>
						<div class="product_card_thumb">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/product-thumb.jpg" alt="">
						</div>
						<div class="px-4 py-3">
							<div class="product_card_id mb-2">
								Код: 1675387
							</div>
							<div class="product_card_title mb-8">
								Спот Crystal Life 4x40 Вт E14 черный 15553-4
							</div>
							<div class="product_card_price">
								1229.00 ₴
							</div>
						</div>
					</div>
					<!-- END PRODUCT CARD -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END ТОПОВЫЕ ПРОДУКТЫ -->

<!-- Баннеры -->
<div class="banners mb-20">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex flex-col md:flex-row md:items-center md:-mx-4">
			<div class="w-full md:w-1/2 md:px-4 mb-3 md:mb-0">
				<div class="banner">
					<a href="#" class="banner_link"></a>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner1.jpg" class="banner_img">
					<div class="banner_info px-6 py-4">
						<div class="banner_info_subtitle text-center mb-2">Новая коллекция</div>
						<div class="banner_info_title text-center">Трековые светильники</div>
					</div>
				</div>
			</div>
			<div class="w-full md:w-1/2 md:px-4 mb-3 md:mb-0">
				<div class="banner">
					<a href="#" class="banner_link"></a>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner2.jpg" class="banner_img">
					<div class="banner_info px-6 py-4">
						<div class="banner_info_subtitle text-center mb-2">Распродажа</div>
						<div class="banner_info_title text-center">Скидки до 50%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Баннеры -->

<!-- БЛОГ -->
<div class="mb-20 md:mb-32">
	<div class="container mx-auto px-4 md:px-0">
		<div class="flex items-end justify-between mb-8 md:mb-12">
			<h2><?php _e('Новое в нашем блоге', 'welbrix'); ?></h2>
			<div class="hidden md:block">
				<a href="<?php echo get_post_type_archive_link( 'posts' ); ?>" class="dark-link uppercase"><?php _e('Читать все', 'welbrix'); ?></a>
			</div>
		</div>
		<div class="flex flex-wrap items-center md:-mx-4">
			<?php 
				$blog_query = new WP_Query( array( 
					'post_type' => 'post', 
					'posts_per_page' => 3,
				) );
			if ($blog_query->have_posts()) : while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
				<div class="w-full md:w-1/3 md:px-4 mb-8 md:mb-0">
					<div class="post">
						<a href="<?php the_permalink(); ?>" class="post_link"></a>
						<div class="post_thumb">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="post_img">	
						</div>
						<div class="post_content bg-white px-4 pt-8 pb-6">
							<div class="post_title mb-3">
								<?php the_title(); ?>
							</div>
							<div class="post_description">
								Споты светильники — это точечные локальные осветительные приборы. Споты отличаются длительным
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>
<!-- END БЛОГ -->

<!-- ТЕКСТ НА ГЛАВНОЙ -->
<div class="mb-20 md:mb-40">
	<div class="container mx-auto px-4 md:px-0">
		<div class="w-full lg:w-10/12 mx-auto">
			<div class="content">
				<?php echo apply_filters( 'the_content', carbon_get_theme_option('crb_main_text') ); ?>	
			</div>	
		</div>
		
	</div>
</div>
<!-- END ТЕКСТ НА ГЛАВНОЙ -->

<?php get_footer(); ?>