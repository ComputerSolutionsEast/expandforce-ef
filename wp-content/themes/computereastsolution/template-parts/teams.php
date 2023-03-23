<?php
/*
Template Name:  Microsoft Teams
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title(); ?></h1>
			<p class="lead text-white"><?php the_field('banner_content'); ?></p>
		</div>
	</div>
</div>
<!--End Inner Banner-->
<!--Start Breadcrumb-->
<nav aria-label="breadcrumb" class="BreadCrumbWrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
			<?php if(have_rows('breadcrum_repeater')){
				$i=0;
				while(have_rows('breadcrum_repeater')): the_row('breadcrum_repeater');
			?>
			<li class="breadcrumb-item"><a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('page_title'); ?></a></li>
			<?php $i++; endwhile; } ?>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>
</nav>
<!--End Breadcrumb-->

<!--Start main Part-->
<main class="main">
	<div class="msoft-team">
		<div class="container-fluild">
			<div class="team-desc">
				<h2 class="team-title">
					<?php the_field('first_section_title'); ?>
				</h2>
				<?php the_field('first_section_content'); ?>
			</div>
			<div class="achive-part">
				<h2 class="team-title">
					<?php the_field('second_section_title'); ?>
				</h2>
				<div id="accordion-container" class="achive-team">
					<div id="accordion__img">
						<img id="meeting-img" src="<?php the_field('second_section_left_image'); ?>" alt="Meeting">
						<!-- <img id="calling-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-info.jpg" alt="Calling">
						<img id="device-img" src="<?php echo get_template_directory_uri()?>/assets/img/awardfirst.jpg" alt="Device">
						<img id="app-integration-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-discussion.jpg" alt="App Integration">
						<img id="firstline-workers-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-info.jpg" alt="Firstline Workers">
						<img id="healthcare-img" src="<?php echo get_template_directory_uri()?>/assets/img/awardfirst.jpg" alt="Healthcare">
						<img id="security-compliance-img" src="<?php echo get_template_directory_uri()?>/assets/img/about-discussion.jpg" alt="Security & compliance"> -->
					</div>

					<div id="services__accordion">
						<?php if(have_rows('second_section_right')){
							$i=0;
							while(have_rows('second_section_right')): the_row('second_section_right');
						?>
						<div class="accordion" tab-name="meeting<?php echo $i; ?>">
							<h3 class="">
							<a href="" title="<?php the_sub_field('right_title'); ?>">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/arrow-right.png" alt="Right Arrow">
									<span> <?php the_sub_field('right_title'); ?></span>
							</a>
							</h3>
							<div class="accordion__body">
								<?php the_sub_field('right_description'); ?>
							</div>
							<!-- /.accordion__body -->
						</div>
						<?php $i++; endwhile; } ?>
					</div>
					<!-- /#services__acordion -->
				</div>
			</div>
			<div class="team-plan">
				<h2 class="team-title">
					Which Teams Plan is right for you?<br>(Plans & Pricing)
				</h2>
				<div class="plan-table">
					<div class="scroll-wrap">
					<div class="table-responsive">
						<table class="table table-borderless">
							<tbody>
								<tr>
									<td class="part-info">
										<span class="right-small">
											<img src="<?php echo get_template_directory_uri()?>/assets/img/check-transparent.png" alt="right-big-transpernt">Partially included</span>
										<span class="right-small">
											<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="right-small" data-ce-key="1292">Included</span>
									</td>
									<td align="center">
										<b>Free</b>
										<br/>
										<span> (no commitment)</span>
										<br/>
										<b>&nbsp;</b>
										<h3>
											Microsoft Teams (free)
										</h3>
										<a onclick="$('#demo-form').slideDown()" title="Schedule a demo now" class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</a>
									</td>
									<td align="center">
										<b>$12.50</b>
										<br/>
										<b>user/month</b>
										<br/>
										<span> (annual commitment)</span>
										<h3>
											Office 365 Business Premium
										</h3>
										<a onclick="$('#demo-form').slideDown()" title=" Schedule a demo now" class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</a>
									</td>
									<td align="center">
										<b>$20.50</b>
										<br/>
										<b>user/month</b>
										<br/>
										<span>(annual commitment)</span>
										<h3>
											Office 365 E3
										</h3>
										<a onclick="$('#demo-form').slideDown()" title=" Schedule a demo now" class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="accordion" id="accordionExample">
						<div class="card">
							<div class="card-header" id="headingOne">
									<div class="table-responsive">
										<table class="table table-borderless">
											<tbody>
												<tr>
												<td>
														<h2>
															<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																<i class="fa fa-plus"></i>
																<div>Chat-based collaboration</div>
															</button>
														</h2>
													</td>
													<td align="center">
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-transparent.png" alt="check-transparent">
													</td>
													<td align="center">
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td align="center">
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
							</div>

							<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td align="left">
														Unlimited messages and search
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
												<tr>
													<td align="left">
														Guest access
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<div class="table-responsive">
									<table class="table table-borderless">
										<tbody>
											<tr>
												<td>
													<h2>
														<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
															<i class="fa fa-plus"></i>
															<div>Security & compliance</div>
														</button>
													</h2>
												</td>
												<td align="center">
													<img src="<?php echo get_template_directory_uri()?>/assets/img/check-transparent.png" alt="check-transparent">
												</td>
												<td align="center">
													<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
												</td>
												<td align="center">
													<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							 <div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td align="left">
														Region-based data residency
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
												<tr>
													<td align="left">
														Data encryption at rest and in transit
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<div class="table-responsive">
									<table class="table table-borderless">
										<tbody>
											<tr>
												<td>
													<h2>
														<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
															<i class="fa fa-plus"></i>
															<div>Administration & support</div>
														</button>
													</h2>
												</td>
												<td align="center">

												</td>
												<td align="center">
													<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
												</td>
												<td align="center">
													<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td align="left">
														24/7 phone and web support
													</td>
													<td>

													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
												<tr>
													<td align="left">
														Admin tools for managing users and apps
													</td>
													<td>

													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
													<td>
														<img src="<?php echo get_template_directory_uri()?>/assets/img/check-dark.png" alt="check-dark">
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive bottom-info">
						<table class="table table-borderless">
							<tbody>
								<tr>
									<td align="center">

									</td>
									<td align="center">
										<b>Free</b>
										<br/>
										<span> (no commitment)</span>
										<br/>
										<b>&nbsp;</b>
										<h3>
											Microsoft Teams (free)
										</h3>
										<button onclick="$('#demo-form').slideDown()" title=" Schedule a demo now" class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</button>
									</td>
									<td align="center">
										<b>$12.50</b>
										<br/>
										<b>user/month</b>
										<br/>
										<span> (annual commitment)</span>
										<h3>
											Office 365 Business Premium
										</h3>
										<button onclick="$('#demo-form').slideDown()" title=" Schedule a demo now" class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</button>
									</td>
									<td align="center">
										<b>$20.50</b>
										<br/>
										<b>user/month</b>
										<br/>
										<span>(annual commitment)</span>
										<h3>
											Office 365 E3
										</h3>
										<button onclick="$('#demo-form').slideDown()" title=" Schedule a demo now"  class="btn btn-danger btn-round btn-lg text-uppercase">
											 Schedule a demo now
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				</div>
				<div class="demo-form" id="demo-form" style="display: none;">
					<h2 class="team-title">
						Schedule a demo now
					</h2>
					<?php echo do_shortcode('[contact-form-7 id="17949" title="Schedule a demo now"]') ?>
					<!-- <form>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="First Name">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Company Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Mobile No.">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="selectpicker">
										<option>Interested In</option>
										<option>IT services</option>
										<option>Microsoft Products</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="selectpicker">
										<option>How did you find us?</option>
										<option>Google Search</option>
										<option>Bing Search</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="input-group">
									<textarea type="textarea" class="form-control" placeholder="Your message here"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="input-group captcha">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/captcha.png" alt="Capctha">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="demo-form-btn">
									<button class="btn btn-white" title="Send">
										Send
									</button>
								</div>
							</div>
						</div>
					</form> -->
				</div>
			</div>
			<div class="resource">
				<h2 class="team-title">
					Resources
				</h2>
				<div class="row">
					<div class="col-xl-3 col-md-6 col-sm-6 col-xs-12">
						<div class="faq-team resource-box">
							<h3>FAQs</h3>
							<div id="accordion" class="accordion">
								<div class="card mb-0">
									<?php if(have_rows('faq_section')){
										$i=0;
										while(have_rows('faq_section')): the_row('faq_section');
									?>
										<div class="card-header collapsed" data-toggle="collapse" href="#faq<?php echo $i; ?>">
												<a class="card-title" href="javascript:void(0)">
													<i class="fa fa-plus" aria-hidden="true"></i>
														<?php the_sub_field('question'); ?>
												</a>
										</div>
										<div id="faq<?php echo $i; ?>" class="card-body collapse" data-parent="#accordion" >
												<?php the_sub_field('answer'); ?>
												<a href="<?php the_sub_field('link'); ?>" title="Learn More" class="faq-learn-more">Learn More</a>
										</div>
										<?php $i++; endwhile; } ?>
								</div>
							</div>
							<div class="faq-btn">
								<a href="https://www.computersolutionseast.com/faqs" title="See All FAQ’s" class="btn btn-danger btn-sm btn-round">
									See All FAQ’s
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-xs-12">
						<div class="video-guide resource-box">
							<h3>Video Guides</h3>
							<div class="video-slider owl-carousel owl-theme">
								<?php if(have_rows('video_guide')){
									$i=0;
									while(have_rows('video_guide')): the_row('video_guide');
								?>
									<div class="item">
										<div class="v-img">
											<a href="javascript:void(0)" title="<?php the_sub_field('guide_title'); ?>">
												<iframe allowfullscreen width="390" height="220" src="https://content.cloudguides.com/en-US/Guides/Transform your meeting rooms with Microsoft Teams Rooms" frameborder="0" scrolling="no"/></iframe>
												<!-- <img src="<?php the_sub_field('guide_image'); ?>" alt="<?php the_sub_field('guide_title'); ?>"> -->
											</a>
										</div>
										<div class="v-desc">
											<a href="javascript:void(0)" class="v-title" title="<?php the_sub_field('guide_title'); ?>">
												<?php the_sub_field('guide_title'); ?>
											</a>
										</div>
									</div>
								<?php $i++; endwhile; } ?>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-xs-12">
						<div class="ebook resource-box">
							<h3>eBooks</h3>
							<div class="ebook-slider owl-carousel owl-theme">
								<?php if(have_rows('ebook')){
									$i=0;
									while(have_rows('ebook')): the_row('ebook');
								?>
								<div class="item">
									<div class="ebook-img">
										<img src="<?php the_sub_field('e_book_image'); ?>" alt="<?php the_sub_field('e_book_title'); ?>">
									</div>
									<div class="ebook-desc">
											<?php the_sub_field('e_book_title'); ?>
									</div>
									<div class="ebook-btn">
										<a href="<?php the_sub_field('e_book_file'); ?>" class="btn btn-danger btn-sm btn-round" title="<?php the_sub_field('e_book_button_text'); ?>">
											<?php the_sub_field('e_book_button_text'); ?>
										</a>
									</div>
								</div>
								<?php $i++; endwhile; } ?>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-xs-12">
						<div class="support resource-box">
							<h3>Support</h3>
							<ul class="">
								<li>
									<a href="tel:(914)-355-5800" title="">
										(914)-355-5800
									</a>
								</li>
								<li>
									<span>Let’s Chat</span>
									<a href="mailto:info@computersolutionseast.com" title="">
										info@computersolutionseast.com
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!--<style media="screen">
	.wpcf7-form-control-wrap{
		width: 100%;
	}
</style>-->
<!--End main Part-->

<?php get_footer();?>
