<?php
/*
Template Name:  Partners
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title() ?></h1>
			<!-- <p class="lead text-white">Run daily IT operations with our assistance to render vendor-certified services from Technicians, Project Managers, and Sales Reps to extend or create a dedicated IT team.</p> -->
		</div>
	</div>
</div>
<!--End Inner Banner-->
<!--Start main Part-->
<main class="main">
	<!--Start Breadcrumb-->
	<nav aria-label="breadcrumb" class="BreadCrumbWrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
			</ol>
		</div>
	</nav>
	<!--End Breadcrumb-->
	<div class="categoryHighLights mt-4">
		<div class="bg-white">
			<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 mb-4 mb-xl-5">
					<div class="row">
						<?php if(have_rows('box_repeater')){
							$i=0;
							while(have_rows('box_repeater')): the_row('box_repeater');
						?>
						<aside class="col-sm-6">
							<div class="bg-light border p-4 PartnersCounter">
								<h2><?php the_sub_field('box_title'); ?></h2>
								<div class="counter display-counter"> <span class="counter-value" data-count="<?php the_sub_field('box_number'); ?>">0</span><span><?php the_sub_field('box_percentage'); ?></span> </div>
								<p class="counter-below-caption"><?php the_sub_field('box_content'); ?></p>
								<div class="sep-single"></div>
								<div class="partners-logo"> <img src="<?php the_sub_field('box_image'); ?>" alt="<?php the_sub_field('box_title'); ?>"> </div>
							</div>
						</aside>
						<?php $i++; endwhile; } ?>
					</div>

					<!-- <hr class="mt-2 hight1 mb-4">
					<div class="PartnershipDistribution">
					<h2 class="small mb-5 text-center">Partnership with Distribution</h2>
					<div class="row">
						<aside class="col-lg-4">
							<div class="PartnershipDistributionBox bg-light p-4 text-center">
								<h2 class="small">Ingram Micro</h2>
								<img src="<?php echo get_template_directory_uri()?>/assets/img/ingram.png" alt="Ingram">
							</div>
						</aside>
						<aside class="col-lg-4">
							<div class="PartnershipDistributionBox bg-light p-4 text-center">
								<h2 class="small">Tech Data</h2>
								<img src="<?php echo get_template_directory_uri()?>/assets/img/Tech-Data.png" alt="Tech Data">
							</div>
						</aside>
						<aside class="col-lg-4">
							<div class="PartnershipDistributionBox bg-light p-4 text-center">
								<h2 class="small">SYNNEX Corporation</h2>
								<img src="<?php echo get_template_directory_uri()?>/assets/img/SYNNEX-Corporation.png" alt="SYNNEX Corporation">
							</div>
						</aside>
					</div>
					</div> -->

					<hr class="mt-2 hight1 mb-4">
					<div class="OurExpertise">
					<h2 class="small mb-3 text-center">Our Expertise</h2>
					<ul class="OurExpertiseList">
						<?php if(have_rows('bullet_points')){
							$i=0;
							while(have_rows('bullet_points')): the_row('bullet_points');
						?>
						<li><?php the_sub_field('points'); ?></li>
						<?php $i++; endwhile; } ?>						
					</ul>
					<div class="spacer-15"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-5">
					<?php echo do_shortcode('[contact-form-7 id="19030" title="Our technical advisers are just a click away. Fill out the form below to get started!"]'); ?>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--Start Blog-->
	<div class="blog mt50">
		<div class="container-fluid">
			<h2 class="small text-center">Latest Blogs &amp; Happenings</h2>
			<div class="blogContenWrapper border-bottom mt-4">
				<div class="row">
					<div class="col-lg-4 d-flex mb-5 order-last order-lg-first">
						<form action="#" method="post" class="w-100" novalidate>
							<div class="service-enquiry">
								<h3> Submit Your Inquiry Now !</h3>
								<div class="row">
									<aside class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="FirstName" placeholder="First Name">
										</div>
									</aside>
									<aside class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="LastName" placeholder="Last Name">
										</div>
									</aside>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="CompanyName" placeholder="Company Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="Email" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" id="MobileNo" placeholder="Mobile No">
								</div>
								<div class="form-group select-wrapper">
									<select name="Intrestedin" class="form-control" aria-invalid="false">
										<option value="Interested In">Interested In</option>
										<option value="IT services">IT services</option>
										<option value="Microsoft Products">Microsoft Products</option>
										<option value="CISCO Products">CISCO Products</option>
										<option value="Phone Systems">Phone Systems</option>
										<option value="Hardware">Hardware</option>
										<option value="Staff Augmentation">Staff Augmentation</option>
										<option value="Application Development">Application Development</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="form-group select-wrapper">
									<select name="Source" class="form-control" aria-invalid="false">
										<option value="How did you find us?">How did you find us?</option>
										<option value="Google Search">Google Search</option>
										<option value="Bing Search">Bing Search</option>
										<option value="Microsoft">Microsoft</option>
										<option value="CISCO">CISCO</option>
										<option value="Clutch">Clutch</option>
										<option value="Newsletter">Newsletter</option>
										<option value="Blogs">Blogs</option>
										<option value="Social Media Posts">Social Media Posts</option>
										<option value="Tradeshows and events">Tradeshows and events</option>
										<option value="Referrals">Referrals</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="form-group">
									<textarea name="your-message" cols="40" rows="7" class="form-control" aria-invalid="false" placeholder="Your message here"></textarea>
								</div>
								<div class="form-group"> <img src="<?php echo get_template_directory_uri()?>/assets/img/captcha.png" alt="" class="captcha"> </div>
								<div class="text-center">
									<button class="btn product-button w-100">SEND</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-8 d-flex mb-5 order-first order-lg-last">
						<div class="latestBlogContent">
							<article>
								<div> <img src="<?php echo get_template_directory_uri()?>/assets/img/Audit-logs-for-M365.png" alt="Audit-logs-for-M365" class="img-fluid w-100"></div>
								<div>
									<h5 data-fontsize="16" data-lineheight="19"> <a href="#" target="_blank">Manage Fraud and Breach Incidents with Audit Logs in Microsoft 365</a></h5>
									<p> The Office 365 audit logs record every event that occurs in SharePoint, Azure Active Directory, Power BI</p>
								</div>
								<div> <a href="#" target="_blank">Learn More</a></div>
							</article>
							<article>
								<div> <img src="<?php echo get_template_directory_uri()?>/assets/img/Microsoft-for-Healthcare.png" alt="Microsoft-for-Healthcare" class="img-fluid w-100"></div>
								<div>
									<h5 data-fontsize="16" data-lineheight="19"> <a href="#" target="_blank">Deliver better insights, and care with Microsoft Cloud for Healthcare</a></h5>
									<p> Microsoft Cloud for Healthcare brings together existing and future capabilities important to how care teams communicate</p>
								</div>
								<div> <a href="#" target="_blank">Learn More</a></div>
							</article>
							<article>
								<div> <img src="<?php echo get_template_directory_uri()?>/assets/img/ERP-system-and-D365-.png" alt="ERP-system-and-D365-" class="img-fluid w-100"></div>
								<div>
									<h5 data-fontsize="16" data-lineheight="19"> <a href="#" target="_blank">Bring all your ERP together with Dynamics 365</a></h5>
									<p> The application is a cloud-based technology meaning it is hosted on Microsoft servers</p>
								</div>
								<div> <a href="#" target="_blank">Learn More</a></div>
							</article>
							<article>
								<div> <img src="<?php echo get_template_directory_uri()?>/assets/img/Microsoft-365-and-windows-10-duo.png" alt="Microsoft-365-and-windows-10-duo" class="img-fluid w-100"></div>
								<div>
									<h5 data-fontsize="16" data-lineheight="19"> <a href="#" target="_blank">Windows 10 + Microsoft 365 Education! The DUO</a></h5>
									<p> The digital transformation has opened alternative ways to conduct business and other activities from their homes called remote working.</p>
								</div>
								<div> <a href="#" target="_blank">Learn More</a></div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Blog-->
	<!--Start pageNavigator-->
	<div class="pageNavigator mt50 mb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="d-flex flex-wrap pageNavigatorWrapper"> <a href="#" class="btn btn-md btn-outline-primary rounded-pill"> <i class="fas fa-arrow-left mr-3"></i> Back to Cloud Services </a> <a href="#" class="btn btn-md btn-outline-primary rounded-pill ml-auto"> Go to Cloud Phone System <i class="fas fa-arrow-right ml-3"></i> </a></div>
				</div>
			</div>
		</div>
	</div>
	<!--End pageNavigator-->
	<!--Start email Subscription-->
	<div class="emailSubscription">
		<div class="container-fluid">
			<h5 data-fontsize="21" data-lineheight="26">Want to keep up with all our discoveries? <strong>Sign up for our blog</strong></h5>
			<div class="emailSubscriptionField rounded-pill">
				<form method="post" action="#" id="mjForm">
					<div class="form-group">
						<input type="email" name="subscription_email" id="mailjet_widget_email" required="required" placeholder="* Enter Your Email ID">
						<input type="hidden" name="subscription_locale" id="mailjet_widget_locale" value="en_US">
					</div>
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
	<!--End email Subscription-->
</main>
<!--End main Part-->
<script>
    var a = 0;
    jQuery(window).scroll(function () {
      var oTop = jQuery('.counter').offset().top - window.innerHeight;
      if (a == 0 && jQuery(window).scrollTop() > oTop) {
        jQuery('.counter-value').each(function () {
          var jQuerythis = jQuery(this),
            countTo = jQuerythis.attr('data-count');
          jQuery({
            countNum: jQuerythis.text()
          }).animate({
            countNum: countTo
          },

            {

              duration: 7000,
              easing: 'swing',
              step: function () {
                jQuerythis.text(Math.floor(this.countNum));
              },
              complete: function () {
                jQuerythis.text(this.countNum);
                //alert('finished');
              }

            });
        });
        a = 1;
      }
    });
  </script>
<?php get_footer();?>
