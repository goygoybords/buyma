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
						<a href="/items/find/women/">
							<img src="<?php bloginfo('template_url');?>/images/women.jpg" alt="WOMEN">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href="/items/find/men/">
							<img src="<?php bloginfo('template_url');?>/images/men.jpg" alt="MEN">
						</a>
					</div>
				</div>
				<div class="top-bnr--devide3">
					<div class="top-bnr--img">
						<a href="/items/find/women/bags/">
							<img src="<?php bloginfo('template_url');?>/images/bags.jpg" alt="WOMEN bag">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href="/items/find/women/shoes/">
							<img src="<?php bloginfo('template_url');?>/images/shoes.jpg" alt="WOMEN shoes">
						</a>
					</div>
					<div class="top-bnr--img">
						<a href="/items/find/women/outerwear/">
							<img src="<?php bloginfo('template_url');?>/images/jacket.jpg" alt="WOMEN outer">
						</a>
					</div>
				</div>
				<h2 class="top-bnr--ttl">
					<a href="/aboutbuyma/">
						<img src="<?php bloginfo('template_url');?>/images/about.jpg" alt="What is BUYMA">
					</a>
				</h2>
			</div>
			<div class="footer-bnr--wrap">
				<div class="footer-bnr--devide3">
					<div class="footer-bnr--img">
						<a href="/aboutbuyma/">
							<img src="<?php bloginfo('template_url');?>/images/personal.jpg" alt="Personal Service">
						</a>
					</div>
					<div class="footer-bnr--img">
						<a href="/aboutbuyma/">
							<img src="<?php bloginfo('template_url');?>/images/global.jpg" alt="Global Shopping with Local Prices">
						</a>
					</div>
					<div class="footer-bnr--img">
						<a href="/aboutbuyma/">
							<img src="<?php bloginfo('template_url');?>/images/style.jpg" alt="Style Inspirations ">
						</a>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
