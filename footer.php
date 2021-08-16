<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xcode3
 */

?>

	<footer id="colophon" class="site-footer">
			<div class="xc-footer-main">
				<div class="container">
					<div class="row">
					<div class="col-md-4">
						<div class="xc-footer-heading">
								<h3>ABOUT US</h3>
						</div>
                        <a href="http://192.168.1.73/xcode3/"><img src="http://192.168.1.73/xcode3/wp-content/themes/xcode3/images/xc-footer-logo.png" alt="xc-footer-logo"/></a>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
industry. Lorem Ipsum has been the industry's standard dummy.</p>
					</div>
                    <div class="col-md-2">
						<div class="xc-footer-heading">
								<h3>QUICK LINKS</h3>
</div>
								<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
						
					
					</div>
                    <div class="col-md-2">
						<div class="xc-footer-heading">
								<h3 style="visibility:hidden;">QUICK LINKS</h3>
</div>
								<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
						
					
					</div>
                    <div class="col-md-4">
						<div class="xc-footer-heading">
								<h3>CONTACT US</h3>
						</div>
                        <ul class="xc-footer-social">
                        <li><i class="fa fa-map-marker-alt"></i>Lorem Ipsum is simply dummy text of the printing</li>
                        <li><i class="fa fa-mobile-alt"></i><a href="tel:(03) 8339 4569">(03) 8339 4569 </a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@theme.com">info@theme.com</a></li>
                        </ul>
					</div>	
					
				</div>
			</div>
			</div>

		<div class="footer-site-info">
        	<div class="container">
			<p class="copyright text-center">Copyrights 2021. All Rights Reserved.</p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/94f32119b6.js" crossorigin="anonymous"></script>
</body>
</html>
