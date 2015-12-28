<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>
	
	<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
		<div class="bmg-l-wrapper" style = "padding-top: 0px;">
			<div class="bmg-l-layout--full">
				<h1>Secure Checkout</h1>
				<div class="bmg-l-layout--full__main">
					<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>
					<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

					<div class="js-checkout-form-view">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
						<!-- <form class="new_checkout_form" id="new_checkout_form" action="/checkout/shipping" accept-charset="UTF-8" method="post">
							<input name="utf8" value="✓" type="hidden">
							<input name="_method" value="put" type="hidden">
							<input name="authenticity_token" value="QyIWmqJDddMCwZMefU2zoS08G5JBmBPH7cNqO57/o1Nltf8L2vztx5XA/wWFMN9JMcjM/JtYXnClccoBEMR5jg==" type="hidden">
							<input name="checkout_form[shipping_address_id]" id="checkout_form_shipping_address_id" type="hidden">
							<input name="checkout_form[use_as_billing_address]" id="checkout_form_use_as_billing_address" type="hidden">
						</form> -->
					</div>
					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
					<?php endif; ?>
					<div style="display: none;" class="js-address-or-view bmg-b-form__section">
						<div class="js-address-list-view sb-card-container"></div>
						<div class="bmg-b-form__section-text">or</div>
					</div>
				</div>
				<div class="bmg-l-layout--full__sidebar">
					<h2>Shopping Bag Summary</h2>
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
					<div class="sb-summary-main">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
				</div>
				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>
		</div>
	</form>
	<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>