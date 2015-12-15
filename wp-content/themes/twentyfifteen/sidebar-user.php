		
		<div class="bmg-l-layout--full__sidebar">
			<a href="javascript:void(0);" class="js-my-menu-current my-menu__current">
				<i class="bmg-c-icon--arrow-down"></i>
				<i class="bmg-c-icon--arrow-up"></i>Account Settings
			</a>
			<div class="js-my-menu my-menus">
				<p class="my-menu__ttl">My Menu</p>
				<ul class="my-menu">

					<li><a href="<?php echo wc_customer_edit_account_url(); ?>">Account Settings</a></li>
				</ul>
				<ul class="my-menu">
					<li><a href="/my/purchases">Order History</a></li>
				</ul>
				<ul class="my-menu">
					<li><?php echo '<a href="'.wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Logout</a>'; ?></li>
				</ul>
			</div>
		</div>