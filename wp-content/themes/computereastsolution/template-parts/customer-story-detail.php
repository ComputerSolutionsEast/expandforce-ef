<?php
/*
Template Name:  Customer Storeis Detail Page
*/
get_header();
global $post;
get_permalink( $post->ID );
?>
<!-- Wrapper Starts Here -->
  <!-- Content Area Starts Here -->
  <div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="case study">
  	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
  		<div class="container">
        <!-- <h1 class="text-white"><?php the_title() ?></h1> -->
  			<p class="lead text-white"><?php echo get_field('banner_content') ?></p>
  		</div>
  	</div>
  </div>
  <main id="content" class="customTemplatesContent itServices">
    <section class="BreadCrumbWrapper">
      <article class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php get_home_url(); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php the_permalink('1954');?>">Customer Stories</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
        </ol>
      </article>
    </section>
     <section class="casestudy-detail mt-5">
       <article class="container-fluid">
         <div class="row">
           <aside class="col-lg-3">
             <div class="story-meta">
               <div class="logo-div"> <a href="#"><img src="<?php echo get_field('logo')?>" alt=""></a>
               </div>
               <?php
               if( have_rows('sidebar_repeater') ){
                   while ( have_rows('sidebar_repeater') ) {
                       the_row();
               ?>
                 <dl>
                   <dt><?php echo get_sub_field('title')?></dt>
                   <?php
                       if( have_rows('link_repeater') )
                       {
                           while ( have_rows('link_repeater') )
                           {
                               the_row();
                   ?>
                   <?php if( get_sub_field('page_link') ): ?>
                   <dd><a target="_blank" href="<?php echo get_sub_field('page_link')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_sub_field('page_name')?></a></dd>
                   <?php endif; ?>
                   <?php if(empty(get_sub_field('page_link')) ): ?>
                   <dd><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo get_sub_field('page_name')?></dd>
                   <?php endif; ?>
                   <?php
                           };
                       };
                       ?>
                 </dl>
               <?php }
             }
           ?>
               <hr>
               <h4>Share this story</h4>
               <ul class="ShareIcon">
<!--                 <li><a href="https://www.facebook.com/Expand-Force-105575587585512" target="_blank" class="d-inline-block" tabindex="0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
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
                 <li><a href="mailto:?Subject=<?php echo the_title(); ?>&Body=<?php echo the_field('banner_content'); ?> <?php echo get_permalink($post->ID); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/mailsh.png" width="25" height="25" alt="Email" />
                     </a>
                 </li>     
               </ul>
             </div>
           </aside>
           <aside class="col-lg-9">
             <div class="print-hero">
               <h1 class="mt-4 mb-0 TextBlue"><?php the_title();?></h1>
             </div>
             <p class="date"> <?php echo get_field('date')?></p>
             <div class="executive-summary">
               <?php echo get_field('description')?>
             </div>
             <div class="">
               <!-- <div class="vidyard-player-container">
                 <div class="vidyard-div-u65bcWjQVscKMXxdaPztmV" role="application" aria-label="media player" style="position: relative; padding-bottom: 56.25%; height: 0px; overflow: hidden; max-width: 100%;">
                   <iframe allow="autoplay; fullscreen; picture-in-picture; camera; microphone; display-capture" allowfullscreen="" allowtransparency="true" aria-label="Video" class="vidyard-iframe-u65bcWjQVscKMXxdaPztmV" frameborder="0" height="100%" width="100%" scrolling="no" src="https://play.vidyard.com/u65bcWjQVscKMXxdaPztmV?disable_popouts=1&amp;type=inline&amp;v=4.2.23" title="Video" style="opacity: 1; background-color: transparent; position: absolute; top: 0px; left: 0px;"></iframe>
                 </div>
               </div>
               <img class="vidyard-player-embed" data-type="inline" data-v="4" onload="renderVidyardPlayer(this)" src="https://play.vidyard.com/u65bcWjQVscKMXxdaPztmV.jpg" data-uuid="u65bcWjQVscKMXxdaPztmV" data-rendered="true" style="display: none;">  -->
               <img src="<?php echo get_field('imagevideo')?>" alt="">
             </div>
             <div class="clearfix"></div>
               <div class="executive-summary">
                 <?php
                 $i=0;
                  if(get_field('title_and_content_repeater')):
                   while(has_sub_field('title_and_content_repeater')):
                  ?>
                   <h2 data-fontsize="28" data-lineheight="36" class="mt-5 mb-3"><?php echo get_sub_field('heading')?></h2>
                  <?php echo get_sub_field('content')?>
                 <?php
                 $i++;
               endwhile; endif;
               ?>
               </div>
               <div class="row">
                 <?php
                 $i=0;
                  if(get_field('box_repeater')):
                   while(has_sub_field('box_repeater')):
                  ?>
                 <aside class="col-sm-4">
                   <div class="case-study-boxes">
                     <p><img src="<?php echo get_sub_field('box_icon')?>" alt=""></p>
                     <div class="case-studies-content"><?php echo get_sub_field('box_content')?></div>
                   </div>
                 </aside>
                 <?php
                  $i++;
                  endwhile; endif;
                ?>
               </div>
           </aside>
           <aside class="col-lg-12">
             <div class="related-wrapper">
               <!-- <h3>Similar Stories</h3> -->
               <div class="row">
                 <?php
                 $i=0;
                  if(get_field('stories_repeater')):
                   while(has_sub_field('stories_repeater')):
                  ?>
                 <aside class="col-lg-3 col-md-6">
                   <div class="search-result"> <a href="javascript:void(0);">
                     <div class="search-result_inner"> <img class="result_success_image" src="<?php echo get_sub_field('story_image')?>" alt="">
                       <div class="search-result_data">
                         <p><?php echo get_sub_field('story_description')?></p>
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

<?php
get_footer();
?>
