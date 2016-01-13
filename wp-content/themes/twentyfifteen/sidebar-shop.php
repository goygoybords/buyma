	<?php 
		$options = array(
		        'theme_location'  => '',
		        'menu'            => 'Shop Sidebar',
		        'container'       => '',
		        'container_class' => '',
		        'container_id'    => '',
		        'menu_class'      => '',
		        'menu_id'         => '',
		        'echo'            => true,
		        'fallback_cb'     => 'wp_page_menu',
		        'before'          => '',
		        'after'           => '',
		        'link_before'     => '',
		        'link_after'      => '',
		        'items_wrap'      => '%3$s',
		        'depth'           => 0,
		        'walker'          => new MySubMenu()
		    ); 
	?>
	<div class="bmg-l-layout--full__sidebar js-sr-refine">
		<div class="sr-refine">
			<div class="sr-refine__main">
				<div class="sr-refine__header">
					<p>Refine</p>
					<a class="sr-refine__clear-btn" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
						Clear All
					</a>
				</div>
				<div class="sr-refine__category">
					<h2 class="js-sr-refine__title">Product Category
					</h2>
					<div class="sr-refine__category-list js-sr-refine__items">
						<ul class="sr-refine__category-facets">
							<?php wp_nav_menu($options); ?>
						</ul>
					</div>
				</div>
				<div class="sr-refine__brand">
					<div class="sr-refine__brand-list js-sr-refine__items"></div>
				</div>
				<div class="sr-refine__color"></div>
				<div class="sr-refine__price"></div>
			</div>
		</div>
	</div>