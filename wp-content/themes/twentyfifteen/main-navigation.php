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
	        'items_wrap'      => '<ul>%3$s</ul>',
	        'depth'           => 0,
	        'walker'          => new MySubMenu()
	    ); 
?>

	<nav class="bmg-l-nav">
			<div class="bmg-l-nav__inner">
				<?php wp_nav_menu($options); ?>

				<div class="bmg-l-header__search--full js-search-keyword-navigation">
					<input class="bmg-l-header__search-input js-search-keyword-navigation-input" type="text" value="" placeholder="Search for Items or Brands">
					<a class="bmg-l-header__search-btn js-search-keyword-navigation-button" href="/items/find" type="text">
						<i class="bmg-c-icon--search"></i>
					</a>
				</div>
			</div>
		</nav>