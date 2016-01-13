 <form action="<?php echo home_url('/');?>" method="get">
	<div class="bmg-l-header__search js-search-keyword-navigation">
		<input class="bmg-l-header__search-input js-search-keyword-navigation-input" type="text" 
		value="<?php echo get_search_query(); ?>" name="s" placeholder="Search for cakes">
		<input type = "submit" class="bmg-l-header__search-btn" value = "">
		<i style = "position: absolute;top: 10px; margin-left: -30px; color: white;"class="fa fa-search"></i>
		<input type="hidden" name="post_type" value="product" />
	</div>
</form>