<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<!--Start footer-->
<footer class="footer">
	<div class="primary-footer">
		<div class="container-fluid">
			<div class="row">
				<aside class="col-lg-3">
					<div class="FooterAdress"> <a href="<?php get_site_url() ?>"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" class="img-fluid footer-logo" alt=""></a>
						<ul>
							<li class="d-flex flex-row"><i class="far fa-map-marker-alt"></i><span>4400 N. Federal Highway, Suite 210 <br/>Boca Raton, FL 33431</span></li>
							<li class="d-flex flex-row"><i class="far fa-phone"></i> <a href="tel:9542715970">(954) 271-5970</a></li>
							<li class="d-flex flex-row"><i class="fal fa-envelope"></i> <a href="mailto:info@expandforce.com">info@expandforce.com</a></li>
						</ul>
					</div>
				</aside>
				<aside class="col-lg-2 col-md-4">
					<div class="FooterLink">
						<h4>IT Services</h4>
						<?php
						wp_nav_menu( array(
							'menu'=> 'IT Services',
						) );
						?>
					</div>
				</aside>
				<aside class="col-lg-2 col-md-4">
					<div class="FooterLink">
						<h4>Solutions</h4>
						<?php
						wp_nav_menu( array(
							'menu'=> 'Solutions',
						) );
						?>
					</div>
				</aside>
				<aside class="col-lg-2 col-md-4">
					<div class="FooterLink">
						<h4>Company</h4>
						<?php
						wp_nav_menu( array(
							'menu'=> 'Company',
						) );
						?>
					</div>
				</aside>
				<aside class="col-lg-3">
					<div class="FooterPayment">
						<h5 class="text-uppercase">PAYMENT OPTIONS</h5>
						<img alt="visa" src="<?php echo get_template_directory_uri()?>/assets/img/visa.png"> <img alt="mastercard" src="<?php echo get_template_directory_uri()?>/assets/img/mastercard.png"> <img alt="american" src="<?php echo get_template_directory_uri()?>/assets/img/american-express.png"> <img alt="paypal" src="<?php echo get_template_directory_uri()?>/assets/img/paypal.png">
						<img alt="secure" src="<?php echo get_template_directory_uri()?>/assets/img/secure-payment.png" class="my-4">
						<p><a href="<?php the_permalink('18173'); ?>" target="_blank" class="btn btn-danger btn-round btn-lg text-uppercase">Make Payment</a></p>
					</div>
				</aside>
			</div>
		</div>
	</div>
	<div class="secondary-footer">
		<div class="container-fluid">
			<div class="row">
				<aside class="col-xl-9">
					<?php
					wp_nav_menu( array(
						'menu'=> 'Footer Menu',
						'menu_class'=> 'footer-menu'
					) );
					?>
				</aside>
				<aside class="col-xl-3">
					<ul class="social-footer">
						<li>Follow Us</li>
						<li><a target="_blank" href="https://www.facebook.com/Expand-Force-105575587585512" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/ExpandForce" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/channel/UCtwuMJFzzkfFCrdt4ADTnmQ" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fab fa-youtube"></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/company/expandforce" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/expandforce" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</aside>
			</div>
			<div class="row">
				<div class="col-md-12"> <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt="logo1" class="img-fluid footer-bottom-logo"> <span class="copy">&copy; Copyright <?php echo date('Y'); ?>. All rights reserved.</span></div>
			</div>
		</div>
	</div>
</footer>
<!--End footer-->
</div>
<section class="cookie" id="myDIV" style="display:none;">
  <p>
    This website uses cookies in order to offer you the most relevant information. Please accept cookies for optimal
    performance.
    <a class="learn-more" href="https://www.expandforce.com/privacy/">Learn More</a>
    <a onclick="myFunction()" class="accept-cookies" href="javaScript:void(0)">Yes I Accept Cookies</a>
  </p>
</section>
  <a onclick="myFunction()" class="show-cookie" id="myDIV" href="javaScript:void(0)">Privacy & Cookies Policy</a>

<!-- Setup of jquery JS -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/moment.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/popper.min.js"></script>

<!-- Setup of Bootstrap JS -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/owl.carousel.js"></script>

<!-- Setup of Menu JS -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/stellarnav.js"></script>

<!-- Setup of Custom JS -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/custom.js"></script>

<!-- <script type="text/javascript">
Tawk_API = Tawk_API || {};
Tawk_API.onStatusChange = function (status){
	if(status === 'online')
	{
		document.getElementById('tawkbutton').innerHTML = '<a href="javascript:void(Tawk_API.toggle())"><img src="https://expandforce.com/wp-content/themes/nanosoft/assets/img/chat.png" alt="icon" /></a>';
	}
	else if(status === 'away')
	{
		document.getElementById('tawkbutton').innerHTML = '<img src="https://expandforce.com/wp-content/themes/nanosoft/assets/img/chat.png" alt="icon" />';
	}
	else if(status === 'offline')
	{
		document.getElementById('tawkbutton').innerHTML = '<img src="https://expandforce.com/wp-content/themes/nanosoft/assets/img/chat.png" alt="icon" />';
	}
};
</script> -->
<script>
	 function myFunction() {
		 var x = document.getElementById("myDIV");
		 if (x.style.display === "none") {
			 x.style.display = "block";
		 } else {
			 x.style.display = "none";
		 }
	 }
 </script>
<script>
//sticky Header //
jQuery(window).scroll(function () {
var scroll = jQuery(window).scrollTop();

if (scroll >= 200) {
	jQuery("#header").addClass("sticky");
} else {
	jQuery("#header").removeClass("sticky");
}
});
//stellarnav
jQuery(document).ready(function ($) {
	jQuery('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 1023,
		position: 'right',
		phoneBtn: '',
		locationBtn: ''
	});
});
</script>
<?php wp_footer(); ?>
</body>
</html>
