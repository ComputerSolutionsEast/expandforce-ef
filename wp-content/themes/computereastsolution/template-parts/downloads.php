<?php
/*
Template Name:  Downloads
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
<section class="faq">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="download-box">
          <h2>Top Download Categories</h2>
        </div>
        <div class="box-card">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
              <a href="https://www.computersolutionseast.com/downloads/windows-download">
                <div class="card border-0 pt-3">
                  <img class="card-img-top m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/windows.webp" style="width:72px" alt="Card image cap">
                  <div class="card-body bg-white border-0 text-center">
                    <h5 class="card-title">Windows</h5>
                    <p class="card-text text-center">PC security, optimization, and IT tools.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
              <a href="https://www.computersolutionseast.com/downloads/office-download">
                <div class="card border-0 pt-3">
                  <img class="card-img-top m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/office-01.webp" style="width:72px" alt="Card image cap">
                  <div class="card-body bg-white border-0 text-center">
                    <h5 class="card-title">Office</h5>
                    <p class="card-text text-center">Viewers, tools and updates for Office products.</p>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
              <a href="https://www.computersolutionseast.com/downloads/other-downloads">
                <div class="card border-0 pt-3">
                  <img class="card-img-top m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/other-03.webp" style="width:72px" alt="Card image cap">
                  <div class="card-body bg-white border-0 text-center">
                    <h5 class="card-title">Others</h5>
                    <p class="card-text text-center"></p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="what-next">
          <div class="px-4">
            <h5 class="mb-0"> What Next?</h5> <br>
            <p>Give us a Call at <a href="tel:9143555800">(914)-355-5800</a> Opt 2 for Sales or email us at <a href="malto:sales@computersolutionseast.com">sales@computersolutionseast.com</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="form" style="margin-top: 10px !important;">
        <?php echo do_shortcode('[contact-form-7 id="19030" title="Our technical advisers are just a click away. Fill out the form below to get started!"]'); ?>
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
