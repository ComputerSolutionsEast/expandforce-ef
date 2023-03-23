<?php
/*
Template Name:  Referral Program template
*/
get_header();
?>
<!-- Wrapper Starts Here -->
  <!-- Content Area Starts Here -->
  <div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Referral Program">
  	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
  		<div class="container">
  			<!-- <h1 class="text-white"><?php the_title() ?></h1> -->
  			<p class="lead text-white"><?php echo get_field('banner_content') ?></p>
  		</div>
  	</div>
  </div>
  <main id="content" class="customTemplatesContent itServices">
    <div class="container-sm p-bottom-70 raw">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="head-text text-center">
           <h1 class="wow fadeInUp p-top-25" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;"><?php the_title() ?></h1>
           <div class="line wow fadeInUp p-top-30" data-wow-duration="0.8s" style="visibility: visible; max-width: 50px; margin: auto; animation-duration: 0.8s; animation-name: fadeInUp;"></div>
       </div>
   </div>
      <div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="head-text">
               <h5 class="wow fadeInUp p-top-50" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;"><?php echo get_field('title') ?>
               </h5>
               <p class="p-top-20 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;"><?php echo get_field('description') ?></p>
               <?php
               $i=0;
               if(get_field('rules_repeater')):
                 while(has_sub_field('rules_repeater')):
                   ?>
               <p class="p-top-20 wow fadeInUp check-color1" style="visibility: visible; animation-name: fadeInUp;"> <i class="fas fa-circle"></i><?php echo get_sub_field('rules_points')?>
               </p>
               <?php
                $i++;
                endwhile; endif;
              ?>
               <div class="head-text p-top-50">
                 <?php echo do_shortcode( '[contact-form-7 id="16088" title="Referral Program"]' ); ?>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                   <div class="head-text p-top-20">
                     <?php
                     $i=0;
                      if(get_field('contant_repeater')):
                       while(has_sub_field('contant_repeater')):
                      ?>
                       <h5 class="p-top-50" data-wow-duration="0.7s" style="visibility: visible; animation-duration: 0.7s; animation-name: fadeInUp;"><?php echo get_sub_field('heading')?>
                       </h5>
                       <?php echo get_sub_field('content')?>
                       <?php
                        $i++;
                        endwhile; endif;
                      ?>                       
                   </div>
               </div>
           </div>
       </div>
   </div>
    </div>
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
  </main>
  <!-- Content Area Ends Here -->

<!-- Wrapper Ends Here -->
<?php
get_footer();
?>
