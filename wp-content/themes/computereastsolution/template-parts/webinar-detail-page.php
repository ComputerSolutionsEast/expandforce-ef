<?php
/*
Template Name:  Webinar Detail Page
*/
get_header();

?>
<link href="<?php echo get_template_directory_uri()?>/assets/css/custom-old.css" rel="stylesheet">
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<!-- <h1 class="text-white"><?php the_title(); ?></h1> -->
		</div>
	</div>
</div>
<!-- Wrapper Starts Here -->
<div class="wrapper">
  <!-- Content Area Starts Here -->
  <main id="content" class="customTemplatesContent itServices">
     <section class="BreadCrumbWrapper">
       <article class="container-fluid">
         <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
           <!-- <li class="breadcrumb-item"><a href="#">Company</a></li> -->
           <li class="breadcrumb-item"><a href="<?php the_permalink('754') ?>">Events</a></li>
           <li class="breadcrumb-item active" aria-current="page"><?php the_title() ?></li>
         </ol>
       </article>
     </section>
     <section class="BusinessVoice">
     	<article class="container-fluid header-content">
     	  <div class="row">
     		<aside class="col-lg-8 order-last order-lg-first">
       		<h1 class="mt-5 mb-0 TextBlue"><?php the_title() ?></h1>
       		<hr>
       		<h4 class="Helddate"><span class="TextRed"><?php echo get_field('webinar_held_on') ?></span> <span class="textGrey"><?php echo get_field('webniar_date') ?></span></h4>
       		<?php echo get_field('webinar_content') ?>
       		<ul class="RoundList" style="padding-left:23px">
            <?php
            $i=0;
             if(get_field('bullet_point_repeater')):
              while(has_sub_field('bullet_point_repeater')):
             ?>
       			<li><?php echo get_sub_field('bullet_points')?></li>
            <?php
             $i++;
             endwhile; endif;
           ?>
       		</ul>
          <?php echo get_field('paragraph_one') ?>
          <ul class="RoundList" style="padding-left:23px">
            <?php
            $i=0;
             if(get_field('bullet_point_repeater_second')):
              while(has_sub_field('bullet_point_repeater_second')):
             ?>
            <li><?php echo get_sub_field('points')?></li>
            <?php
             $i++;
             endwhile; endif;
           ?>
          </ul>
       		<?php echo get_field('paragraph_two') ?>
          <h3 class="TextBlue"><?php echo get_field('heading_blue_color') ?></h3>
          <div class="red-color-text">
            <?php echo get_field('red_color_notice') ?>
          </div>
     		</aside>
     		<aside class="col-lg-4 order-first order-lg-last">
          <?php echo do_shortcode(get_field('contact_form')); ?>
     		</aside>
     	</div>
     	</article>
     </section>
     <?php
     $j=0;
         if(get_field('upcoming_webinar')):
         while(has_sub_field('upcoming_webinar')):
     $first = get_sub_field('title');
     $j++;
         endwhile; endif;
     if( !empty( $first ) ) : ?>
     <section class="UpcomingWebinars greybg">
       <article class="container-fluid header-content">
         <div class="row">
           <div class="col-sm-12 text-center TitelPart">
             <h2 class="mt-0 mb-0">Upcoming Webinars</h2>
             <p class="mt-2">Register to watch live and join attendees around the world in spirited Q&amp;A discussions.</p>
           </div>
         </div>
         <div class="row">
           <?php
           $i=0;
               if(get_field('upcoming_webinar')):
               while(has_sub_field('upcoming_webinar')):
           ?>
           <aside class="col-lg-4 col-md-6">
             <div class="WebinarsBox">
               <div class="WebinarsImage"><img src="<?php echo get_sub_field('image')?>" alt=""></div>
               <div class="WebinarsText">
                 <div class="date"><?php echo get_sub_field('date') ?></div>
                 <h3><a href="<?php echo get_sub_field('page_link') ?>"><?php echo get_sub_field('title') ?></a></h3>
                 <?php echo get_sub_field('description') ?>
                 <a href="<?php echo get_sub_field('page_link') ?>" class="link">Register Now</a> </div>
             </div>
           </aside>
           <?php
           $i++;
               endwhile; endif;
           ?>
         </div>
         <div class="text-center"><a href="#" class="btn product-button rounded-pill">VIEW ALL</a></div>
       </article>
     </section>
   <?php endif; ?>
    <br/>
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
                    'after' => '2018-12-01'
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
</div>

<!-- Wrapper Ends Here -->
<?php
get_footer();
?>
