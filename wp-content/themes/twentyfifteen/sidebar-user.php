		<div class="bmg-l-layout--full__sidebar">
			<div class="js-my-menu my-menus">
				<p class="my-menu__ttl">My Menu</p>
				<ul class="my-menu">
					<li>
						<a href="<?php echo get_permalink(9);?>">
							Billing Settings
						</a>
					</li>
				</ul>
				<ul class="my-menu">
					<li>
						<a href="<?php echo wc_customer_edit_account_url(); ?>">
							Account Settings
						</a>
					</li>
				</ul>	
				<ul class="my-menu">
					<li><a href="<?php echo get_permalink(37); ?>">Order History</a></li>
				</ul>
				<ul class="my-menu">
					<li><?php echo '<a href="'.wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Logout</a>'; ?></li>
				</ul>
			</div>
		</div>