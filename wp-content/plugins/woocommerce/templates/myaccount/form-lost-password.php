<?php
/**
 * Lost password form
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

	<!-- <div class="bmg-l-wrapper js-bmg-l-wrapper">
		<div class="bmg-l-layout--s">
			<h1>Forgot your password?</h1>
			<p>Enter your email address and we'll send you a link to reset your password.</p>
			<div class="bmg-b-form">
				<div class="bmg-b-form__main">
					<form class="new_request" id="new_request" action="/forgot_password" accept-charset="UTF-8" method="post">
						<input name="utf8" value="✓" type="hidden">
						<fieldset>
							<div class="bmg-b-form__control-group">
								<div class="bmg-b-form__control-group-inner">
									<label class="bmg-b-form__field-name" for="request_email">Email</label>
									<input class="js-user-email" name="request[email]" id="request_email" type="text">
								</div>
							</div>
						</fieldset>
						<div class="bmg-b-form__submit-bottom--with-lead">
							<input name="commit" value="Submit" class="bmg-btn--primary" type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->

<form method="post" class="lost_reset_password">

	<?php if( 'lost_password' == $args['form'] ) : ?>

		<p><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p>

		<p class="form-row form-row-first">
			<label for="user_login">
				<?php _e( 'Username or email', 'woocommerce' ); ?>
			</label> 
			<input class="input-text" type="text" name="user_login" id="user_login" /></p>

	<?php else : ?>

		<p><?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'woocommerce') ); ?></p>

		<p class="form-row form-row-first">
			<label for="password_1"><?php _e( 'New password', 'woocommerce' ); ?> <span class="required">*</span></label>
			<input type="password" class="input-text" name="password_1" id="password_1" />
		</p>
		<p class="form-row form-row-last">
			<label for="password_2"><?php _e( 'Re-enter new password', 'woocommerce' ); ?> <span class="required">*</span></label>
			<input type="password" class="input-text" name="password_2" id="password_2" />
		</p>

		<input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
		<input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />

	<?php endif; ?>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_lostpassword_form' ); ?>

	<p class="form-row">
		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="button" value="<?php echo 'lost_password' == $args['form'] ? __( 'Reset Password', 'woocommerce' ) : __( 'Save', 'woocommerce' ); ?>" />
	</p>

	<?php wp_nonce_field( $args['form'] ); ?>

</form>
