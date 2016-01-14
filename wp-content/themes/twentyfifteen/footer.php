<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
	<footer class="bmg-l-footer">
			<div class="bmg-l-footer__inner">
				<div class="bmg-l-footer__nav">
					<div class="bmg-l-footer__country">
					</div>
					<nav class="verticalmenu">
						<ul>
							<li><a href="<?php echo get_permalink(75); ?>">About BirthdayPress</a></li>
							<li><a href="<?php echo get_permalink(78); ?>">FAQ</a></li>
							<li><a href="<?php echo get_permalink(31); ?>">Contact us</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo get_permalink(80); ?>">Terms of Use</a></li>
							<li><a href="<?php echo get_permalink(83); ?>">Privacy Policy</a></li>
							<li><a href="<?php echo get_permalink(85); ?>">Notice and Takedown Policy</a></li>
							<li><a href="<?php echo get_permalink(87); ?>">Mark based on specific trade law</a></li>
						</ul>
					</nav>
				</div>
				<p class="footer-tagline">BUYMA - A new online personal shopping experience</p>
				<div class="bmg-l-footer__outer-nav">
					<nav>
						<ul>
							<li>
								<a target="_blank" href="http://www.buyma.com/">BUYMA.com (JP)</a>
							</li>
							<li>
								<a target="_blank" href="http://buymakorea.com/pages/?">BUYMA Korea</a>
							</li>
							<li>
								<a target="_blank" href="https://stylehaus.jp/">STYLE HAUS</a>
							</li>
							<li>
								<a target="_blank" href="https://www.stulio.jp/">STULIO</a>
							</li>
							<li>
								<a target="_blank" href="http://www.buymabooks.com/">BUYMA Books</a>
							</li>
							<li>
								<a target="_blank" href="http://toptip.jp/">toptip</a>
							</li>
						</ul>
					</nav>
					<p>
						<small>©2016 BirthdayPress Inc. All rights reserved.</small>
					</p>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type = "text/javascript">
			var data = '<li class="bmg-l-nav__col">' ;
       		$(".bmg-l-nav__category1--fifth .bmg-l-nav__drop-menu").append(data);
		</script>

</body>
</html>
