<?php
/**
 * Contact Us Page
 *
 */

get_header(); ?>
	<div class="bmg-l-wrapper js-bmg-l-wrapper">
			<div class="bmg-l-layout--full">
				<div class="bmg-l-layout--full__sidebar--menu">
					<a href="javascript:void(0);" class="js-my-menu-current my-menu__current">
						<i class="bmg-c-icon--arrow-down"></i>
						<i class="bmg-c-icon--arrow-up"></i>
					</a>
					<?php get_sidebar('terms'); ?>
				</div>
				<div class="bmg-l-layout--full__main">
					<h1>Contact us</h1>
					<div class="st-section">
						<div class="st-section__main">
							<h2>Contact BUYMA Support</h2>
							<p class="contact_mention">
								BUYMA is here to help our Members with any questions or concerns you may have. 
								<br>Please feel free to email our Member Support Team at 
								<a href="mailto:support@buyma.us">support@buyma.us</a> 
								and we will reply as promptly as possible. 
							</p>
						</div>
						<div class="st-section__main">
							<p class="contact_mention--bold">
								In your email please include (when necessary):
							</p>
							<div class="contact_guideline--wrap">
								<div class="contact_guideline">&ndash; Member Name
									<br>&ndash; Item Name and Item page's URL
									<br>&ndash; Order ID
								</div>
							</div>
							<p class="contact_mention--bold">BUYMA Member Support business hours:</p>
							<div class="contact_guideline--wrap">
								<div class="contact_guideline">9:30am - 6:30pm Japanese Standard Time <br>
									Closed on weekends and Japanese National Holidays
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>