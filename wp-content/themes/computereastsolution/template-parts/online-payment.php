<?php
/*
Template Name:  Online Payment
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
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>
</nav>
<!--End Breadcrumb-->
<section class="section-1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="content">
					<?php
					while(have_posts()) : the_post();
					the_content();
					endwhile; ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="17942" title="Submit Your Inquiry Now !"]') ?>
      </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
