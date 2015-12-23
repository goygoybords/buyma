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
						<h2 class="item-subttl">Personal Shopper</h2>
						<div class="item-detail__section">
							<div class="item-detail__shopper">
								<div class="shopper__name">buymore01
									<img width="18" alt="Jpn 4e636028ca" src="/assets/images/flag/jpn-4e636028ca.png"></div>
									<div class="shopper__msg-btn">
										<a href="/my/conversations/new?recipient_id=3403ceab-6422-41ab-ac1a-3538136b626b&amp;source_id=75c90161-1328-4858-9e27-3a3e03a53ff8&amp;source_type=Product" class="bmg-btn--secondary">Questions?</a>
									</div>
								</div>
								<div class="shopper-rate--wrap">
									<div class="shopper-rate--box">
										<span class="shopper-rate">
											<span class="rate-star star-none"><i class="bmg-c-icon--star-full"></i></span>
											<span class="rate-star star-full"><i class="bmg-c-icon--star-full"></i></span>
										</span>
										<span class="shopper-rate">
											<span class="rate-star star-none"><i class="bmg-c-icon--star-full"></i></span>
											<span class="rate-star star-full"><i class="bmg-c-icon--star-full"></i></span>
										</span>
										<span class="shopper-rate">
											<span class="rate-star star-none"><i class="bmg-c-icon--star-full"></i></span>
											<span class="rate-star star-full"><i class="bmg-c-icon--star-full"></i></span>
										</span>
										<span class="shopper-rate">
											<span class="rate-star star-none"><i class="bmg-c-icon--star-full"></i></span>
											<span class="rate-star star-half"><i class="bmg-c-icon--star-half"></i></span>
										</span>
										<span class="shopper-rate">
											<span class="rate-star star-none"><i class="bmg-c-icon--star-full"></i></span>
										</span>
									</div>
									<p>(40 sales)</p>
								</div>
								<div class="item-detail__shopper">
									<div class="shopper__profile">Thank you for visiting my shop.
										<br>I'm middle age and I love fashion.
										<br>And I like playing guitar.
										<br>
									</div>
								</div>
							</div>
							<div class="item-detail__section">
								<div class="item-detail__shopper">
									<div class="shopper__note">
										<h3 class="item-subttl">My Policies and Promotions</h3>
										<div class="js-detail-lead-first">It will be the final order after the Stock, it takes your time to usually arrive at hand about two t...</div>
										<div class="js-detail-lead-second item-detail__lead-second">It will be the final order after the Stock, it takes your time to usually arrive at hand about two to three weeks.
											<br>Because it done by e-mail to contact the stock status and shipping in dealings, please be sure to check the mail to dealings completion.
											<br>You can not accept the cancellation by the customer convenience after your order.
											<br>may look different in color and texture depending on the monitor environment, return or exchange by the image difference and size difference can not be accepted.
										</div>
										<div class="item-detail__more-read">
											<a href="javascript:void(0);" class="js-more-lead-btn">
												<span class="item-detail__more-read-text"><i class="bmg-c-icon--plus"></i>More</span>
												<span class="item-detail__close-text"><i class="bmg-c-icon--minus"></i>Less</span>
											</a>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div style="display: none">
			<span id="message-add-to-bag">Add to Bag</span>
			<span id="message-out-of-stock">out of stock</span>
			<span id="message-choose-color-and-size">choose color and size</span>
		</div>
			<div style="display:none">
				<div class="modal fade js-shopping-bag-modal">
					<div class="bmg-c-modal__main">
						<div class="bmg-c-modal__section">
							<h3>Added To Shopping Bag</h3>
						</div>
					</div>
					<div class="bmg-c-modal__bottom">
						<div class="bmg-c-outer-container">
							<div class="bmg-c-span-column">
								<a href="/shopping_bag" class="bmg-btn--primary">View Shopping Bag</a>
							</div>
							<div class="bmg-c-span-column">
								<a href="javascript:void(0);" class="bmg-btn--secondary js-modal__close-btn">Continue Shopping</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		<div class="footer-bnr--wrap">
			<div class="footer-bnr--devide3">
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="<?php bloginfo('template_url');?>/images/personal.jpg" alt="Personal Service">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="<?php bloginfo('template_url');?>/images/global.jpg" alt="Global Shopping with Local Prices">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="<?php bloginfo('template_url');?>/images/style.jpg" alt="Style Inspirations ">
					</a>
				</div>
			</div>
		</div>
		<script type="application/json" id="js-item-data">{"id":"75c90161-1328-4858-9e27-3a3e03a53ff8","name":"ASOS [More Hair Accessories] 1c/1s","category":"Women/Accessories/Hair Accessories/More Hair Accessories","brand":"ASOS","price":6700.0}</script>
	</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
