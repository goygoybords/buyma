<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
<li>
	<a href="<?php the_permalink(); ?>" class="js-ga-item-click">
		<div class="sr-item-picture">
			<!-- <img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151104/0018506544/428_1.jpg" 
			class="sr-item-picture__item"> -->
			
			<?php 	do_action( 'woocommerce_before_shop_loop_item_title' ); //the_post_thumbnail(); ?>
		</div>
		<div class="sr-item-name"><?php the_title(); ?></div>
	</a>
	<div class="sr-item-brand">
		<?php echo $product->get_categories(); ?>
	</div>

	<div class="sr-item-price"><?php echo get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_regular_price', true); ?> </div>
</li>

