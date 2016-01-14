<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="Discover new trends, styles &amp; rare items from around the world and have them shipped to you for local market prices--all with Japanese 'Omotenashi' hospitality. Experienced, trusted Personal Shopper will retrieve the item you must like! Find dresses, coats, shoes, bags, accessories, eveningwear, interiors, kitchenware, and more! Standard shipping included.">
	<meta name="keywords" content="online,international shopping,shipping,new trends,rare items,fashion,style trends,bridal,home interior,designer brands,trend forecasting,style,C2C,stylish,fashionable,shop,gifts,global,luxury,designer,clothing,streetwear,apparel,Japanese companies,personal shopper">
	<title>Gift gifts comprehensive - birthday Press</title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="<?php bloginfo('template_url'); ?>/css/top-bundle.css" media="screen" rel="stylesheet">
	
	<?php if(is_shop() || is_product_category()) { ?>
		<link href="<?php bloginfo('template_url'); ?>/css/shop.css" type="text/css" rel="stylesheet" />
	<?php } else if(is_cart() || is_checkout()) { ?>
		<link href="<?php bloginfo('template_url'); ?>/css/cart.css" type="text/css" rel="stylesheet" />
	<?php } else if(is_product()) { ?>
		<link href="<?php bloginfo('template_url'); ?>/css/item-detail.css" type="text/css" rel="stylesheet" />
	<?php } else if(is_page( 75 ) || is_page(31) || is_page(83) || is_page(80) || is_page(85) || is_page(87) ) { ?>
		<link href="<?php bloginfo('template_url'); ?>/css/about.css" type="text/css" rel="stylesheet" />
	<?php } ?>



	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="//www.birthday-press.com/favicon.ico" type="image/vnd.microsoft.icon">
	<script src="<?php bloginfo('template_url');?>/js/application-bundle.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="js-ajax-spinner"></div>
	<div class="js-modal-contents"></div>
	<div class="bmg-l-drawer-close-area js-drawer-close-area"></div>
	<!-- navigation -->
	<?php get_template_part( 'content' , 'mobilemenu' ); ?>
	<header id="js-header" class="bmg-l-header">
		<div class="bmg-l-header__top">
			<a class="bmg-l-header__logo" href="<?php echo home_url('/'); ?>">
				<img width="94" src="<?php bloginfo('template_url'); ?>/images/buyma.png" alt="BUYMA-A new online personal shopping experience">
			</a>
			<?php get_product_search_form(); //get_search_form(); ?>
			<a class="bmg-l-header__list-btn js-header-list-btn" href="javascript:void(0);">
				<i class="fa fa-list fa-2x"></i>
			</a>
			<nav class="bmg-l-header__menu">
				<ul>
					<li class="bmg-l-header__attention">*SHIPPING INCLUDED
						<br>
						<a target="_blank" href="">FIND OUT MORE</a>
					</li>
					<li class="bmg-l-header__account">
						<?php 
							if(is_user_logged_in()) 
							{
								global $current_user;
     							 get_currentuserinfo();
								echo '<a class="bmg-btn--secondary" href="'.
								get_permalink(9).'">'.$current_user->user_email.'</a>';
							}
							else
								echo '<a class="bmg-btn--secondary" href="'.get_permalink(9).'">Login</a>';
						?>
					</li>
					<li class="bmg-l-header__account">
						<?php if(!is_user_logged_in()) { ?>
						<a class="bmg-b-text-color--keycolor" href="<?php echo get_permalink(18); ?>">Register</a>
						<?php } ?>
					</li>
					<li>
						<a href="<?php echo get_permalink(7); ?>">
							<i class="fa fa-shopping-bag fa-2x"></i>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<?php get_template_part('main-navigation'); ?>
	</header>
