<?php
/**
 * My Addresses
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) {
	$page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Addresses', 'woocommerce' ) );
	$get_addresses    = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' => __( 'Billing Address', 'woocommerce' ),
		'shipping' => __( 'Shipping Address', 'woocommerce' )
	), $customer_id );
} else {
	$page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Address', 'woocommerce' ) );
	$get_addresses    = apply_filters( 'woocommerce_my_account_get_addresses', array(
		'billing' =>  __( 'Billing Address', 'woocommerce' )
	), $customer_id );
}

$col = 1;
?>
	<div class="bmg-l-layout--full__main--s">
			<h1><?php echo "Billing Details"; ?></h1>
			<div class="bmg-b-form">
				<div class="bmg-b-form__main">
					<?php if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) echo '<div class="col2-set addresses">'; ?>
					<?php foreach ( $get_addresses as $name => $title ) : ?>
					<?php
						$address = apply_filters( 'woocommerce_my_account_my_address_formatted_address', array(
							'first_name'  => get_user_meta( $customer_id, $name . '_first_name', true ),
							'last_name'   => get_user_meta( $customer_id, $name . '_last_name', true ),
							'company'     => get_user_meta( $customer_id, $name . '_company', true ),
							'address_1'   => get_user_meta( $customer_id, $name . '_address_1', true ),
							'address_2'   => get_user_meta( $customer_id, $name . '_address_2', true ),
							'city'        => get_user_meta( $customer_id, $name . '_city', true ),
							'state'       => get_user_meta( $customer_id, $name . '_state', true ),
							'postcode'    => get_user_meta( $customer_id, $name . '_postcode', true ),
							'country'     => get_user_meta( $customer_id, $name . '_country', true )
						), $customer_id, $name );

						$formatted_address = WC()->countries->get_formatted_address( $address );
						if ( ! $formatted_address )
							_e( 'You have not set up this type of address yet.', 'woocommerce' );
					?>
					<h2><?php echo $title; ?></h2>
					<fieldset>
						<div class="bmg-b-form__control-group--disabled">
							<div class="bmg-b-form__control-group-inner">
								<h4 class="bmg-b-form__field-name">Name</h4>
								<p class="bmg-b-form__field-text">
									<?php echo $address['first_name']." ".$address['last_name']; ?>
									<a href="<?php echo wc_get_endpoint_url( 'edit-address', $name ); ?>" class="edit bmg-b-form__editlink">
										<?php _e( 'Edit', 'woocommerce' ); ?>
									</a>
								</p>
							</div>
						</div>
						<div class="bmg-b-form__control-group--disabled">
							<div class="bmg-b-form__control-group-inner">
								<h4 class="bmg-b-form__field-name">Billing Address</h4>
								<p>
									<?php echo $address['address_1']." ".$address['address_2']." ".$address['city']; ?>
									<a href="<?php echo wc_get_endpoint_url( 'edit-address', $name ); ?>" class="edit bmg-b-form__editlink">
										<?php _e( 'Edit', 'woocommerce' ); ?>
									</a>
								</p>
							</div>
						</div>
					</fieldset>
					<?php endforeach; ?>
					<?php if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) echo '</div>'; ?>
				</div>
			</div>
		</div>

