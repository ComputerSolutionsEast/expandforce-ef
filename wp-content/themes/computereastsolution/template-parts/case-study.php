<?php
/*
Template Name:  Case Study template
*/
get_header();
global $post;
get_permalink( $post->ID );
?>
<!-- Wrapper Starts Here -->
  <!-- Content Area Starts Here -->
  <div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
  	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
  		<!-- <div class="container">
  			<h1 class="text-white"><?php the_title(); ?></h1>
  			<p class="lead text-white"><?php the_field('banner_content'); ?></p>
  		</div> -->
  	</div>
  </div>
  <main id="content" class="customTemplatesContent itServices">
    <section class="BreadCrumbWrapper">
      <article class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)"><?php the_title(); ?></a></li>
        </ol>
      </article>
    </section>
     <section class="casestudy-detail mt-5">
       <article class="container-fluid">
         <div class="row">
           <aside class="col-lg-12">
             <div class="related-wrapper">
               <h1 class="storeies"><?php echo get_field('title') ?></h1>
               <div class="row">
                 <?php
                 $i=0;
                  if(get_field('listing_repeater')):
                   while(has_sub_field('listing_repeater')):
                  ?>
                  <aside class="col-lg-3 col-md-6">
                  <div class="search-result-container">
                      <a class="search-result" target="_blank" href="<?php echo get_sub_field('case_study_detail_page_link')?>">
                          <div class="">
                              <img class="result_success_image" src="<?php echo get_sub_field('case_study_image')?>" alt="<?php echo get_sub_field('case_study_industry')?>">
                              <div class="search-result__data">
                                  <div class="facet-type">
                                      <span><?php echo get_sub_field('case_study_industry')?></span>
                                  </div>
                                  <h4 title="Grant Thornton looks to AI to close new opportunities faster, win more deals"><?php echo get_sub_field('case_study_short_description')?></h4>
                                  <div class="search-result__indicators">
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                 </aside>
               <?php
                $i++;
                endwhile; endif;
              ?>
               </div>
             </div>
           </aside>
           <aside class="col-lg-12 text-center social-innerpage">
             <h4>Follow Us</h4>
             <ul class="ShareIcon">
<!--           <li><a href="https://www.facebook.com/Expand-Force-105575587585512" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="https://twitter.com/ExpandForce" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://www.linkedin.com/company/expandforce" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
               <li><a href="https://www.instagram.com/expandforce" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>-->
                 <li>
                 <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID); ?>&title=<?php echo the_title(); ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                 </li>
                 <li>
                     <a target="_blank" href="http://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo get_permalink($post->ID); ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                 </li>
                 <li>
                     <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($post->ID); ?>&title=<?php echo the_title(); ?>&source=<?php bloginfo('url'); ?>" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                 </li>
                 <li><a href="https://www.instagram.com/expandforce" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></li>
<!--                 <li><a href="mailto:?Subject=<?php echo the_title(); ?>&Body=<?php //echo the_field('banner_content'); ?> <?php //echo get_permalink($post->ID); ?>"><img src="<?php //echo get_template_directory_uri() ?>/assets/img/mailsh.png" width="25" height="25" alt="Email" />
                     </a>
                 </li>-->
             
             </ul>
           </aside>
         </div>
       </article>
     </section>
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
<!-- Modal -->
  <div id="PlayModal" class="modal fade PlayNowModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="modal-body">
          <div class="text-center text-uppercase"><h4 class="modal-title TextBlue">Team CSE Is Here To Help!</h4>
          <p>Enter Your Info Below</p>
  		  </div>
        <hr>
        <div class="row">
         <aside class="col-sm-4"></aside>
         <aside class="col-sm-8">
           	<form action="#" method="post">
           	<div class="form-group">
              <input type="text" class="form-control" id="Fname" placeholder="Enter Your Full Name">
            </div>
           	<div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
            </div>
          	<button class="btn product-button rounded-pill w-100">Submit</button>
           	</form>
         </aside>
  		  </div>
        </div>
      </div>
    </div>
  </div>

<!-- Wrapper Ends Here -->
<?php
get_footer();
?>
