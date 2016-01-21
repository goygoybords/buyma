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

if(!is_user_logged_in() )
{
	wp_redirect( get_permalink(9) ); 
	exit;
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
get_header();
?>

		<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="bmg-l-layout--full my">
				<?php get_sidebar('user');  ?>
				<div class="bmg-l-layout--full__main--s">
					<h1><?php the_title(); ?></h1>
					<div class="bmg-b-form">
						<div class="bmg-b-form__main">
							<?php  echo do_shortcode('[contact-form-7 id="30" title="Contact"]');  ?>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>