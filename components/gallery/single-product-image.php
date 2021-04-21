<?php
global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>

<div>
	<?php 
	global $product;
	$attachment_ids = $product->get_gallery_image_ids();
	if ( $attachment_ids && $product->get_image_id() ): ?>
	<div class="product_gallery flex flex-col-reverse md:flex-row">
		<div class="product_gallery_list flex flex-row md:flex-col p-2 md:p-5">
			<!-- Показываем остальные -->
			<?php foreach ( array_slice($attachment_ids, 1) as $attachment_id ): ?>
				<?php 
					$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
					$thumb_size         = 'single-slide';
					$thumbnail_src     = wp_get_attachment_image_url( $attachment_id, 'medium' );
					$full_src          = wp_get_attachment_image_url( $attachment_id, 'large');
				?>
				<div class="product_gallery_list_single">
					<a href="<?php echo $full_src; ?>" data-fancybox="gallery">
						<img src="<?php echo $thumbnail_src; ?>" alt="">
					</a>
				</div>
			<?php endforeach; ?>
			<!-- END Показываем остальные -->
		</div>
		<div class="product_gallery_item p-2 md:py-5 md:px-0">
			<!-- Показываем первую фотку -->
			<?php foreach ( array_slice($attachment_ids, 0,1) as $attachment_id ): ?>
				<?php 
					$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
					$thumbnail_size    = 'woocommerce_single';
					$image_size        = apply_filters( 'woocommerce_gallery_image_size',  $thumbnail_size );
					$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
					$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, 'woocommerce_single' );
					$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
				?>
				<div class="product_gallery_item_main">
					<a href="<?php echo $full_src[0]; ?>" data-fancybox="gallery">
						<img src="<?php echo $thumbnail_src[0]; ?>" alt="">
					</a>
				</div>
			<?php endforeach; ?>
			<!-- END Показываем первую фотку -->
		</div>
	</div>
	<?php endif; ?>
</div>