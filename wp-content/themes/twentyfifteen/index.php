<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="bmg-l-layout--full">
				<p class="top-mainttl">Style looks better when it's personal.</p>
				<h1 class="site-keyword">A new online personal shopping experience</h1>
				<div class="top-bnr--devide2">
					<div class="top-bnr--img">
						<?php 
							$prod_cat_args = array(
							  'taxonomy'     => 'product_cat', //woocommerce
							  'orderby'      => 'name',
							  'empty'        => 0
							);

							$woo_categories = get_categories( $prod_cat_args );
							foreach ( $woo_categories as $woo_cat ) 
							{
							    $woo_cat_id = $woo_cat->term_id; //category ID
							    $woo_cat_name = $woo_cat->name; //category name
							    $data = $woo_cat_id;
							}
						?>
							<a href="<?php echo esc_url( get_term_link( 6, 'product_cat' ) ); ?> ">
							<img src="<?php bloginfo('template_url');?>/images/cake.jpg" alt="CAKE">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href=" <?php echo esc_url( get_term_link( 9, 'product_cat' ) ); ?> ">
							<img src="<?php bloginfo('template_url');?>/images/sweets.jpg" alt="SWEETS">
						</a>
					</div>
				</div>
				<div class="top-bnr--devide3">
					<div class="top-bnr--img">
						<a href="<?php echo esc_url( get_term_link( 6, 'product_cat' ) ); ?> ">
							<img src="<?php bloginfo('template_url');?>/images/gift.jpg" alt="GIFT">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href="<?php echo esc_url( get_term_link( 6, 'product_cat' ) ); ?> ">
							<img src="<?php bloginfo('template_url');?>/images/macaron.jpg" alt="MACARON">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href="<?php echo esc_url( get_term_link( 6, 'product_cat' ) ); ?> ">
							<img src="<?php bloginfo('template_url');?>/images/matcha.jpg" alt="MATCHA">
						</a>
					</div>
				</div>
				<style type="text/css">
				a {
					text-decoration: none !important;
				}
				</style>
				<h2 class="top-bnr--ttl" style="background: transparent url('<?php bloginfo('template_url');?>/images/bg.png') no-repeat center; cursor: pointer;">
					<a href="<?php echo get_permalink(75); ?>">
						<p style="font-size: 35px; font-weight: bold; ">Bring more happiness to a place where emotion gather!</p>
						<p style="font-size: 47px; font-weight: bold; line-height: 50px;">A mail order site of delivery cake,</p>
						<p style="font-size: 62px; font-weight: bold">BirthdayPRESS</p>
						<p style="font-size: 25px; line-height: 30px; padding: 12px 0; margin: 0 200px;">
							We are general mail order site of cake. We sell more than three thousand of sweets.
							We have a variety of cakes powdered green tea, chiffon cakes, roll cakes, cheese cakes and so on!
						</p>
						<p style="font-size: 25px; line-height: 30px; padding: 12px 0; margin: 0 200px;">We will deliver cakes to your designated places such as your home, your workplace and your lodging place.</p>
						<!-- <img src="<?php //bloginfo('template_url');?>/images/bg.png" alt="What is BirthdayPress"> -->
					</a>
				</h2>
			</div>
			<div class="footer-bnr--wrap">
				<div class="footer-bnr--devide3">
					<div class="footer-bnr--img">
						<a href="<?php echo get_permalink(75); ?>">
							<img src="<?php bloginfo('template_url');?>/images/personal.jpg" alt="Personal Service">
						</a>
					</div>
					<div class="footer-bnr--img">
						<a href="<?php echo get_permalink(75); ?>">
							<img src="<?php bloginfo('template_url');?>/images/global.jpg" alt="Global Shopping with Local Prices">
						</a>
					</div>
					<div class="footer-bnr--img">
						<a href="<?php echo get_permalink(75); ?>">
							<img src="<?php bloginfo('template_url');?>/images/style.jpg" alt="Style Inspirations ">
						</a>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
