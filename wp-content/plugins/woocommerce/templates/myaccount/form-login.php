<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="bmg-l-wrapper js-bmg-l-wrapper">
	<div class="bmg-l-layout--s">
		<h1>Login</h1>
		<div class="error-id" messge="error_explanation">
			<?php wc_print_notices(); ?>
		</div>
		<div class="bmg-b-form">

			<div class="bmg-b-form__main">
				<form id="new_login_form" class="new_login_form" method="post" accept-charset="UTF-8" >
					<?php do_action( 'woocommerce_login_form_start' ); ?>

					<input id="login_form_redirect_path" type="hidden" name="redirect_path">
					<fieldset>
						<div class="bmg-b-form__control-group">
							<div class="bmg-b-form__control-group-inner">
								<label class="bmg-b-form__field-name" for="login_form_email">Email</label>
								<input id = "login_form_email" type="email" class="input-text" name="username" id="login_form_email" 
								value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
							</div>
						</div>
						<div class="bmg-b-form__control-group">
							<div class="bmg-b-form__control-group-inner">
								<label class="bmg-b-form__field-name" for="login_form_password">Password</label>
								<input id="login_form_password" class="js-password" type="password" name="password">
							</div>
						</div>
					</fieldset>
					
					<?php do_action( 'woocommerce_login_form' ); ?>
					
					<div class="bmg-b-form__submit-bottom--with-lead">
						<div>
							<?php wp_nonce_field( 'woocommerce-login' ); ?>
							<input id="login_form_remember_me" type="checkbox" 
							name="rememberme" value="forever" 
							checked="checked" value="1" style = "display:none;">
							<label class="bmg-b-form__check-label" for="login_form_remember_me">
								<?php _e( 'Remember me', 'woocommerce' ); ?>
							</label>		
						</div>
						<div>
							<input type="submit" class="bmg-b-form__submit-btn" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
						</div>
					</div>
				</form>
			</div>
			<div class="bmg-b-form__main--option">
				<div class="bmg-b-form__submit-bottom">
					<a class="bmg-b-form__submit-btn--option" href="<?php echo get_permalink(18); ?>">Register</a>
					<span>Not a member?</span>
				</div>
			</div>
		</div>

		<p class="bmg-u-mt10">
			<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
				<span class="translation_missing" title="translation missing: 
				en.sign_in.forgot_your_password?">
					<?php _e( 'Lost your password?', 'woocommerce' ); ?>
				</span>
			</a>
		</p>
		<?php do_action( 'woocommerce_login_form_end' ); ?>
	</div>
</div>	
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
