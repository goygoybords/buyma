<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( ); ?>
	
	<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="bmg-l-breadcrumbs">
				<?php echo woocommerce_breadcrumb(); ?>
			</div>
		
			<div class="sr-total js-sr-refine__total">
				<?php 
					$args = array( 'post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => -1 );
					$products = new WP_Query( $args );
					echo "View: ".$products->found_posts;
				?>
			</div>
			<div class="bmg-l-layout--full">
				<?php get_sidebar('shop'); ?>
					<div class="bmg-l-layout--full__main">
						
						<ul class="sr-main">
							<?php if ( have_posts() ) : ?>
								<?php woocommerce_product_loop_start(); ?>
									<?php woocommerce_product_subcategories(); ?>

									<?php while ( have_posts() ) : the_post(); ?>

										<?php wc_get_template_part( 'content', 'product' ); ?>

									<?php endwhile; // end of the loop. ?>

								<?php woocommerce_product_loop_end(); ?>

								<?php
									/**
									 * woocommerce_after_shop_loop hook
									 *
									 * @hooked woocommerce_pagination - 10
									 */
									do_action( 'woocommerce_after_shop_loop' );
								?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			
			</ul>  
			<!-- <nav class="pagination">
				<span class="page current"></span>
				<span class="page">
					<a href="/ph/items/find/?page=2" rel="next">2</a>
				</span>
				<span class="page">
					<a href="/ph/items/find/?page=3">3</a>
				</span>
				<span class="page">
					<a href="/ph/items/find/?page=4">4</a>
				</span>
				<span class="page gap">…</span>
				<span class="next">
					<a href="/ph/items/find/?page=2" rel="next">Next ›</a>
				</span>
				<span class="last">
					<a href="/ph/items/find/?page=496">Last »</a>
				</span>
			</nav> -->
		</div>
	</div>

<?php get_footer( ); ?>

