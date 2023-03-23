<?php
/*
Template Name:  Cloud Services
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
                        <li class="breadcrumb-item"><a href="<?php echo $breadcrum['page_link'];?>"><?php echo $breadcrum['page_title'];?></a></li>
                         <?php endforeach;  ?> 
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                       </ol>
	</div>
</nav>
<!--End Breadcrumb-->


<!--Start main Part-->
<main class="main">
	<!--Start service Category-->
	<div class="serviceCategory mt50">
		<div class="container-fluid">
			<div class="text-center">
				<h2 class="small"><?php the_field('title'); ?></h2>
				<?php the_field('description'); ?>
			</div>
			<div class="serviceCategoryContent">
				<div class="primaryContent"> <img src="<?php the_field('first_box_image'); ?>" alt="<?php the_field('first_box_title'); ?>" class="managed-offering1">
					<div>
						<h4><?php the_field('first_box_title'); ?></h4>
						<?php the_field('first_box_content'); ?>
						<?php if( get_field('first_box_link') ): ?>
						<p><a href="<?php the_field('first_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="secondryContent">
					<div>
						<h4><?php the_field('second_box_title'); ?></h4>
						<?php the_field('second_box_content'); ?>
						<?php if( get_field('second_box_link') ): ?>
						<p><a href="<?php the_field('second_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="tertiaryContent"> <img src="<?php the_field('third_box_image'); ?>" alt="<?php the_field('third_box_title'); ?>" class="managed-offering2" height="180">
					<div>
						<h4><?php the_field('third_box_title'); ?></h4>
						<?php the_field('third_box_content'); ?>
						<?php if( get_field('third_box_link') ): ?>
						<p><a href="<?php the_field('third_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="secondryContent">
					<div>
						<h4><?php the_field('fourth_box_title'); ?></h4>
						<?php the_field('fourth_box_content'); ?>
						<?php if( get_field('fourth_box_link') ): ?>
						<p><a href="<?php the_field('fourth_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="quadnaryContent"> <img src="<?php the_field('fifth_box_image'); ?>" alt="<?php the_field('fifth_box_title'); ?>" class="managed-offering3" height="180">
					<div class="tertiaryContent">
						<h4><?php the_field('fifth_box_title'); ?></h4>
						<?php the_field('fifth_box_content'); ?>
						<?php if( get_field('fifth_box_link') ): ?>
						<p><a href="<?php the_field('fifth_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="quinaryContent">
					<div>
						<h4><?php the_field('sixth_box_title'); ?></h4>
						<?php the_field('sixth_box_content'); ?>
						<?php if( get_field('sixth_box_link') ): ?>
						<p><a href="<?php the_field('sixth_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="primaryContent"> <img src="<?php the_field('seventh_box_image'); ?>" alt="<?php the_field('seventh_box_title'); ?>">
					<div>
						<h4><?php the_field('seventh_box_title'); ?></h4>
						<?php the_field('seventh_box_content'); ?>
						<?php if( get_field('seventh_box_link') ): ?>
						<p><a href="<?php the_field('seventh_box_link'); ?>">Learn More</a></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End service Category-->
	<!--Start cloud Service Feature-->
	<div class="cloudServiceFeature mt50">
		<div class="container-fluid">
			<h2 class="small text-center mb-4"><?php the_field('why_title'); ?></h2>
			<div class="row">
				<div class="col-md-6 mb-3">
					<?php the_field('why_content_left_side'); ?>
				</div>
				<div class="col-md-6 mb-3">
					<ul class="BlueList">
						<?php if(have_rows('why_repeater')){
							$i=0;
							while(have_rows('why_repeater')): the_row('why_repeater');
						?>
						<li>
							<p><b><?php the_sub_field('point'); ?>:</b> <?php the_sub_field('content'); ?></p>
						</li>
						<?php $i++; endwhile; } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End cloud Service Feature-->
	<!--Start cloud Service Benefits-->
	<div class="cloudServiceBenefits parallax mt50">
		<div class="text-center">
			<h2 class="small"><?php the_field('heading'); ?></h2>
			<p class="lead"><?php the_field('what_content'); ?></p>
		</div>
		<div class="cloudServiceBenefitContent">
			<div class="container-fluid">
				<h2 class="text-white small"><?php the_field('banner_heading'); ?></h2>
				<div class="row">
					<?php if(have_rows('banner_repeater')){
						$i=0;
						while(have_rows('banner_repeater')): the_row('banner_repeater');
					?>
					<figure class="col-sm-6 col-lg-3"> <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('content'); ?>">
						<figcaption><?php the_sub_field('content'); ?></figcaption>
					</figure>
					<?php $i++; endwhile; } ?>
				</div>
			</div>
		</div>
	</div>
	<!--End cloud Service Benefits-->
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
