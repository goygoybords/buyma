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
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
	<div class="bmg-l-wrapper js-bmg-l-wrapper" >
			<div class="bmg-l-breadcrumbs">
				<?php echo woocommerce_breadcrumb(); ?>
			</div>
			<div class="bmg-l-layout--full">
				<div class="item-content">
					<div class="item-section--l">
						<div class="item-images-wrap">
							<div class="bx-wrapper" style="max-width: 100%;">
								<div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 500px;">
									<ul class="js-item-images" style="width: 4215%; position: relative; transition-duration: 0.5s; transform: translate3d(-1500px, 0px, 0px);">
										<li style="float: left; list-style: outside none none; position: relative; width: 500px;" aria-hidden="true">
											<div class="item-image">
												<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_1.jpg">
											</div>
										</li>
										<li style="float: left; list-style: outside none none; position: relative; width: 500px;" aria-hidden="true">
											<div class="item-image">
												<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_2.jpg">
											</div>
										</li>
										<li style="float: left; list-style: outside none none; position: relative; width: 500px;" aria-hidden="true">
											<div class="item-image">
												<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_3.jpg">
											</div>
										</li>
										<li style="float: left; list-style: outside none none; position: relative; width: 500px;" aria-hidden="false">
											<div class="item-image">
												<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_4.jpg">
											</div>
										</li>
									</ul>
								</div>
								<div class="bx-controls bx-has-controls-direction">
									<div class="bx-controls-direction">
										<a href="" class="bx-prev"><i class="bmg-c-icon--arrow-left"></i></a>
										<a href="" class="bx-next disabled"><i class="bmg-c-icon--arrow-right"></i></a>
									</div>
								</div>
							</div>
							<div class="js-bx-pager item-pager">
								<a href="javascript:void(0);" data-slide-index="0" class="js-thumb-image">
									<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_1.jpg"></a>
									<a href="javascript:void(0);" data-slide-index="1" class="js-thumb-image">
										<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_2.jpg"></a>
										<a href="javascript:void(0);" data-slide-index="2" class="js-thumb-image">
											<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_3.jpg"></a>
											<a href="javascript:void(0);" data-slide-index="3" class="js-thumb-image active">
												<img src="https://s3.amazonaws.com/image.buyma.com/imgdata/item/151113/0018627881/org_4.jpg"></a>
												<a href="javascript:void(0);" class="js-pager-current" style="left: 155px; top: 0px;"></a>
							</div>
						</div>
					</div>
					<div class="item-section--r">
						<div class="item-detail">
							<div class="item-detail__section">
								<h1 class="item-ttl">ASOS [More Hair Accessories] 1c/1s</h1>
								<h2 class="item-subttl--brand">
									<a href="/ph/items/find/asos/">ASOS</a>
								</h2>
							</div>
							<div class="item-detail__section">
								<div class="item-detail__userprice">¥6,700 JPY</div>
							<div class="item-detail__price"><span>est.</span>$54.37 USD</div>
							<h2 class="item-detail__subttl">Color</h2>
							<span id="js-choose_color" class="error-msg" style="display: none;">Please Choose A Color</span>
							<div class="item-one--color">
								<input type="radio" name="product[color]" value="f9fb0fd3-7068-42cb-8977-0c3d205914ee" data-name="Multimedia" data-enable-size="7cc92ce8-7a7d-4ada-8ada-b9e68daecb3d" class="js_color" id="js_color_f9fb0fd3-7068-42cb-8977-0c3d205914ee">
								<label title="" for="js_color_f9fb0fd3-7068-42cb-8977-0c3d205914ee" class="js_color_label  item__radio-label multi" data-original-title="Multimedia"></label>
							</div>
							<div class="color-title">Multimedia</div>
							<h2 class="item-detail__subttl">Size</h2>
							<span id="js-choose_size" class="error-msg" style="display: none;">Please Choose A Size</span>
							<div class="item-one--size">
								<input type="radio" name="product[size]" value="7cc92ce8-7a7d-4ada-8ada-b9e68daecb3d" data-name="ONE SIZE" data-enable-color="f9fb0fd3-7068-42cb-8977-0c3d205914ee" class="js_size" id="js_size_7cc92ce8-7a7d-4ada-8ada-b9e68daecb3d">
								<label title="ONE SIZE" for="js_size_7cc92ce8-7a7d-4ada-8ada-b9e68daecb3d" class="item__radio-label"></label>
							</div>
							<div class="size-title">ONE SIZE</div>
							<div class="item-detail__add-btn">
								
								<a href="javascript:void(0);" data-item-id="75c90161-1328-4858-9e27-3a3e03a53ff8" class="bmg-btn--primary js-add-to-bag item-detail__btn--buyable">Add to Bag</a>
							</div>
							<p class="item-detail__mention-txt">*currency conversion is for reference only. Items will be charged in JPY.</p>
						</div>
						<div class="item-detail__section">
							<div class="item-detail__descwrap">
								<span class="descttl">Available Pieces</span>
								<span class="descbody"> : 3</span>
							</div>
							<div class="item-detail__descwrap">
								<span class="descttl">Category</span>
								<span class="descbody"> : 
									<a href="/ph/items/find/asos/women/accessories/hair-accessories/more/">ASOS x More Hair Accessories</a></span>
							</div>
							<div class="item-detail__descwrap">
								<span class="desc--ttl">Shipping From</span>
								<span class="desc--body"> : 
									<img width="18" alt="Jpn 4e636028ca" src="/assets/images/flag/jpn-4e636028ca.png"></span>
							</div>
							<div class="item-detail__descwrap">
								<span class="desc--ttl">Shoppable Until</span>
								<span class="desc--body"> : 2016-02-10 14:59:59 UTC</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item-content--bottom">
				<div class="item-section--l">
					<div class="item-detail__section">
						<h2 class="item-subttl">Comment</h2>
						<div class="item-detail__bodytxt">
							<div class="js-detail-lead-first">Please enjoy shopping with buymore01!</div>
						</div>
					</div>
					<div class="item-detail__section">
						<h2 class="item-subttl">Item Details</h2>
						<div class="item-detail__bodytxt">If you have any questions about this item (ex. size, color, stock availability etc.), please click the 'Questions?' button and ask me!</div>
					</div>
					<div class="item-detail__section">
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
					</div>
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
			<script type="text/javascript" language="JavaScript">
				&lt;!--
				var mk_dtl_item = "75c90161-1328-4858-9e27-3a3e03a53ff8";
				--&gt;
			</script>
		<div class="footer-bnr--wrap">
			<div class="footer-bnr--devide3">
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="/assets/images/top/bnr_top_buyma01-06803a16b1.jpg" alt="Personal Service">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="/assets/images/top/bnr_top_buyma03-4dc7b141a3.jpg" alt="Global Shopping with Local Prices">
					</a>
				</div>
				<div class="footer-bnr--img">
					<a href="/aboutbuyma/">
						<img src="/assets/images/top/bnr_top_buyma02-bcbf6120f4.jpg" alt="Style Inspirations ">
					</a>
				</div>
			</div>
		</div>
		<script type="application/json" id="js-item-data">{"id":"75c90161-1328-4858-9e27-3a3e03a53ff8","name":"ASOS [More Hair Accessories] 1c/1s","category":"Women/Accessories/Hair Accessories/More Hair Accessories","brand":"ASOS","price":6700.0}</script>
	</div>

<?php get_footer(); ?>
