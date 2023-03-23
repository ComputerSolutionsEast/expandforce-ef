<?php
/*
Template Name:  It Services
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

<!--Start main Part-->
<main class="main">
	<div class="bg-light">
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
		<div class="cseAdvantage mt50">
			<div class="container-fluid">
				<h2 class="small mb-4"><?php the_field('advantage_title'); ?></h2>
				<div class="row">
					<div class="col-lg-3 mb-5">
						<video width="320" height="240" controls src="<?php the_field('video_box'); ?>" type="video/mp4" autoplay loop></video>
					</div>
					<div class="col-lg-9 mb-5 pl-lg-0">
						<div class="itServicesFeature px-md-4">
							<div class="row mx-md-n4">
								<?php if(have_rows('box_repeater')){
									$i=0;
									while(have_rows('box_repeater')): the_row('box_repeater');
								?>
								<div class="col-md-4 mb-5 mb-md-0 px-md-4"> <img src="<?php the_sub_field('box_icon'); ?>" alt="<?php the_sub_field('box_title'); ?>">
									<h5><?php the_sub_field('box_title'); ?></h5>
									<?php the_sub_field('box_content'); ?>
								</div>
								<?php $i++; endwhile; } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="servicePortfolio mt50">
		<div class="container-fluid">
			<h2 class="small text-center mb-4"><?php the_field('portfolio_title'); ?></h2>
			<div class="row">
				<aside class="col-lg-6 pr-lg-0">
					<div class="servicePortfolioItem servicePortfolioItemPrimary"> <img src="<?php the_field('section_image_1'); ?>" alt="<?php the_field('section_heading_1'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_1'); ?></h5>
							<?php the_field('section_description_1'); ?>
							<a href="<?php the_field('section_link_1'); ?>">Learn More</a>
						</div>
					</div>
					<div class="servicePortfolioItem servicePortfolioItemSecondry"> <img src="<?php the_field('section_image_2'); ?>" alt="<?php the_field('section_heading_2'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_2'); ?></h5>
							<?php the_field('section_description_2'); ?>
							<a href="<?php the_field('section_link_2'); ?>">Learn More</a>
						</div>
					</div>
					<div class="servicePortfolioItem servicePortfolioItemPrimary"> <img src="<?php the_field('section_image_3'); ?>" alt="<?php the_field('section_heading_3'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_3'); ?></h5>
							<?php the_field('section_description_3'); ?>
							<a href="<?php the_field('section_link_3'); ?>">Learn More</a>
						</div>
					</div>
					<?php if( get_field('section_heading_4') ): ?>
					<div class="servicePortfolioItem servicePortfolioItemSecondry"> <img src="<?php the_field('section_image_4'); ?>" alt="<?php the_field('section_heading_4'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_4'); ?></h5>
							<?php the_field('section_description_4'); ?>
							<a href="<?php the_field('section_link_4'); ?>">Learn More</a>
						</div>
					</div>
					<?php endif; ?>
					<?php if( get_field('section_heading_10') ): ?>
					<div class="servicePortfolioItem servicePortfolioItemPrimary"> <img src="<?php the_field('section_image_10'); ?>" alt="<?php the_field('section_heading_10'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_10'); ?></h5>
							<?php the_field('section_description_10'); ?>
							<a href="<?php the_field('section_link_10'); ?>">Learn More</a>
						</div>
					</div>
					<?php endif; ?>
				</aside>
				<aside class="col-lg-6 pl-lg-0 servicePortfolioCenter">
					<div class="servicePortfolioItem servicePortfolioItemSecondry"> <img src="<?php the_field('section_image_5'); ?>" alt="<?php the_field('section_heading_5'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_5'); ?></h5>
							<?php the_field('section_description_5'); ?>
							<a href="<?php the_field('section_link_5'); ?>">Learn More</a>
						</div>
					</div>
					<div class="servicePortfolioItem servicePortfolioItemPrimary"> <img src="<?php the_field('section_image_6'); ?>" alt="<?php the_field('section_heading_6'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_6'); ?></h5>
							<?php the_field('section_description_6'); ?>
							<a href="<?php the_field('section_link_6'); ?>">Learn More</a>
						</div>
					</div>
					<div class="servicePortfolioItem servicePortfolioItemSecondry"> <img src="<?php the_field('section_image_7'); ?>" alt="<?php the_field('section_heading_7'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_7'); ?></h5>
							<?php the_field('section_description_7'); ?>
							<a href="<?php the_field('section_link_7'); ?>">Learn More</a>
						</div>
					</div>
					<?php if( get_field('section_heading_8') ): ?>
					<div class="servicePortfolioItem servicePortfolioItemPrimary"> <img src="<?php the_field('section_image_8'); ?>" alt="<?php the_field('section_heading_8'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_8'); ?></h5>
							<?php the_field('section_description_8'); ?>
							<a href="<?php the_field('section_link_8'); ?>">Learn More</a>
						</div>
					</div>
					<?php endif; ?>
					<?php if( get_field('section_heading_9') ): ?>
					<div class="servicePortfolioItem servicePortfolioItemSecondry"> <img src="<?php the_field('section_image_9'); ?>" alt="<?php the_field('section_heading_9'); ?>" class="img-fluid w-100">
						<div>
							<h5 class="text-white"><?php the_field('section_heading_9'); ?></h5>
							<?php the_field('section_description_9'); ?>
							<a href="<?php the_field('section_link_9'); ?>">Learn More</a>
						</div>
					</div>
					<?php endif; ?>

				</aside>
			</div>
		</div>
	</div>
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
</main>
<!--End main Part-->

<?php get_footer();?>
