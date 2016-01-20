<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); 
	 
	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }

	while ( have_posts() ) : the_post(); 

?>
	<div class="bmg-l-wrapper js-bmg-l-wrapper" >
			<div class="bmg-l-breadcrumbs">
				<?php do_action( 'woocommerce_before_single_product' ); ?>
				<?php echo woocommerce_breadcrumb(); ?>
			</div>
			<div class="bmg-l-layout--full">
				<div class="item-content">
					<div class="item-section--l">
						<div class="item-images-wrap">
							<div class="bx-wrapper" style="max-width: 100%;">
								<div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 500px;">
									<ul class="js-item-images" >
										<li>
											<div class="item-image">
												<?php 
													the_post_thumbnail();
													//woocommerce_show_product_images();
													//do_action( 'woocommerce_before_single_product_summary' );
												?>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="item-section--r">
						<div class="item-detail">
							<div class="item-detail__section">
								<h1 class="item-ttl"><?php woocommerce_template_single_title(); ?></h1>
								<h2 class="item-subttl--brand">

									<?php echo $product->get_attribute( 'Brand' ); ?>
								</h2>
							</div>
							<div class="item-detail__section">
								<div class="item-detail__userprice">
									<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt )  ?>
								</div> 
							<div class="item-detail__price">
								<?php woocommerce_template_single_price(); //get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_regular_price', true); ?> 
							</div>
							
							<div class="item-detail__add-btn">
								<?php 
									//woocommerce_external_add_to_cart(); 
									woocommerce_simple_add_to_cart(); 
								?>
								<!-- <a href="javascript:void(0);" data-item-id="75c90161-1328-4858-9e27-3a3e03a53ff8" 
								class="bmg-btn--primary js-add-to-bag item-detail__btn--buyable">Add to Bag</a> -->
							</div>
							<!-- <p class="item-detail__mention-txt">
								*currency conversion is for reference only. Items will be charged in JPY.
							</p> -->
						</div>
						<div class="item-detail__section">
							<div class="item-detail__descwrap">
								<span class="descttl">Available Pieces</span>
								<span class="descbody"> :
									<?php echo $product->get_stock_quantity(); ?>
								</span>
							</div>
							<div class="item-detail__descwrap">
								<span class="descttl">Category</span>
								<span class="descbody"> : 
									<?php echo $product->get_categories(); ?>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item-content--bottom">
				<div class="item-section--l">
					<div class="item-detail__section">
						<h2 class="item-subttl">Item Details</h2>
						<div class="item-detail__bodytxt">
							<?php 
								the_content();
							?>
						</div>
					</div>
					<!-- <div class="item-detail__section">
						<h2 class="item-subttl">Shipping Method</h2>
						<table class="item-shipping-table">
							<thead>
								<tr>
									<th>Shipping Method</th>
									<th>Shipping Period</th>
									<th>Shipping Cost</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Standard shipping</td>
									<td>18 - 27 Days</td>
									<td>est.$0.00 USD</td>
								</tr>
							</tbody>
						</table>
					</div> -->
				</div>
				<div class="item-section--r">
					<div class="item-detail">
						<h2 class="item-subttl">Reviews</h2>
						<div class="item-detail__section">
							<div class="item-detail__shopper">
								<div class="shopper-rate--wrap">
									<?php 
										 comments_template( 'single-product/review.php' ); 
										//do_action( 'woocommerce_after_single_product_summary' ); 
									?>
								</div>
								<div class="shopper__msg-btn">
									<a href="<?php echo get_permalink(96); ?>" class="bmg-btn--secondary">Questions?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>	
		<div class="footer-bnr--wrap">
			<div class="footer-bnr--devide3">
				<div class="footer-bnr--img">
					<a href="">
						<img src="<?php bloginfo('template_url');?>/images/personal.jpg" alt="Personal Service">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="">
						<img src="<?php bloginfo('template_url');?>/images/global.jpg" alt="Global Shopping with Local Prices">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="">
						<img src="<?php bloginfo('template_url');?>/images/style.jpg" alt="Style Inspirations ">
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
