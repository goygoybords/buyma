<?php
/**
 * Registration form.
 *
 * @author 	Jeroen Sormani
 * @package 	WooCommerce-Simple-Registration
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

?>

<div class="bmg-l-wrapper js-bmg-l-wrapper">
	<div class="bmg-l-layout--s">
		<h1>Create BirthdayPress account</h1>
		<div class="error-id" messge="error_explanation">
			<?php wc_print_notices(); ?>
		</div>
		<?php do_action( 'woocommerce_register_form_start' ); ?>
		<div class="bmg-b-form">
			<div class="bmg-b-form__main">
				<form method="post" accept-charset="UTF-8" id="new_user" class="new_user">
					<p class="bmg-b-form__required-mark">* Required fields</p>
					<fieldset>
						<div class="bmg-b-form__control-group">
							<div class="bmg-b-form__control-group-inner">
								<label for="user_email" class="bmg-b-form__field-name--required"><?php _e( 'Email address', 'woocommerce' ); ?></label>
								<input type="email" id="user_email" name="email" class="js-user-email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>">
							</div>
						</div>
						<div class="bmg-b-form__control-group">
							<div class="bmg-b-form__control-group-inner">
								<label for="user_password" class="bmg-b-form__field-name--required"><?php _e( 'Password', 'woocommerce' ); ?></label>
								<input type="password" id="user_password" name="password" class="js-password">
								
							</div>
						</div>
					</fieldset>
					<p class="bmg-u-mt10">
						<input type="hidden" value="0" name="user[subscription]">
						<input type="checkbox" id="user_subscription" name="user[subscription]" checked="checked" value="1">
						<label for="user_subscription" class="bmg-b-form__check-label">I want to receive newsletters and updates from Buyma</label>
					</p>
					<p class="bmg-b-text-size--small bmg-u-mt10 bmg-b-text-color--gray bmg-b-text-bold">By clicking Register, you confirm that you accept our Terms of Use and Privacy Policy.</p>
					<div class="bmg-b-form__submit-bottom--with-lead">
						<div>&nbsp;
						</div>
						<?php do_action( 'woocommerce_register_form' ); ?>
						<?php do_action( 'register_form' ); ?>
						<div>
							<?php wp_nonce_field( 'woocommerce-register' ); ?>
							<input type="submit" class="bmg-btn--primary" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>">
						</div>
					</div>
					<?php do_action( 'woocommerce_register_form_end' ); ?>
				</form>
			</div>
			<div class="bmg-b-form__main--option">
				<div class="bmg-b-form__submit-bottom">
					<a href="<?php echo get_permalink(9); ?>" class="bmg-b-form__submit-btn--option">
						<span title="translation missing: en.login.login" class="translation_missing">Login</span>
					</a>
					<span>Already a member?</span>
				</div>
			</div>
		</div>
	</div>
</div>