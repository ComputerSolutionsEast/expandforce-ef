<?php
/*
Template Name:  Microsoft 360
*/
get_header();
$breadcrum_repeater = get_field('breadcrum_repeater');

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
                        <?php foreach ($breadcrum_repeater as $breadcrum) : ?>
                        <li class="breadcrumb-item"><a href="<?php echo $breadcrum['page_link'];?>"><?php echo $breadcrum['page_name'];?></a></li>
                         <?php endforeach;  ?> 
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                   </ol>
	</div>
</nav>
<!--End Breadcrumb-->

<!--Start main Part-->
<main class="main">
	<!--Start service Category-->
	<div class="categoryHighLights mt50">
		<div class="container-fluid">
			<h2 class="small mb-5 text-center"><?php the_field('why_heading'); ?></h2>
			<div class="row d-flex flex-wrap categoryBubble">
				<?php if(have_rows('image_box_repeater')){
					$i=0;
					while(have_rows('image_box_repeater')): the_row('image_box_repeater');
				?>
				<div class="categoryBubbleItem">
					<div class="categoryBubbleBox">
						<h5><?php the_sub_field('title'); ?></h5>
						<div class="categoryBubbleThumbnail"> <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" class="img-fluid w-100">
							<div class="categoryBubbleOverlay">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php $i++; endwhile; } ?>
			</div>
		</div>
	</div>
	<!--End service Category-->
	<!--Start cloud Service Feature-->
	<div class="achievementsAndAwards mt50 bg-light">
		<div class="container-fluid">
			<h2 class="small text-center mb-5"><?php the_field('process_title'); ?></h2>
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h4><?php the_field('left_side_title'); ?></h4>
					<?php the_field('office_left_side'); ?>
				</div>
				<div class="col-md-6 mb-5 mb-md-0 text-center"> <img src="<?php the_field('office_right_side'); ?>" alt="<?php the_field('process_title'); ?>" class="img-fluid"></div>
			</div>
		</div>
	</div>
	<!--End cloud Service Feature-->
	<!--Start cloud Service Benefits-->
	<div class="serviceCategory serviceCategoryFeatures mt50">
		<div class="container-fluid">
			<h2 class="small text-center mb-5"><?php the_field('office_365_title'); ?></h2>
			<div class="row">
				<div class="col-md-12 col-xl-4 px-0">
					<div class="serviceCategoryColumn serviceCategoryPrimary">
						<div>
							<div class="backup1-image"> <img src="<?php the_field('mobile_configuration_image'); ?>" alt="<?php the_field('mobile_configuration_title'); ?>">
								<div>
									<h3 class="text-white"><?php the_field('mobile_configuration_title'); ?></h3>
									<p><?php the_field('mobile_configuration_content'); ?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="backup1-image"> <img src="<?php the_field('unmatched_customer_image'); ?>" alt="<?php the_field('unmatched_customer_title'); ?>">
								<div>
									<h3 class="text-white"><?php the_field('unmatched_customer_title'); ?></h3>
									<p><?php the_field('unmatched_customer_content'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-8 px-0">
					<div class="serviceCategoryColumn serviceCategorySecondry">
						<div>
							<div class="backup2-image"> <img src="<?php the_field('customization_image'); ?>" alt="<?php the_field('customization_title'); ?>">
								<div>
									<h3 class="text-dark"><?php the_field('customization_title'); ?></h3>
									<p><?php the_field('customization_content'); ?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="backup2-image"> <img src="<?php the_field('plan_image'); ?>" alt="<?php the_field('plan_title'); ?>">
								<div>
									<h3 class="text-white"><?php the_field('plan_title'); ?></h3>
									<p><?php the_field('plan_content'); ?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="backup3-image"> <img src="<?php the_field('skilled_image'); ?>" alt="<?php the_field('skilled_title'); ?>">
								<div>
									<h3 class="text-white"><?php the_field('skilled_title'); ?></h3>
									<p class="forspacing"><?php the_field('skilled_content'); ?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="backup3-image"> <img src="<?php the_field('troubleshooting_image'); ?>" alt="<?php the_field('troubleshooting_title'); ?>">
								<div>
									<h3 class="text-dark"><?php the_field('troubleshooting_title'); ?></h3>
									<p class="forspacing"><?php the_field('troubleshooting_content'); ?></p>
								</div>
							</div>
						</div>
						<div>
							<div class="backup3-image"> <img src="<?php the_field('configuration_image'); ?>" alt="<?php the_field('configuration_title'); ?>">
								<div>
									<h3 class="text-white"><?php the_field('configuration_title'); ?></h3>
									<p class="forspacing"><?php the_field('configuration_content'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End cloud Service Benefits-->
	<!--Start achievements And Awards-->
	<div class="achievementsAndAwards mt50 bg-light">
		<div class="container-fluid">
			<h2 class="small text-center mb-5"><?php the_field('why_choose_title'); ?></h2>
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<?php the_field('left_paragraph'); ?>
				</div>
				<div class="col-md-6 mb-5 mb-md-0">
					<ul>
						<?php if(have_rows('right_side')){
							$i=0;
							while(have_rows('right_side')): the_row('right_side');
						?>
						<li><i class="<?php the_sub_field('trophy_icon'); ?>"></i> <?php the_sub_field('trophy_points'); ?></li>
						
						<?php $i++; endwhile; } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End achievements And Awards-->
	<!--Start case Studies-->
	<div class="caseStudies mt50">
		<div class="container-fluid">
			<div class="text-center">
				<h2 class="small">Assorted Case Studies</h2>
			</div>
			<div class="row">
				<?php
				$i=0;
				 if(get_field('listing_repeater',1954)):
					while(has_sub_field('listing_repeater',1954)):
				 ?>
				<div class="col-lg-4 d-flex mb-5 mb-lg-3">
					<div class="caseStudiesContent">
						<div class="caseStudiesLogoWrapper d-flex justify-content-center align-items-center"> <img src="<?php echo get_sub_field('case_study_image',1954)?>" alt="<?php echo get_sub_field('case_study_industry',1954)?>" class="img-fluid w-auto"></div>
						<div class="p-4">
							<h5><?php echo get_sub_field('case_study_industry',1954)?></h5>
							<p><?php echo get_sub_field('case_study_short_description',1954)?></p>
							<a target="_blank" href="<?php echo get_sub_field('case_study_detail_page_link',1954)?>" class="btn btn-primary rounded-pill btn-md">Learn More</a></div>
					</div>
				</div>
				<?php
				 $i++;
				 endwhile; endif;
			 ?>
			</div>
		</div>
	</div>
	<!--End case Studies-->
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
									 <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/20-July.png" alt="<?php the_title(); ?>" class="img-fluid w-100">
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
			<?php echo do_shortcode('[contact-form-7 id="18675" title="Blog Subscription"]'); ?>
		</div>
	</div>
	<!--End email Subscription-->
</main>
<!--End main Part-->

<?php get_footer();?>
