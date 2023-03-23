<?php
/*
Template Name:  Contact Us
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
<section class="contact">
  <div class="container-fluid pl-4 pr-4 mb-5">
    <div class="row">
			<?php
			$i=1;
					if(get_field('box_repeater')):
					while(has_sub_field('box_repeater')):
			?>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-bg">
          <div class="contact-box">
            <h4 class="contact-title"><?php echo get_sub_field('title') ?></h4>
            <strong><?php echo get_sub_field('number') ?> (option <?php echo $i; ?>)</strong>
            <a class="contact-email"
              href="mailto:<?php echo get_sub_field('email') ?>"><?php echo get_sub_field('email') ?></a>
            <p class="time"><?php echo get_sub_field('time') ?></p>
          </div>
        </div>
      </div>
			<?php
			$i++;
					endwhile; endif;
			?>
    </div>
  </div>
</section>

<section class="contact-form">
  <div class="container-fluid pl-4 pr-4">
    <div class="row">

      <div class="col-lg-5 col-md-6 col-sm-12 mt-4">
        <div class="form-bg">
          <div class="form mt-0">
            <?php echo do_shortcode('[contact-form-7 id="17943" title="Contact Us Page"]'); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12 mt-4">
        <div class="contact-map">
          <iframe
            src="https://maps.google.com/maps?q=expandforce&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="800px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
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

<?php get_footer();?>
