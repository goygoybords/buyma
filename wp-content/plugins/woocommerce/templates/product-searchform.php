<!-- <form role="search" method="get"  action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>
 -->

 <form action="<?php echo home_url('/');?>" method="get">
	<div class="bmg-l-header__search js-search-keyword-navigation">
		<input class="bmg-l-header__search-input js-search-keyword-navigation-input" type="text" 
		value="<?php echo get_search_query(); ?>" name="s" placeholder="Search for items, brands, or your style">
		<input type = "submit" class="bmg-l-header__search-btn" value = "">
		<i style = "position: absolute;top: 10px; margin-left: -30px; color: white;"class="fa fa-search"></i>
		<input type="hidden" name="post_type" value="product" />
	</div>
</form>