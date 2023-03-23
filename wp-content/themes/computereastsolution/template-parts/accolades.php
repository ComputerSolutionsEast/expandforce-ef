<?php
/*
Template Name:  Accolades
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
  <div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
    <div class="container">
      <h1 class="text-white"><?php the_title() ?></h1>
      <p class="lead text-white"><?php echo get_field('slider_content') ?></p>
    </div>
  </div>
</div>
<!--End Inner Banner-->
<!--Start main Part-->
<main class="main">
  <div class="bg-white">
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

    <!--Start awards Part-->
    <div class="awards mt50">
      <div class="container-fluid">
        <div class="awardThumbnailAltered">
          <div class="awardThumbnail"> <img src="<?php echo get_field('slider_buttom_image') ?>" alt="<?php echo get_field('slider_content') ?>"></div>
        </div>
        <!-- <p class="TextSpace"></p> -->
        <div class="TextSpace">
          <?php echo get_field('page_content') ?>
        </div>
        <div class="row">
          <?php
          $i=0;
              if(get_field('second_section')):
              while(has_sub_field('second_section')):
          ?>
          <div class="col-lg-6 awardCategory">
            <div>
              <div class="awardCategoryThumbnailWrapper">
                <div class="awardThumbnail"> <img src="<?php echo get_sub_field('images') ?>" alt="accolades-image"></div>
              </div>
              <?php echo get_sub_field('content_details') ?>
            </div>
          </div>
          <?php
          $i++;
              endwhile; endif;
          ?>
        </div>
      </div>
    </div>
    <!--End awards Part-->
  </div>
  <!--Start Recognized Part-->
  <div class="bg-light py-5">
    <div class="container-fluid">
      <h2 class="small text-center"><?php echo get_field('recognized_title') ?></h2>
      <div class="recognitionThumbnailWrapper mt-4">
        <?php
        $i=0;
            if(get_field('recognized_by')):
            while(has_sub_field('recognized_by')):
        ?>
        <div class="recognitionThumbnail"> <img src="<?php echo get_sub_field('images') ?>" alt="recognition" class="img-fluid w-100"></div>
        <?php
        $i++;
            endwhile; endif;
        ?>
      </div>
      <p class="text-center mb-3"><?php echo get_field('recognized_content') ?></p>
    </div>
  </div>
  <!--End Recognized Part-->

  <!--Start awardGallery Part-->
  <div class="awardGallery pt-5">
    <div class="container-fluid">
      <h2 class="small text-center"><?php echo get_field('award_page_ttile') ?></h2>
      <div class="row mt-4">
        <?php
        $i=0;
            if(get_field('awdimages')):
            while(has_sub_field('awdimages')):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="awardGalleryBox"><img src="<?php echo get_sub_field('aaimages') ?>" alt="awards" class="img-fluid w-100"></div>
        </div>
        <?php
        $i++;
            endwhile; endif;
        ?>
      </div>
    </div>
  </div>
  <!--End awardGallery Part-->

  <!--Start latestAwards Part-->
  <div class="latestAwards pt-3">
    <div class="container-fluid">
      <h2 class="small text-center"><?php echo get_field('lates') ?></h2>
      <div class="owl-carousel awardThumbnailCarousel mt-5">
        <?php
        $i=0;
            if(get_field('award_images')):
            while(has_sub_field('award_images')):
        ?>
        <div class="item">
          <div class="awardThumbnailCarouselContent"><img src="<?php echo get_sub_field('img') ?>" alt="latest"></div>
        </div>
        <?php
        $i++;
            endwhile; endif;
        ?>
      </div>
    </div>
  </div>
  <!--End latestAwards Part-->

  <!--Start customerReview Part-->
  <div class="customerReview py-5">
    <div class="container-fluid">
      <h2 class="small text-center"> Reviewed by Many Trusted Clients Verified by Clutch</h2>
      <div class="row mt-4">
        <aside class="col-lg-2"></aside>
        <aside class="col-lg-8">
           <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script> <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="4" data-expandifr="true" data-height="auto" data-snippets="true" data-clutchcompany-id="362529"></div>
        </aside>
        <aside class="col-lg-2"></aside>
      </div>
    </div>
  </div>
  <!--End customerReview Part-->
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
