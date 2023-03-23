<?php
/*
Template Name:  About Us
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
			<li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
		</ol>
	</div>
</nav>
<!--End Breadcrumb-->

<!--Start main Part-->
<main class="main">
	<!--Start about Part-->
	<div class="about-main mt30">
		<div class="container-fluid">
			<h2 class="small"><?php the_field('page_title'); ?></h2>
			<div class="about-info-section">
				<div class="row">
					<div class="col-md-5">
						<div class="about-info-left">
							<?php the_field('section_content'); ?>
						</div>
					</div>
					<div class="col-md-7">
						<div class="about-info-right">
							<img src="<?php the_field('section_image'); ?>" alt="<?php the_field('page_title'); ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="about-outcome">
				<h2 class="small"><?php the_field('section_title'); ?></h2>
				<?php the_field('section_text'); ?>
				<div class="row">
					<?php if(have_rows('box_repeater')){
						$i=0;
						while(have_rows('box_repeater')): the_row('box_repeater');
					?>
					<div class="col-sm-4">
						<div class="outcome-box">
							<div class="icon">
								<img src="<?php the_sub_field('box_icon'); ?>" alt="<?php the_sub_field('box_title'); ?>">
							</div>
							<h5 class="outcome-title"><?php the_sub_field('box_title'); ?></h5>
							<p class="outcome-desc"><?php the_sub_field('box_text'); ?></p>
						</div>
					</div>
					<?php $i++; endwhile; } ?>
				</div>
			</div>

			<div class="video-section">
				<h2 class="small"><?php the_field('third_section_title'); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="video-section-left">
							<?php if(have_rows('left_side_repeater')){
								$i=0;
								while(have_rows('left_side_repeater')): the_row('left_side_repeater');
							?>
							<div class="video-listing">
								<h5 class="video-listing-title"><?php the_sub_field('third_text'); ?></h5>
								<p class="video-desc"><?php the_sub_field('third_description'); ?></p>
							</div>
							<?php $i++; endwhile; } ?>
						</div>
					</div>
					<div class="col-md-7">
						<div class="video-right">
							<div class="">
								<video controls src="<?php the_field('video'); ?>" type="video/mp4" autoplay loop></video>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="our-journey">
				<h2 class="small"><?php the_field('fourth_section_title'); ?></h2>
				<!-- <div class="section-desc"> -->
					<?php the_field('fourth_section_content'); ?>
				<!-- </div> -->
				<div class="row">
					<?php if(have_rows('fourth_section_repeater')){
						$i=0;
						while(have_rows('fourth_section_repeater')): the_row('fourth_section_repeater');
					?>
					<div class="col">
						<div class="our-journey-box">
							<div class="icon">
								<img src="<?php the_sub_field('coloum_image'); ?>" alt="<?php the_sub_field('coloum_number'); ?>">
							</div>
							<h5 class="counter"><?php the_sub_field('coloum_number'); ?></h5>
							<div class="sub-title"><?php the_sub_field('coloum_name'); ?></div>
						</div>
					</div>
					<?php $i++; endwhile; } ?>
				</div>
			</div>

			<div class="leadership">
				<h2 class="small"><?php the_field('leadership_title'); ?></h2>
				<div class="row">
					<div class="col-sm-3">
						<div class="leadership-image">
							<img src="<?php the_field('leader_image'); ?>" alt="<?php the_field('leadership_title'); ?>">
						</div>
					</div>
					<div class="col-sm-9">
						<div class="leadership-right">
							<div class="quote"><?php the_field('leader_details'); ?></div>
							<div class="leader-info">
								<h3 class="leader-name"><?php the_field('leader_name'); ?></h3>
								<div class="desination"><?php the_field('leader_position'); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="about-discussion">
				<h2 class="small"><?php the_field('sixth_title'); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="about-discussion-left">
							<p class="section-desc"><?php the_field('sixth_content'); ?></p>
							<a target="_blank" href="<?php the_field('button_link'); ?>" class="btn btn-primary" title="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="about-discussion-right">
							<img src="<?php the_field('sixth_image'); ?>" alt="<?php the_field('sixth_title'); ?>">
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="about-testimonial">
				<h3 class="section-title">See what our Clients says about us</h3>
				<p class="section-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritati. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				<div class="testimonial-slider owl-carousel" data-slider-id="1">
					<div class="item">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/quote-icon.png">
						</div>
						<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="u-name">Martin Parker</div>
						<div class="u-designation">Sr. Managing Partner (Sales)</div>
					</div>
					<div class="item">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/quote-icon.png">
						</div>
						<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="u-name">Martin Parker</div>
						<div class="u-designation">Sr. Managing Partner (Sales)</div>
					</div>
					<div class="item">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/quote-icon.png">
						</div>
						<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="u-name">Martin Parker</div>
						<div class="u-designation">Sr. Managing Partner (Sales)</div>
					</div>
					<div class="item">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/quote-icon.png">
						</div>
						<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="u-name">Martin Parker</div>
						<div class="u-designation">Sr. Managing Partner (Sales)</div>
					</div>
					<div class="item">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/quote-icon.png">
						</div>
						<div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						<div class="u-name">Martin Parker</div>
						<div class="u-designation">Sr. Managing Partner (Sales)</div>
					</div>
				</div>
				<div class="owl-thumbs" data-slider-id="1">
					<button class="owl-thumb-item">
							<div class="userimg">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/testi-user2.png" alt="">
							</div>
					</button>
					<button class="owl-thumb-item">
							<div class="userimg">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/testi-user1.png" alt="">
							</div>
					</button>
					<button class="owl-thumb-item">
							<div class="userimg">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/testi-user.jpg" alt="">
							</div>
					</button>
					<button class="owl-thumb-item">
							<div class="userimg">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/testi-user2.png" alt="">
							</div>
					</button>
					<button class="owl-thumb-item">
							<div class="userimg">
									<img src="<?php echo get_template_directory_uri()?>/assets/img/testi-user1.png" alt="">
							</div>
					</button>
				</div>
			</div> -->

			<!-- <div class="awards">
				<h3 class="section-title">Awards & Accolades</h3>
				<p class="section-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritati.<br>
				Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				<div class="row">
					<div class="col">
						<img src="assets/img/awards1.png">
					</div>
					<div class="col">
						<img src="assets/img/awards2.png">
					</div>
					<div class="col">
						<img src="assets/img/awards3.png">
					</div>
					<div class="col">
						<img src="assets/img/awards4.png">
					</div>
					<div class="col">
						<img src="assets/img/awards5.png">
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!--End about Part-->
	<!--Start Blog-->
	<div class="blog mt50">
		<div class="container-fluid">
			<h2 class="small text-center">Latest Blogs &amp; Happenings</h2>
			<div class="blogContenWrapper border-bottom mt-4">
				<div class="row">
					<div class="col-lg-4 d-flex mb-5 order-last order-lg-first">
						<?php echo do_shortcode('[contact-form-7 id="17942" title="Submit Your Inquiry Now !"]'); ?>
					</div>
					<div class="col-lg-8 d-flex mb-5 order-first order-lg-last">
						<div class="latestBlogContent">
							<?php
							 global $post;
							 $args = array( 'post_type'=> 'post','orderby' => 'date' ,'order' => 'DESC' ,'posts_per_page'=>'4','date_query' => array(
									'after' => '2019-12-01'
								));
							 query_posts( $args );
							 while (have_posts()) : the_post();
							 $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
							?>
							<article>
								<div>
									<?php if($imgthumb[0]){?>
										<img src="<?php echo $imgthumb[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid w-100">
									<?php }else{ ?>
									 <img src="https://www.computersolutionseast.com/wp-content/uploads/2020/07/20-July.png" alt="<?php the_title(); ?>" class="img-fluid w-100">
									<?php } ?>
								</div>
								<div>
									<h5>
										<a href="<?php the_permalink();?>" target="__blank"><?php the_title();?></a>
									</h5>
									<?php the_excerpt(); ?>
								</div>
								<div>
									<a href="<?php the_permalink();?>" target="__blank">Learn More</a>
								</div>
							</article>
							<?php endwhile; wp_reset_query(); ?>
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
					<?php
					$backto = get_field('back_to_page');
					$goto = get_field('go_to_page');
					?>
					<div class="d-flex flex-wrap pageNavigatorWrapper"> <a href="<?php the_permalink($backto) ?>" class="btn btn-md btn-outline-primary rounded-pill"> <i class="fas fa-arrow-left mr-3"></i> Back to <?php echo get_the_title( $backto ); ?>
					 </a> <a href="<?php the_permalink($goto) ?>" class="btn btn-md btn-outline-primary rounded-pill ml-auto"> Go to <?php echo get_the_title( $goto ); ?> <i class="fas fa-arrow-right ml-3"></i> </a></div>
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

<?php get_footer();?>
