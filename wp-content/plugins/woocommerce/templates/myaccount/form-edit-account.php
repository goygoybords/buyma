<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
	<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="error-id" messge="error_explanation">
				<?php wc_print_notices(); ?>
			</div>
			<div class="bmg-l-layout--full my">
				<?php get_sidebar('user');  ?>

				<div class="bmg-l-layout--full__main--s">
					<h1>Account Settings</h1>
					<form method = "POST">

					<?php do_action( 'woocommerce_edit_account_form_start' ); ?>
					<div class="bmg-b-form">
						<div class="bmg-b-form__main">
							<h2><?php echo $user->user_login; ?></h2>
							<fieldset>
								<div class="bmg-b-form__control-group">
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'First name', 'woocommerce' ); ?> 
											<span class="required">*</span>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="text" class="input-text" name="account_first_name" id="account_first_name" value="<?php echo esc_attr( $user->first_name ); ?>" />
										</p>
									</div>
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="text" class="input-text" name="account_last_name" id="account_last_name" value="<?php echo esc_attr( $user->last_name ); ?>" />
										</p>
									</div>
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="email" class="input-text" name="account_email" id="account_email" value="<?php echo esc_attr( $user->user_email ); ?>" />
										</p>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="bmg-b-form__main">
							<p class="bmg-b-form__mention">
								<legend><?php _e( 'Password Change', 'woocommerce' ); ?></legend>
							</p>
							<fieldset>
								<div class="bmg-b-form__control-group">
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'Current Password (leave blank to leave unchanged)', 'woocommerce' ); ?>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="password" class="input-text" name="password_current" id="password_current" />
										</p>
									</div>
								</div>
								<div class="bmg-b-form__control-group">
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'New Password (leave blank to leave unchanged)', 'woocommerce' ); ?>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="password" class="input-text" name="password_1" id="password_1" />
										</p>
									</div>
								</div>
								<div class="bmg-b-form__control-group">
									<div class="bmg-b-form__control-group-inner">
										<h4 class="bmg-b-form__field-name">
											<?php _e( 'Confirm New Password', 'woocommerce' ); ?>
										</h4>
										<p class="bmg-b-form__field-text">
											<input type="password" class="input-text" name="password_2" id="password_2" />
										</p>
									</div>
								</div>
								<?php do_action( 'woocommerce_edit_account_form' ); ?>
								
								<div class="bmg-b-form__control-group">
									<div class="bmg-b-form__control-group-inner">
										<?php wp_nonce_field( 'save_account_details' ); ?>
										<h4 class="bmg-b-form__field-name">Option</h4>
										<p class="bmg-b-form__field-text">
											<input type="submit" class="button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>" />
											<input type="hidden" name="action" value="save_account_details" />
										</p>
									</div>
								</div>
							</fieldset>
						</div>
					</div>
					</form>
					<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
				</div>
			</div>
		</div>




