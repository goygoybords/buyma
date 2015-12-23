	<?php 
		$options = array(
		        'theme_location'  => '',
		        'menu'            => 'Header',
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
	<section class="bmg-l-drawer-area">
		<div class="bmg-l-drawer">
			<div class="bmg-l-drawer__categories1 js-bmg-l-drawer__categories1">
				<ul><?php wp_nav_menu($options); ?></ul>
				<ul class="bmg-l-drawer__account">
					<li><a href="<?php echo get_permalink(9); ?>">Login</a></li>
					<li><a href="<?php echo get_permalink(18); ?>">Register</a></li>
				</ul>
			</div>
		</div>
	</section>