<footer class="content-info">
	<div class="footer-divider">
		<img src="/kfs/wp-content/themes/kfs/dist/images/footer-divider.jpg" />
	</div>
	<div class="col-lg-5 col-md-12 col-sm-12">
		<div class="footer-call">
			To Request an Appointment<br>
			<strong>Call (718) 340-3611</strong>
		</div>
		<div class="footer-logo">
			<img src="/kfs/wp-content/themes/kfs/dist/images/kfg-footer-logo.png" />
		</div><br>
		<div class="footer-copyright">
			©<?php echo date('Y'); ?> Kofinas Fertility Group. All rights reserved.
		</div>
	</div>
	<div class="col-lg-7 col-md-12 col-sm-12">
		<div class="footer-locations">
			<h2>Locations</h2>
			<div class="footer-location">
				506 6th Street<br>
				Brooklyn, NY 11215<br>
				Inside New York Methodist<br>
				Hospital, 4th Floor<br>
				Phone: 718-243-1600<br>
				<a href="https://www.google.com/maps/place/506+6th+St,+Brooklyn,+NY+11215/@40.6678105,-73.9812054,17z/data=!3m1!4b1!4m5!3m4!1s0x89c25b03aba377e7:0x24f3ceb0b92f902b!8m2!3d40.6678105!4d-73.9790167?q=506+6th+Street+Brooklyn,+NY+11215&um=1&ie=UTF-8&sa=X&ved=0ahUKEwi6xqrN2eTMAhUIwYMKHY37AyAQ_AUIBygB" target="_blank">Google Maps</a>
			</div>
			<div class="footer-location">
				4855 Hylan Blvd.<br>
				Staten Island, NY 10312<br>
				Phone: 718-356-4000<br>
				<a href="https://www.google.com/maps/place/4855+Hylan+Blvd,+Staten+Island,+NY+10312/@40.526942,-74.1702337,17z/data=!3m1!4b1!4m5!3m4!1s0x89c24a5f1d62d999:0x1c95dfb0b2bafbbb!8m2!3d40.526942!4d-74.168045" target="_blank">Google Maps</a>
			</div>
			<div class="footer-location">
				55 Central Park West<br>
				New York, NY 10023<br>
				Phone: 000-000-0000<br>
				<a href="https://www.google.com/maps/place/55+Central+Park+West,+New+York,+NY+10023/@40.7723302,-73.9812781,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258f4f6a4d195:0x365adfb3a2ee0aba!8m2!3d40.7723302!4d-73.9790894" target="_blank">Google Maps</a>
			</div>
		</div>
		<div class="footer-nav">
			<h2>Navigation</h2>
			<?php
			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav']);
			endif;
			?>
			<div id="find-us-online">
				<h2>Find Us Online</h2>
				<div id="footer-social">
				<a id="facebook" href="https://www.facebook.com/Kofinas-Fertility-Group-331401733727100/" title="Connect with us on Facebook" target="_blank">Facebook</a> <a id="twitter" href="https://twitter.com/kofinasivf" title="Follow us on Twitter" target="_blank">Twitter</a>
				<a id="youtube" href="https://www.youtube.com/channel/UCBrD2d2RppJqHWY71y997tg" title="Visit our Youtube channel" target="_blank">Youtube</a>
				<a id="googleplus" href="#" title="Connect with us on Google+" target="_blank">Google+</a><a id="linkedin" href="#" title="Find us on LinkedIn" target="_blank">LinkedIn</a>
			</div>
		</div>
	</div>
</footer>
