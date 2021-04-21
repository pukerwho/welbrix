<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

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
<div class="product__col">
	<div class="single_product_photo_block">
		<?php 
			global $product;
			$attachment_ids = $product->get_gallery_image_ids();
			if ( $attachment_ids && $product->get_image_id() ): ?>
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
				<div class="single_product_first_photo">
					<a href="<?php echo $full_src[0]; ?>" data-fancybox="gallery">
						<img src="<?php echo $thumbnail_src[0]; ?>" alt="">
					</a>
				</div>
			<?php endforeach; ?>
			<!-- Показываем остальные -->
			<div class="single_product_grid_photos">
				<?php foreach ( array_slice($attachment_ids, 1) as $attachment_id ): ?>
					<?php 
						
						$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
						$thumb_size         = 'single-slide';
						$thumbnail_src     = wp_get_attachment_image_url( $attachment_id, 'medium' );
						$full_src          = wp_get_attachment_image_url( $attachment_id, 'large');
					?>

					<div class="single_product_grid_photo">
						<a href="<?php echo $full_src ?>" data-fancybox="gallery">
							<img src="<?php echo $thumbnail_src ?>" alt="">
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
<!-- <div class="product-swiper-container">
  <div class="swiper-container product-swiper">
	<div class="swiper-wrapper"> -->
		<?php
		/*if ( $product->get_image_id() ) {
			$html = blonde_wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped*/

		// do_action( 'woocommerce_product_thumbnails' );
		?>
	<!-- </div>
	<div class="swiper-pagination"></div>
  </div>
</div> -->
</div>	