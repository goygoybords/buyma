<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_my_account' ); ?>
		<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="bmg-l-layout--full my">
				<?php get_sidebar('user');  ?>
				<?php wc_get_template( 'myaccount/my-address.php' ); ?>
			</div>
		</div>

<?php //wc_get_template( 'myaccount/my-downloads.php' ); ?>

<?php do_action( 'woocommerce_after_my_account' ); ?>
 