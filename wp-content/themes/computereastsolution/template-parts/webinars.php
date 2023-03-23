<?php
/*
Template Name:  Event Listing
*/
get_header();

?>
<link href="<?php echo get_template_directory_uri()?>/assets/css/custom-old.css" rel="stylesheet">
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title(); ?></h1>
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
          <li class="breadcrumb-item"><a href="<?php get_home_url(); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Company</a></li>
          <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>
      </article>
    </section>

		<?php
		$i=0;
                if(get_field('event_repeater')):
                while(has_sub_field('event_repeater')):				
		?>
    <section class="UpcomingWebinars">
      <article class="container-fluid header-content">
        <div class="row">
          <div class="col-sm-12 text-center TitelPart">
            <h2 class="mt-5 mb-0">Upcoming Webinars</h2>
            <p class="mt-2">Register to watch live and join attendees around the world in spirited Q&amp;A discussions.</p>
          </div>
        </div>
        <div class="row">
          <?php
          $i=0;
              if(get_field('event_repeater')):
              while(has_sub_field('event_repeater')):
          ?>
          <aside class="col-lg-4 col-md-6">
            <div class="WebinarsBox smallboxes">
              <div class="WebinarsImage"><img src="<?php echo get_sub_field('image')?>" alt=""></div>
              <div class="WebinarsText">
                <div class="date"><?php echo get_sub_field('date') ?></div>
                <!-- <div class="date">Coming Soon</div> -->
                <h3><a href="<?php echo get_sub_field('page_link') ?>"><?php echo get_sub_field('title') ?></a></h3>
                <p><?php echo get_sub_field('description') ?></p>
                <a href="<?php echo get_sub_field('page_link') ?>" class="link">Register Now</a> </div>
                <!-- <a href="javascript:void(0);" class="link">Register Now</a> </div> -->
            </div>
          </aside>
          <?php
          $i++;
              endwhile; endif;
          ?>
        </div>
        <!-- <div class="text-center"><a href="#" class="btn product-button rounded-pill">VIEW ALL</a></div> -->
      </article>
    </section>
		<?php
		$i++;
		endwhile; endif;
		?>

    <section class="VideoBlog">
      <article class="container-fluid header-content">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="mt-5 mb-0">On-demand Videos</h2>
            <p class="mt-2">Watch recorded webinars and learn from Q&A sessions, in your own time and on any device.</p>
          </div>
        </div>
        <div class="row">
          <?php
          $i=0;
              if(get_field('on_demand_repeater')):
              while(has_sub_field('on_demand_repeater')):
          ?>
          <aside class="col-lg-3 col-md-6">
            <div class="WebinarsBox WebinarsSmallBox">
              <div class="WebinarsImage">
                <?php echo get_sub_field('iframe') ?>
                <!-- <iframe width="560" height="250" src="https://www.youtube.com/embed/3bB1baNPXOE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                <!-- <img src="<?php echo get_sub_field('image') ?>" alt=""> -->
              </div>
              <div class="WebinarsText">
                <div class="date"><?php echo get_sub_field('date') ?></div>
                <h3><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('title') ?></a></h3>
                <a href="javascript:void(0);" class="link">PLAY Now</a> </div>
                <!-- <a href="#" class="link" data-toggle="modal" data-target="#PlayModal">PLAY Now</a> </div> -->
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
    <section class="About3Box">
      <article class="container-fluid">
        <ul>
          <li><a href="<?php the_permalink('313') ?>">
            <div> <img src="<?php echo get_template_directory_uri()?>/assets/img/icon001.png" alt="About Us">
              <h4>About Us</h4>
            </div>
            </a></li>
          <li><a href="<?php the_permalink('17838') ?>">
            <div> <img src="<?php echo get_template_directory_uri()?>/assets/img/icon002.png" alt="Contact Us">
              <h4>Contact Us</h4>
            </div>
            </a></li>
          <li><a href="<?php the_permalink('17950') ?>">
            <div> <img src="<?php echo get_template_directory_uri()?>/assets/img/icon003.png" alt="Blogs">
              <h4>Blogs</h4>
            </div>
            </a></li>
        </ul>
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
  									 <img src="<?php echo site_url();?>/wp-content/uploads/2020/07/20-July.png" alt="<?php the_title(); ?>" class="img-fluid w-100">
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
           	<!-- <form action="#" method="post">
           	<div class="form-group">
              <input type="text" class="form-control" id="Fname" placeholder="Enter Your Full Name">
            </div>
           	<div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Email">
            </div>
          	<button class="btn product-button rounded-pill w-100">Submit</button>
           	</form> -->
            <?php //dynamic_sidebar('Event Mailjet Form'); ?>
         </aside>
  		  </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Wrapper Ends Here -->
<?php get_footer();?>
