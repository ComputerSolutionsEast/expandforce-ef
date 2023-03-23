<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- Start Banner -->
<div id="banner">
	<div id="demo" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner mx-0 w-100 banner-section">
			<?php if(have_rows('multiple_banner')){
				$i=0;
				while(have_rows('multiple_banner')): the_row('multiple_banner');
			?>
			<div class="carousel-item <?php if($i==0){ echo "active"; } ?>">
				<img src="<?php the_sub_field('banner_image'); ?>" alt="<?php the_sub_field('banner_title'); ?>" class="img-fluid w-100">
				<div class="carousel-caption">
					<div class="container-fluid">
						<div class="row d-flex justify-content-end">
							<aside class="col-sm-7 text-left">
								<h2><?php the_sub_field('banner_title'); ?></h2>
								<h3><?php the_sub_field('banner_line'); ?></h3>
								<?php the_sub_field('banner_description'); ?>
								<a href="<?php the_sub_field('banner_link'); ?>" class="btn btn-default btn-round"><?php the_sub_field('button_text'); ?></a>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; endwhile; } ?>
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> </div>
	</div>
</div>
<!--Start main Part-->
<main class="main">
	<div class="header-content mt80">
			<div class="row">
				<div class="col-lg-11 col-xl-7 mx-auto text-center">
					<h1><?php the_field('partner_title'); ?></h1>
					<?php the_field('partner_content'); ?>
				</div>
			</div>
	</div>
	<div class="home-section mt80">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-6 leftimg1 right-homephoto">
					<div class="photo-container right-photo" style="background-image:url(<?php the_field('about_image'); ?>);"> </div>
					<h2> <?php the_field('about_title'); ?> </h2>
					<div class="slide1 right-photo-slide">
						<a href="<?php the_field('about_link'); ?>"><h2> <?php the_field('about_title'); ?> </h2></a>
						<?php the_field('about_content'); ?>
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 leftimg1">
							<div class="photo-container" style="background-image:url(<?php the_field('certificate_image'); ?>); background-position: right;"> </div>
							<h2> <?php the_field('certificate_title'); ?> </h2>
							<div class="slide1">
								<a href="<?php the_field('certificate_link'); ?>"><h2> <?php the_field('certificate_title'); ?> </h2></a>
								<?php the_field('certificate_content'); ?>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 leftimg1">
							<div class="photo-container" style="background-image:url(<?php the_field('accolades_image'); ?>);"> </div>
							<h2> <?php the_field('accolades_title'); ?> </h2>
							<div class="slide1">
								<a href="<?php the_field('accolades_link'); ?>"><h2> <?php the_field('accolades_title'); ?> </h2></a>
								<?php the_field('accolades_content'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-lg-6 leftimg1">
							<div class="photo-container" style="background-image:url(<?php the_field('partners_image'); ?>);"> </div>
							<h2> <?php the_field('partners_title'); ?> </h2>
							<div class="slide1">
								<a href="<?php the_field('partners_link'); ?>"><h2> <?php the_field('partners_title'); ?> </h2></a>
								<?php the_field('partners_content'); ?>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 leftimg1">
							<div class="photo-container" style="background-image:url(<?php the_field('media_image'); ?>);"> </div>
							<h2> <?php the_field('media_title'); ?> </h2>
							<div class="slide1">
								<a href="<?php the_field('media_link'); ?>"><h2> <?php the_field('media_title'); ?> </h2></a>
								<?php the_field('media_content'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="services-provide mt80">
		<div class="container-fluid">
			<h2 class="text-center"><?php the_field('title'); ?></h2>
			<?php the_field('content'); ?>
			<div class="row mt-5">
				<?php if(have_rows('what_section_repeater')){
					$i=0;
					while(have_rows('what_section_repeater')): the_row('what_section_repeater');
				?>
				<div class="col-md-4">
					<div class="services-box">
						<button class="btn btn-2 btn-2c"><span><i class="<?php the_sub_field('what_icon'); ?>"></i></span></button>
						<h3><?php the_sub_field('what_title'); ?></h3>
						<?php the_sub_field('what_description'); ?>
						<a href="<?php the_sub_field('what_button_link'); ?>" class="read-more"><?php the_sub_field('what_button_text'); ?></a> </div>
				</div>
				<?php $i++; endwhile; } ?>
			</div>
			<div class="text-center">
				<a href="<?php the_field('quote_button_link'); ?>" class="btn btn-primary btn-round mt-5"><?php the_field('quote_button_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="project-hosting">
		<div class="container-fluid">
			<div class="d-flex justify-content-around">
				<div class="services-box" id="counter">
					<div> <span class="counter-value" data-count="<?php the_field('success_rate'); ?>">0</span><span>+</span> </div>
					<p><?php the_field('success_title'); ?></p>
				</div>
				<div class="services-box">
					<div> <span class="counter-value" data-count="<?php the_field('hosting'); ?>">0</span> </div>
					<p><?php the_field('hosting_title'); ?></p>
				</div>
				<div class="services-box">
					<div> <span class="counter-value" data-count="<?php the_field('team_member'); ?>">0</span><span>+</span> </div>
					<p><?php the_field('team_title'); ?></p>
				</div>
				<div class="services-box">
					<div> <span class="counter-value" data-count="<?php the_field('experiance'); ?>">0</span> </div>
					<p><?php the_field('year_title'); ?></p>
				</div>
				<div class="services-box">
					<div> <span class="counter-value" data-count="<?php the_field('completed_project'); ?>">0</span><span>%</span> </div>
					<p><?php the_field('project_title'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="services-provide mt-0">
		<div class="container-fluid">
			<h2 class="text-center">Get Informed</h2>
			<p class="mt-4 text-center">Latest updates for your Business Technology</p>
			<div class="row mt-5">
				<?php
					$slider_arrayp = array('post_type'=>'post','posts_per_page'=>3,'post_status'=>'publish');
					$slider_queryp = new wp_query($slider_arrayp);
					while($slider_queryp->have_posts()): $slider_queryp->the_post();
					$slider_iafe = wp_get_attachment_url(get_post_thumbnail_id($slider_queryp->id));
				?>
				<div class="col-md-12 col-lg-4">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="testingnve">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
			<div class="text-center">
				<a href="<?php the_permalink(17950); ?>" class="btn btn-primary btn-round mt-5">Go to News</a>
			</div>
		</div>
	</div>
	<div class="our-productshome">
		<div class="container-fluid">
			<h2 class="text-center"><?php the_field('product_title'); ?></h2>
			 <p class="mt-4 text-center font21"><?php the_field('product_content'); ?></p>
			<div class="owl-carousel owl-theme customer-logos">
				<?php if(have_rows('product_repeater')){
					$i=0;
					while(have_rows('product_repeater')): the_row('product_repeater');
				?>
				<div class="item"><img src="<?php the_sub_field('product_image'); ?>" alt="shop-image"></div>
				<?php $i++; endwhile; } ?>
			</div>
			<div class="text-center">
				<a href="<?php the_field('shop_button_link'); ?>" class="btn btn-primary btn-round mt-5">Shop</a>
			</div>
		</div>
	</div>
	<div class="competencies-section parallax mt80">
		<div class="container-fluid">
			<h2 class="text-center text-white">Competencies</h2>
			<h5><?php the_field('competency_title'); ?></h5>
			<?php the_field('competency_content'); ?>
			<div class="row mt-5">
				<div class="col-md-6 col-xl-3">
					<div class="competencies-box1">
						<p><?php the_field('competencies_box_1_title'); ?></p>
						<h5><?php the_field('competencies_box_1_text'); ?></h5>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="competencies-box2">
						<p><?php the_field('competencies_box_2_title'); ?></p>
						<h5><?php the_field('competencies_box_2_text'); ?></h5>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="competencies-box3">
						<p><?php the_field('competencies_box_3_title'); ?></p>
						<h5><?php the_field('competencies_box_3_text'); ?></h5>
					</div>
				</div>
				<div class="col-md-6 col-xl-3">
					<div class="competencies-box4">
						<p><?php the_field('competencies_box_4_title'); ?></p>
						<h5><?php the_field('competencies_box_4_text'); ?></h5>
					</div>
				</div>
			</div>
			<h5 class="mt-5 mb-0"><?php the_field('many_title'); ?></h5>
			<div class="text-center">
				<a href="<?php the_field('many_button_link'); ?>" class="btn btn-primary btn-round mt-5"><?php the_field('many_button_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="office-section parallax">
		<div class="container-fluid">
			<h2 class="text-center text-white">Global Branch Office</h2>
			<div class="row my-5">
				<?php if(have_rows('office_repeater')){
					$i=0;
					while(have_rows('office_repeater')): the_row('office_repeater');
				?>
				<div class="col-md-6 col-lg-3">
					<div class="office-box"> <img src="<?php the_sub_field('office_image'); ?>" class="img-fluid w-100" alt="<?php the_sub_field('office_location'); ?>">
						<p><?php the_sub_field('office_location'); ?></p>
					</div>
				</div>
				<?php $i++; endwhile; } ?>
			</div>
			<div class="text-center">
				<button><i class="fa fa-phone"></i><span><?php the_field('contact_number'); ?></span></button>
			</div>
			<h5 class="my-3"><?php the_field('contact_detail'); ?></h5>
		</div>
	</div>
</main>
<!--End main Part-->

<script>
var a = 0;
jQuery(window).scroll(function() {
  var oTop = jQuery('#counter').offset().top - window.innerHeight;
  if (a == 0 && jQuery(window).scrollTop() > oTop) {
    jQuery('.counter-value').each(function() {
      var $this = jQuery(this),
        countTo = $this.attr('data-count');
      jQuery({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 7000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
    });
    a = 1;
  }
});
</script>
<script>
    var a = 0;
    jQuery(window).scroll(function () {

      var oTop = jQuery('.counter').offset().top - window.innerHeight;
      if (a == 0 && jQuery(window).scrollTop() > oTop) {
        jQuery('.counter-value').each(function () {
          var $this = jQuery(this),
            countTo = $this.attr('data-count');
          jQuery({
            countNum: $this.text()
          }).animate({
            countNum: countTo
          },
            {
              duration: 7000,
              easing: 'swing',
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
                //alert('finished');
              }
            });
        });
        a = 1;
      }
    });
  </script>
<?php
get_footer();?>
