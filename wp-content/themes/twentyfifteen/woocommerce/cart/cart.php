<?php
/**
 * Cart Page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>
	<?php do_action( 'woocommerce_before_cart_contents' ); ?>
	<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) 
		{
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) 
			{
				?>
		<div class="bmg-l-wrapper js-bmg-l-wrapper">
		<div class="bmg-l-layout--full js-shopping-bag">
		<h1>Your Shopping Bag</h1>
		<p><a href="<?php echo get_permalink(6); ?>" class="sb-products-link">
			<span title="translation missing: en.continue_shopping" class="translation_missing">Continue Shopping</span></a>
		</p>
		<div class="bmg-l-layout--full__main">
			<form method="post" action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" accept-charset="UTF-8" class="js-shopping-bag-form">
				<section data-product-id="785704f0-39c4-456a-8f0e-d2e2c6eb0083" class="sb-section js-line-item">
					<div class="sb-section__head">
						<h2>
							<span title="translation missing: en.order_from" class="translation_missing">Order From
							</span>
						</h2>
						<span class="sb-section__ps-info">
					</div>
					<div class="sb-section__main">
						<div class="sb-section__item-image">
							<div class="sb-section__item-image-inner">
								<?php
									$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
									if ( ! $_product->is_visible() ) 
									{
										echo $thumbnail;
									} else {
										printf( '<a href="%s">%s</a>', esc_url( $_product->get_permalink( $cart_item ) ), $thumbnail );
									}
								?>
							</div>
								<div class="sb-section__item-image-aside">
									<h2>
										<a href="/ph/items/785704f0-39c4-456a-8f0e-d2e2c6eb0083">BRUNELLO CUCINELLI [Sweaters] 1c/2s</a>
									</h2>
									<p class="sb-section__item-price-sub-total">$488.44 USD</p>
								</div>
							</div>
							<div class="sb-section__item-info">
								<h2>
									<a href="/ph/items/785704f0-39c4-456a-8f0e-d2e2c6eb0083">
										<?php
							if ( ! $_product->is_visible() ) {
								echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
							} else {
								echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s </a>', esc_url( $_product->get_permalink( $cart_item ) ), $_product->get_title() ), $cart_item, $cart_item_key );
							}

							// Meta data
							echo WC()->cart->get_item_data( $cart_item );

							// Backorder notification
							if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
								echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
							}
						?>
									</a>
								</h2>
								<div class="sb-section__item-selects">
									<div class="sb-section__quantity line-items">
										<h3>Quantity</h3>
										<?php
											if ( $_product->is_sold_individually() ) {
												$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
											} else {
												$product_quantity = woocommerce_quantity_input( array(
													'input_name'  => "cart[{$cart_item_key}][qty]",
													'input_value' => $cart_item['quantity'],
													'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
													'min_value'   => '0'
												), $_product, false );
											}
											echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
										?>
										<input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" />

										<?php do_action( 'woocommerce_cart_actions' ); ?>

										<?php wp_nonce_field( 'woocommerce-cart' ); ?>
									</div>
								</div>
							</div>
							<div class="sb-section__item-price">
								<p>
									<?php
										echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									?>
								</p>
								<div class="sb-section__option-link">
									<p>
										<a href="" data-method="delete" rel="nofollow" data-id="785704f0-39c4-456a-8f0e-d2e2c6eb0083" class="js-ga-item-remove">
											<span title="translation missing: en.remove" class="translation_missing">
												<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
														'<a href="%s"  title="%s" data-product_id="%s" data-product_sku="%s">&times; Remove</a>',
														esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
														__( 'Remove this item', 'woocommerce' ),
														esc_attr( $product_id ),
														esc_attr( $_product->get_sku() )
													), $cart_item_key );
												?>
											</span>
										</a>
									</p>
								</div>
							</div>
					</div>
				</section>
				<input type="hidden" id="shopping_bag_line_items_attributes_0_id" name="shopping_bag[line_items_attributes][0][id]" value="0ab95dc6-8d1c-4f63-9c13-a2183611bd28">
			</form>
		</div>
			<?php } ?>
		<?php } ?>
		<div class="bmg-l-layout--full__sidebar js-shopping-bag-summary">
			<h2>Shopping Bag Summary</h2>
			<div class="sb-summary-main">
				<div class="sb-summary-main__items">
					<span class="sb-summary-main__head">Items
						<strong><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></strong>
					</span>
				</div>
				
				<p class="sb-summary-main__checkout-btn">
						<?php do_action( 'woocommerce_after_cart_contents' ); ?>
						<?php do_action( 'woocommerce_cart_collaterals' ); ?>
				</p>
			</div>
		</div>
	</div>
	<script type="application/json" class="js-shopping-bag-data">{"line_items":[{"id":"785704f0-39c4-456a-8f0e-d2e2c6eb0083","product_id":"785704f0-39c4-456a-8f0e-d2e2c6eb0083","product":{"id":"785704f0-39c4-456a-8f0e-d2e2c6eb0083","name":"BRUNELLO CUCINELLI [Sweaters] 1c/2s"},"shipping_methods":[{"id":"05598922-f0ff-4a05-8d9f-2b507a4cdcfa","name":"EMS with insurance","explanation":"","cost":"$0.00 USD","shipping_days_from":5,"shipping_days_to":7,"selected":true}],"quantity":1,"shipping_method_id":"05598922-f0ff-4a05-8d9f-2b507a4cdcfa","product_color_size_variation_id":"904689ec-1848-4854-964d-172d2a747f81","comment":""}]}</script>
	<script type="text/javascript" language="JavaScript">&lt;!--
      var mk_purchase_price = "59996";
      var mk_item = ["785704f0-39c4-456a-8f0e-d2e2c6eb0083"];
      var mk_item_price = ["59996"];
      var mk_qty = ["1"];
          --&gt;
	</script>
	</div>
	