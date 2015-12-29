<?php
/**
 * Thank you page
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
	<div class="bmg-l-wrapper js-bmg-l-wrapper">
		<div class="bmg-l-layout--full js-shopping-bag">
			<!-- <h1>Your Shopping Bag</h1> -->
			<p>
				<a class="sb-products-link" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
					<span class="translation_missing" title="translation missing: en.continue_shopping">
						<?php _e( 'Return To Shop', 'woocommerce' ) ?>
					</span>
				</a>
			</p>
			<div class="bmg-l-layout--full__main">
				<section class="bmg-c-panel">
					<div class="bmg-c-panel__main">
						<h2 class="bmg-u-mb0">
							<span class="translation_missing" title="translation missing: en.empty_shopping_bag">
								<?php echo "Your Order Has Been Processed."?>
							</span>
						</h2>
					</div>
				</section>
			</div>
		</div>
	</div>
