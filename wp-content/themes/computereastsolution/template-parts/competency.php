<?php
/*
Template Name:  Competency
*/
get_header();
?>
  <!-- Start Inner Banner -->
  <div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
  	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
  		<div class="container">
  			<h1 class="text-white"><?php the_title() ?></h1>
  			<p class="lead text-white"><?php echo get_field('banner_content') ?></p>
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

      <!--Start competency Part-->
      <div class="competency mt30">
        <div class="container-fluid">
          <h4><?php echo get_field('page_title') ?></h4>
          <div class="TextSpace">
            <?php echo get_field('page_content') ?>
          </div>
          <!-- <p class="TextSpace">On the solutions front, we follow industry-standard for delivering world-class IT solutions. Our solutions include the ones partnered with Microsoft like Dynamics 365, Modern Desktop Solutions by Microsoft, Security and Compliance Solutions like Microsoft Intune, Microsoft Cloud Security App, etc. We thrive on gifting a distinctive service experience to our clients and redefine the way they perform their day-to-day business activities.</p> -->

          <!--Start competency image Part-->
          <div class="row competency-list-wrap">

              <div class="col-lg-7 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('left_box_image') ?>" alt="<?php echo get_field('left_box_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('left_box_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('left_box_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('hover_image') ?>" alt="<?php echo get_field('hover_image_text') ?>"><span><?php echo get_field('hover_image_text') ?></span>
                      </div>
                      <h5 class="box-title"><?php echo get_field('hover_text') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('hover_content') ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('right_box_image') ?>" alt="<?php echo get_field('right_box_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('right_box_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('right_box_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('hover_image_right') ?>" alt="<?php echo get_field('hover_image_text_right') ?>"><span><?php echo get_field('hover_image_text_right') ?></span></div>
                      <h5 class="box-title"><?php echo get_field('hover_text_right') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('hover_content_right') ?>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- <div class="competency-img-box">
                  <a href="#" class="img-box-inner">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/img2.jpg">
                    <div class="img-content">
                      <h5 class="box-title">Cloud Platform</h5>
                      <div class="box-desc">Our Cloud platform achievement reflects the growing, most reliable quality, and contribution to the new Microsoft technologies. It is a testament to…</div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_template_directory_uri()?>/assets/img/certi-icon.png"><span>GOLD CERTIFIED</span></div>
                      <h5 class="box-title">Internal Self-Learning Trainings</h5>
                      <div class="box-desc">
                        <p>Our team at Computer Solutions East is trained thoroughly, and that has earned them Microsoft Certification as well. Our internal self-learning training has to kickstart many careers and made a few reach its pinnacle. With certification, our team gains increased visibility, get an edge over others, and routinely validate knowledge and skills.</p>
                        <p>We have Microsoft Certified Trainers that turn our team into a confident bunch of professionals enabling them with accurate, complete, and up to date knowledge. Pir self-learning paths guide professionals through the training and help prepare them to be better developers, administrators, and solutions architects.</p>
                      </div>
                    </div>
                  </a>
                </div> -->
              </div>
              <?php
              $i=0;
               if(get_field('coloum_repeater')):
                while(has_sub_field('coloum_repeater')):
               ?>
              <div class="col-lg-4 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_sub_field('image')?>" alt="<?php echo get_sub_field('main_title')?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_sub_field('main_title')?></h5>
                      <div class="box-desc"><?php echo get_sub_field('box_content')?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_sub_field('box_hover_image')?>" alt="box_hover_image_title"><span><?php echo get_sub_field('box_hover_image_title')?></span></div>
                      <h5 class="box-title"><?php echo get_sub_field('box_hover_title')?></h5>
                      <div class="box-desc">
                        <?php echo get_sub_field('box_hover_description')?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <?php
              $i++;
              endwhile; endif;
              ?>
              <?php
              $i=0;
               if(get_field('third_coloum_repeater')):
                while(has_sub_field('third_coloum_repeater')):
               ?>
              <div class="col-lg-6 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_sub_field('third_image')?>" alt="<?php echo get_sub_field('third_title')?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_sub_field('third_title')?></h5>
                      <div class="box-desc"><?php echo get_sub_field('third_content')?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_sub_field('third_hover_image')?>" alt="<?php echo get_sub_field('third_hover_image_title')?>"><span><?php echo get_sub_field('third_hover_image_title')?></span></div>
                      <h5 class="box-title"><?php echo get_sub_field('third_hover_title')?></h5>
                      <div class="box-desc">
                        <?php echo get_sub_field('third_hover_description')?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <?php
              $i++;
              endwhile; endif;
              ?>
              <div class="col-lg-5 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('fourth_left_image') ?>" alt="<?php echo get_field('fourth_left_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('fourth_left_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('fourth_left_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('fourth_left_hover_image') ?>" alt="<?php echo get_field('fourth_left_hover_image_title') ?>"><span><?php echo get_field('fourth_left_hover_image_title') ?></span></div>
                      <h5 class="box-title"><?php echo get_field('fourth_left_hover_title') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('fourth_left_hover_description') ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-7 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('fourth_right_image') ?>" alt="<?php echo get_field('fourth_right_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('fourth_right_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('fourth_right_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('fourth_right_hover_image') ?>" alt="<?php echo get_field('fourth_right_hover_image_title') ?>"><span><?php echo get_field('fourth_right_hover_image_title') ?></span></div>
                      <h5 class="box-title"><?php echo get_field('fourth_right_hover_title') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('fourth_right_hover_description') ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <?php
              $i=0;
               if(get_field('fifth_coloum_repeater')):
                while(has_sub_field('fifth_coloum_repeater')):
               ?>
              <div class="col-lg-4 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_sub_field('fifth_image')?>" alt="<?php echo get_sub_field('fifth_title')?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_sub_field('fifth_title')?></h5>
                      <div class="box-desc"><?php echo get_sub_field('fifth_content')?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_sub_field('fifth_hover_image')?>" alt="<?php echo get_sub_field('fifth_hover_image_text')?>"><span><?php echo get_sub_field('fifth_hover_image_text')?></span></div>
                      <h5 class="box-title"><?php echo get_sub_field('fifth_hover_text')?></h5>
                      <div class="box-desc">
                        <?php echo get_sub_field('fifth_hover_description')?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <?php
              $i++;
              endwhile; endif;
              ?>
              <div class="col-lg-7 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('sixth_left_image') ?>" alt="<?php echo get_field('sixth_left_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('sixth_left_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('sixth_left_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('sixth_left_hover_image') ?>" alt="<?php echo get_field('sixth_left_hover_image_title') ?>"><span><?php echo get_field('sixth_left_hover_image_title') ?></span></div>
                      <h5 class="box-title"><?php echo get_field('sixth_left_hover_title') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('sixth_left_hover_description') ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 col-sm-6">
                <div class="competency-img-box">
                  <a href="javascript:void(0);" class="img-box-inner">
                    <img src="<?php echo get_field('sixth_right_image') ?>" alt="<?php echo get_field('sixth_right_title') ?>">
                    <div class="img-content">
                      <h5 class="box-title"><?php echo get_field('sixth_right_title') ?></h5>
                      <div class="box-desc"><?php echo get_field('sixth_right_content') ?></div>
                    </div>
                    <div class="box-hover">
                      <div class="certi-icon"><img src="<?php echo get_field('sixth_right_hover_image') ?>" alt="<?php echo get_field('sixth_right_hover_image_title') ?>"><span><?php echo get_field('sixth_right_hover_image_title') ?></span></div>
                      <h5 class="box-title"><?php echo get_field('sixth_right_hover_title') ?></h5>
                      <div class="box-desc">
                        <?php echo get_field('sixth_right_hover_description') ?>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
          </div>
          <!--End competency image Part-->

          <!--Start inquiry form Part-->
          <div class="competency-form-section">
              <div class="row">
                <div class="col-lg-4 d-flex order-last order-lg-first">
                  <?php echo do_shortcode('[contact-form-7 id="17942" title="Submit Your Inquiry Now !"]'); ?>
                </div>
                <div class="col-lg-8 d-flex order-first order-lg-last">
                  <div class="certification">
                    <h3 class="form-title"><?php echo get_field('technology_title') ?></h3>
                    <img src="<?php echo get_field('technology_image') ?>" alt="<?php echo get_field('technology_title') ?>">
                    <div class="certi-desc">
                      <?php echo get_field('technology_description') ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!--End inquiry form Part-->
          <div class="btn-wrapper">
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
      </div>
      <!--End competency Part-->
    </div>
  </main>
  <!--End main Part-->
<?php get_footer();?>
