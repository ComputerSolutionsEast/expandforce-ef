<?php
/*
Template Name:  Download Details
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title(); ?></h1>
			<!-- <p class="lead text-white"><?php the_field('banner_content'); ?></p> -->
		</div>
	</div>
</div>
<!--End Inner Banner-->
<!--Start Breadcrumb-->
<nav aria-label="breadcrumb" class="BreadCrumbWrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
			<li class="breadcrumb-item"><a href="https://www.computersolutionseast.com/downloads">Downloads</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>
</nav>
<!--End Breadcrumb-->
<section class="number">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<h2><?php the_title(); ?></h2>
				<div class="sub-number">
					<ul>
						<?php if(have_rows('section_repeater')){
							$i=1;
							while(have_rows('section_repeater')): the_row('section_repeater');
						?>
						<li>
							<span><?php if($i<=9): ?>0<?php endif; ?><?php echo $i; ?></span>							
							<div class="list-content">
								<h4><a target="_blank" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h4>
								<?php the_sub_field('content'); ?>
							</div>
						</li>
						<?php $i++; endwhile; } ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="19030" title="Our technical advisers are just a click away. Fill out the form below to get started!"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>
